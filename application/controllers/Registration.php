 <?php
defined('BASEPATH') OR exit('No direct script access allowed');





class Registration extends MY_Controller {


           public function __construct()
                                       {
                                        parent::__construct();
                                        $this->load->model('regismodel');
                                        $this->load->helper('form');
             
                           }







//for initially calling the registration form
           public function index(){
    
    
                                  
                                 $this->registration();
    

                      }





//for verifying the form 


      public function registration_verification(){

                                     

                                     
                                     $config = array(
           array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required|max_length[15]|alpha_numeric_spaces',
                'errors' => array(
                        'required' => 'Please Provide a valid name',
                        'max_length' => 'Please enter less than 15 character',
                        'alpha_numeric_spaces' => 'Name can only be Alphanumeric'
                                 )
                ),

            array(
                'field' => 'col_name',
                'label' => 'College',
                'rules' => 'trim|required|numeric',
                'errors' => array(
                        'required' => 'Please select your college',
                        'numeric'  => 'Please select a valid college'
                                 )
                ),

          array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|callback_email_check',
                'errors'=> array(
                                   'required' => 'Please Enter Your Email',
                                   'valid_email' =>'Please enter a valid Email'

                          )

                ),

        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'Please enter a password'
                )
        ),
        array(
                'field' => 'conpass',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]',
                'errors' => array(
                        'required'=> 'Please confirm your password',
                        'matches' => 'Your password do not match'
        )

                ),

         array(
                'field' => 'phone',
                'label' => 'Phone No.',
                'rules' => 'trim|required|numeric|callback_phone_check',
                'errors' => array(
                        'required' => 'Please enter your phone no.',
                        'numeric' => 'Please enter only numbers'
                        
        )

                )
        
       
   );



              $this->form_validation->set_rules($config);
              $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

              if ($this->form_validation->run())
                {      

                        $name         = $this->input->post('name');
                        $college_name = $this->input->post('col_name');
                        $email        = $this->input->post('email');
                        $phone        = $this->input->post('phone');
                        $password     = $this->input->post('password');
                        
                        $hashedpassword =  password_hash($password,PASSWORD_BCRYPT,array('cost' => 8));


//to insert data and retrieve the time stamp to set verification code

                         $insert=$this->regismodel->insert_value($name,$college_name,$email,$phone,$hashedpassword);

                         foreach($insert as $timestamp){



                          $verification_code = $timestamp['Timestamp'];
                                  


                         }

 //control passes to email send function 




                         $status  = $this->send_email($name,$email,$phone,$verification_code);     
                         if($status){
                         $data['message']  = 'We have sent you an email. Please check your email and verify your account. Check your spam folder in case you don\'t find it in the inbox';  
                           $data['class'] = "success";
                           $this->mylib->message($data);


                         $this->login();



                         }    else{

                                $data['message'] = 'There is a problem verifying your your account. Please Try again. If problem persist contact Us';
                                $this->regismodel->remove($phone);
                                $data['class'] = "danger";
                                $this->mylib->message($data);

                                 $this->registration();
                                
                                  }    

                          

                            
                          


                       
        }
                else
                {
                      $this->registration();

                }



}
//registration_validation method ends here


      





       public function email_check($email)
        {
               

               $result=$this->regismodel->email_check($email);
               if ($result==FALSE)
                {
                        $this->form_validation->set_message('email_check', 'Somebody is already registered with this email ID');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }




         public function phone_check($phone)
        {

                $result=$this->regismodel->phone_check($phone);
                if ($result==FALSE)
                {
                        $this->form_validation->set_message('phone_check', 'Somebody is already registered with this Phone No.');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }








   private function send_email($name,$email,$phone,$verification_code){


     
     $this->load->library('email');
     

    //encrypted verification code

    $email_code = md5((string)$verification_code);





    $this->email->from('edubuy2017@gmail.com');
    $this->email->to($email);
    $this->email->subject('Please activate your account on edubuy');
    $data['title']        = "Verify Your Account";
    $data['message']     = "You are receiving this email because you registered on edubuy.in. Please click on the link below to activate your account";
    $data['link']         = site_url('registration/verify_email/'.$phone.'/'.$email_code);
    $data['link_message'] = "Verify My Account";
    
    
    $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
    $this->email->set_header('Content-type', 'text/html');

    $this->email->message($this->load->view('email/email.php',$data,TRUE));

     if ( $this->email->send()) {
        //checking whether email is sent or not
        return TRUE;
                         } else{
                          return FALSE;
                         }


   }





public function verify_email($phone,$code){


  $status = $this->regismodel->update($phone,$code);
  if($status){
      $data['message'] = 'Your email is verified. Login to acess your account';
     $data['class']    = "success";
     $this->mylib->message($data);

    $this->login();
     

  }

  else{

      $data['message'] = 'Could not verify your account. Register again';
      $data['class'] = "danger";
      $this->mylib->message($data);

      $this->registration();
      


  }
}










}