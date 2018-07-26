<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {


 public function __construct(){
                                        
        parent::__construct();
                                        
        $this->load->model('loginmodel');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

             
            }


 public function index(){

      

    $this->login();
    

  }



 public function login_validation(){

      
      $config = array(
           array(
                'field' => 'id',
                'label' => 'Email',
                'rules' => 'trim|required|callback_is_registered|valid_email',
                'errors' => array(
                        'required'    => 'Please Provide Email or Phone No.',
                        'valid_email' => 'Please enter a valid email'
                                 )
                ),

            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'Please enter your password'
                        
                                 )
                )
            );


            $this->form_validation->set_rules($config);
            

              if ($this->form_validation->run()){      
                 $id         = $this->input->post('id');
                 $password   = $this->input->post('password');
                 $login_id   = $this->loginmodel->checkuser($id,$password);
                 if($login_id){
                              
                              $this->session->set_userdata('id',$login_id);
                              redirect('Useraccount');
                             
                             } else{

                  
                                         $data['message'] = "Sorry, could not verify your credientials or Your Account is not verified";
                                         $data['class'] = "danger";
                                         $this->mylib->message($data);
                                         $this->login();
                                   }

                           } else{
                  
                    $this->login();
                            
                            }
                }





  public function is_registered($id){

    if($this->loginmodel->is_registered($id)){


       return TRUE;
    }
    else{
      $this->form_validation->set_message('is_registered', 'Sorry, You are not a registered User');
      return FALSE;
    }

  }





  //To hash the password
        private function hash_password($password){
                                              

                                              return password_hash($password, PASSWORD_BCRYPT);


}






 



  public function recover_validation(){
               $this->load->helper('string');
               $this->form_validation->set_rules('id','Email','trim|required|valid_email|callback_is_registered');
               
               //To check if form validation run
                if($this->form_validation->run()){
                $email       = $this->input->post('id');
                $reset_code  = random_string('md5', 32);
                $phone    = $this->loginmodel->update_reset_code($email,$reset_code);
                // To check if reset code id updated 
                if($phone != FALSE){
                $email_response  = $this->send_mail($email,$phone,$reset_code);
                //To check if email is sent
                    if($email_response){
                    $data['message'] = 'We have sent you an email with password reset link. Click on the link to reset your password. Please check your spam incase it is not in the inbox';
                    $data['class'] = "success" ;
                
                }else{
                  $data['message'] = 'Unable to send you an email at this time, Please try again later';
                  $data['class'] = "danger";

                }
                     
                    $this->mylib->message($data);
                    $this->login();
                }


                    //End of email check block



               else{
                  $data['message'] = 'There is an unknown error please try again';
                  $data['class'] = "danger";
                  $this->mylib->message($data);
                  $this->forget_password();

                }
                //End of reset code updation block

            }else{
                    $this->forget_password();
            }



}



     public function send_mail($email,$phone,$reset_code){
           $this->load->library('email');
           $this->email->from('edubuy2017@gmail.com');
           $this->email->to($email);
           $this->email->subject('Reset your password');
    $data['title']        = "Reset Your Password";
    $data['message']     = "You are receiving this email because you asked for change of password on edubuy.in. Please click on the link below to reset your password";
    $data['link']         = site_url('login/reset_password/'.$phone.'/'.$reset_code);
    $data['link_message'] = "Reset My Password";
    
    
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





     public function reset_password($phone,$code){

      $user_check = $this->loginmodel->reset_password($phone,$code);
      if($user_check){

        $this->session->set_userdata('id',$phone);
        
        redirect('useraccount/passwordreset');

      }else{
        $data['message'] = 'There is an unknown error while resetting your password,Please try again'.br();
        $data['message'] .= 'If you have not verified your account then please verify it first';
        $data['class'] = "danger";
        $this->mylib->message($data);
        $this->forget_password();

      }

     }



     
 


     



    }