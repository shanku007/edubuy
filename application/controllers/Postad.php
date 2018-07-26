 <?php
defined('BASEPATH') OR exit('No direct script access allowed');





class PostAd extends MY_Controller {


             public function __construct()
                                       {
                                        parent::__construct();
                                        $this->load->model('postadmodel');
                                        $this->load->helper(array('form','string'));
                                        $this->load->library(array('image_lib','upload'));
             
                           }









             public function index(){
                
                $data['error'] = '';
                $this->posting($data);
                    
             }









//Here upload function begin
             public function upload(){

                 $config = array(
           array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'trim|required|max_length[80]',
                'errors' => array(
                        'required'             => 'Please Provide a valid name',
                        'max_length'           => 'Please enter less than 80 character',
                        'alpha_numeric_spaces' => 'Title can only be Alphanumeric'
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
                'rules' => 'trim|required|valid_email',
                'errors'=> array(
                                   'required'    => 'Please Enter Your Email',
                                   'valid_email' =>'Please enter a valid Email'

                          )

                ),

        array(
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required|numeric|min_length[10]',
                'errors' => array(
                        'required' => 'Please enter a phone',
                        'numeric'  => 'Please enter a valid phone no.',
                        'min_length'=>'Please enter the 10 digit phone no.'       
                )
        ),
        array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required|alpha_numeric_spaces',
                'errors' => array(
                        'required'             => 'Please enter your name',
                        'alpha_numeric_spaces' => 'Please do not use any symbol'
        )

                ),
          array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'trim|required|numeric',
                'errors'=> array(
                                   'required' => 'Please Enter Your Product Price',
                                   'numeric'  => 'Please enter amount in digits only'

                          )

                ),

        array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'trim|required',
                'errors' => array(
                        'required'              => 'Please enter the Description of your product',
                        'alpha_numeric_spaces'  => 'Please use only alphabet and number to describe your product'
                )
        ),
        array(
                'field' => 'category',
                'label' => 'Category',
                'rules' => 'required|numeric',
                'errors' => array(
                        'required'=> 'Please select the category',
                        'numeric' => 'Please select a valid Category'
        )

                )
    );



                   $this->form_validation->set_rules($config);
                   $this->form_validation->set_error_delimiters('<div class="alert alert-danger errors">', '</div>');
//checking for form validation
              if ($this->form_validation->run()) { 

                    

                    $number_of_files = count($_FILES['images']['name']);
                    $files = $_FILES;

                    $title = $this->input->post('title');
                    $description = $this->input->post('description');
                    $col_name = $this->input->post('col_name');
                    $email = $this->input->post('email');
                    $phone = $this->input->post('phone');
                    $name = $this->input->post('name');
                    $price = $this->input->post('price');
                    $category = $this->input->post('category');
                    $Ad_id   = random_string('numeric', 16);

                    //checking if User is logged in and setting the status of Ad
                    /*if(!$this->session->userdata('id')){
                     $status = 0;
                     $this->email_verification($Ad_id,$email,$name);
                    }else{
                     $status = 1;
                    }*/

                    $status = 1;
                    //Login check finish
                    
                    //Flag to check if image upload was sucessfull or not
                    $flag = TRUE;

                    //Checking if there are files to upload
                    if($number_of_files>0){
                    

                    //Setting to upload only three image
                    if($number_of_files<=3){

                        $files_to_upload = $number_of_files;

                    }else{
                        $files_to_upload = 3; ;
                    }

                    //Looping to upload three files
                
                    for($i=0;$i<$files_to_upload;$i++){
                            $_FILES['images']['name']  = $files['images']['name'][$i];
                            $_FILES['images']['type']  = $files['images']['type'][$i];
                            $_FILES['images']['tmp_name']  = $files['images']['tmp_name'][$i];
                            $_FILES['images']['error']  = $files['images']['error'][$i];
                            $_FILES['images']['size']  = $files['images']['size'][$i];
                        
                            $config['upload_path'] =  './uploads/';
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size']     = '40000';
                            $config['overwrite']  = TRUE;
                            $config['remove_spaces'] = TRUE;
                            $this->upload->initialize($config);

                            if(!$this->upload->do_upload('images')){
                            $data['error'] =  $this->upload->display_errors('<div class="alert alert-danger errors">', '</div>');
                            $this->posting($data);

                    //Setting flag to FALSE

                    $flag = FALSE;

                    }


                    else{
                            $data = array('upload-data' => $this->upload->data());
                            $this->load->library('image_lib');
                            $config['source_image'] = './uploads/'.$_FILES['images']['name'];
                            $config['wm_text'] = 'EDUBUY';
                            $config['wm_type'] = 'text';
                            $config['wm_font_path'] = './system/fonts/texb.ttf';
                            $config['wm_font_size'] = '16';
                            $config['wm_font_color'] = '#002cf3';
                            $config['wm_vrt_alignment'] = 'center';
                            $config['wm_hor_alignment'] = 'left';
                            $config['wm_padding'] = '20';
                            $this->image_lib->initialize($config);
                            $this->image_lib->watermark();
                            foreach ($data as $data){
                            $uploaded_image['image'.$i]  =  $data['file_name'];

                     
                 }

                        
                        }
                    }


                

                











     }                 


                       if($flag){
                           $insert_data = $this->postadmodel->insert_info($title,$description,$col_name,$email,$phone,$name,$price,$category,$Ad_id,$status);
                        
                           for($i=0;$i<$files_to_upload;$i++){
                           
                           $this->postadmodel->update_image($uploaded_image['image'.$i],$i,$Ad_id);
                        }
                        if($insert_data){
                        
                            $data['message']  = 'Your Ad is sucessfully Uploaded';
                           $data['class'] = "success";
                           $this->mylib->message($data);
                            header("Refresh: 5; ".site_url());
                           
                           

                       }
                       
                        
                            
                       } 

                       
                      /* if((!$this->session->userdata('id') AND $flag)){
                     $status = 0;
                     $this->email_verification($Ad_id,$email,$name);
                    
                        $data['message']  = 'We have sent you an email. Please check your email and verify your Posting. Check your spam folder in case you don\'t find it in the inbox';  
                         $data['class'] = "primary"  
                           $this->mylib->message($data);
                           $this->startpage();
                    }*/

                         
                }else{
                    $data['error'] = '';
                    $this->posting($data);
                }

             
                     
                     }



     public function email_verification($Ad_id,$email,$name){

           $this->load->library('email');
           $this->email->from('edubuy2017@gmail.com');
           $this->email->to($email);
           $this->email->subject('Verify Your Ad Posting');
           $message   = 'Dear'.$name.'You are receiving this message because you posted an Ad on edubuy.in';
           $message  .= 'Ignore this mail incase it was not you';
           $message  .= 'Click on the link to confirm your Ad posting';
           $message  .=  site_url('postad/verify_Ad_posting/'.$Ad_id);
           
           
           

           $this->email->message($message);

           if ( $this->email->send()) {
        //checking whether email is sent or not
                          
                          return TRUE;


                         } else{

                            return FALSE;

                         }
     }





     public function verify_Ad_posting($Ad_id){

        $status = $this->postadmodel->Ad_update($Ad_id);
        if($status){
             $data['message']  = 'Your Posting is sucessfully verified and now it is public';  
             $data['class']    = "success";  
             $this->mylib->message($data);


                          //Calling start page
                        $this->startpage();

        }else{
             $data['message']  = 'There is a problem verifying your posting, Please try again';  
             $data['class']    = "danger";  
             $this->mylib->message($data);


                          //Calling start page
                        $this->startpage();

        }
     }
     





 }