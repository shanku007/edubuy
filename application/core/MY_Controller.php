<?php 
class MY_Controller extends CI_Controller{


      public function __construct()
                                       {
                parent::__construct();
                
                $this->load->library('pagination');
             
                           }
	

	  public function startpage(){

     
     
     $this->load->model('homemodel');

      if ( ! file_exists(APPPATH.'views/pages/index.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['firstlist']  = $this->homemodel->index_Ads(4,0);
        $data['secondlist'] = $this->homemodel->index_Ads(4,4);
        $data['thirdlist'] = $this->homemodel->index_Ads(4,8);
       
        $this->load->view('templates/header.php');
        $this->load->view('templates/headerbottom.php');
        $this->load->view('pages/index.php',$data);
		    $this->load->view('templates/footertop.php');
		    $this->load->view('templates/footer.php');


  }




   public function login(){

      

     if ( ! file_exists(APPPATH.'views/pages/login.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
    $this->load->view('templates/header.php');
    $this->load->view('pages/login.php');
    $this->load->view('templates/footer.php');

  }



   public function forget_password(){

    $this->load->view('templates/header.php');
    $this->load->view('pages/forgetpassword.php');
    $this->load->view('templates/footer.php');


                    }


   public function registration(){
    
    
                                  
                          if ( ! file_exists(APPPATH.'views/pages/register.php'))
                                      {
                                                // Whoops, we don't have a page for that!
                                                show_404();
                                          }
                          $this->load->view('templates/header.php');
                          $this->load->view('pages/register.php');
                          $this->load->view('templates/footer');
    

                      }


 




 public function posting($data){
                
                     
                    if ( ! file_exists(APPPATH.'views/pages/post-ad.php')){
                        // Whoops, we don't have a page for that!
                        show_404();
                      }
                     
                    $this->load->view('templates/header.php');
                    $this->load->view('pages/post-ad.php',$data);
                    $this->load->view('templates/footer.php');
             }




public function MyAccount(){

  if ( ! file_exists(APPPATH.'views/Usercontent/useraccount.php'))
                                              {
                                              // Whoops, we don't have a page for that!
                                              show_404();
                                              }

                                      $this->load->model('usermodel');
                                      $data['ads'] = $this->usermodel->user_ad(10,0);
                                      $this->load->view('templates/header.php');
                                      $this->load->view('Usercontent/useraccount.php',$data);
                                      $this->load->view('templates/footer');
}










 public function message($message){

                                echo '<div class="alert alert-danger alert-dismissable fade show">
                                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                                              '.$message.'
                                               </div>';


 }




 public function email($title,$message,$link,$link_message,$Useremail){

       

        $data['title']        = $title;
        $data['message']     = $message;
        $data['link']         = $link;
        $data['link_message'] = $link_message;

        $this->load->library('email');
        $this->email->set_newline("\r\n");
    
        $this->email->from('edubuy2017@gmail.com', 'Team Edubuy');
        $this->email->to($Useremail);  // replace it with receiver mail id
        $this->email->subject($title); // replace it with relevant subject 
    
        $body = $this->load->view('email/email.php',$data,TRUE);
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $this->email->message($body);   
        

       if ($this->email->send()){
        //checking whether email is sent or not
        echo "Email sent";
        return TRUE;
                         } else{
                          return FALSE;
                          echo "Email not sent";
                         }


   }


 }


  
    

