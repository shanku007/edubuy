 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useraccount extends My_Controller {

public function __construct(){
                                        
                               parent::__construct();
                               if(!$this->session->userdata('id')){
                               redirect('login');
                               
                               

                              }

             
                           }


 public function index(){
		
		                 $this->myaccount();
                    	}





public function password_validation(){
      $this->load->model('usermodel');

       $config = array(
           array(
                'field' => 'password',
                'label' => 'Email',
                'rules' => 'trim|required',
                'errors' => array(
                        'required'    => 'Please Enter Your Password',
                        
                                 )
                ),

            array(
                'field' => 'conpass',
                'label' => 'Confirm Password',
                'rules' => 'trim|required|matches[password]',
                'errors' => array(
                        'required' => 'Please Confirm your password',
                        'matches'  => 'Your password do not match'
                        
                                 )
                )
            );

        $this->form_validation->set_rules($config);
       if ($this->form_validation->run()){ 
        $password        = $this->input->post('password');
        $hashpassword    = password_hash($password,PASSWORD_BCRYPT,array('cost' => 8));
        $password_update = $this->usermodel->update_password($hashpassword);

        if($password_update){
          $data['message'] = 'Your password is sucessfully updated';
          $data['class'] = "success";
          $this->mylib->message($data);
          redirect('useraccount/');

        }
           
       }else{
        $this->passwordreset();
       }
}













 public function passwordreset(){
    if ( ! file_exists(APPPATH.'views/Usercontent/resetpassword.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $this->load->view('templates/header.php');
        
        $this->load->view('Usercontent/resetpassword.php');
        $this->load->view('templates/header.php');
 }











 public function logout(){

  
  unset($_SESSION['id']);
  redirect('login');
 }









 public function delete_ad($ad_id){
  $this->load->model('usermodel');
  $flag = $this->usermodel->delete_ad($ad_id);
  if($flag){
    $data['message']  = 'Ad Deleted sucessfully';  
    $data['class'] = "success";
     $this->mylib->message($data);
                         
                  
    $this->index();
  }else{

    $data['message']  = 'Unable to process Deleted sucessfully';  
    $data['class'] = "danger";
    $this->mylib->message($data);
    $this->index();

  }
 }


 public function loadmore(){

         $this->load->model('usermodel');
         $data = $this->input->post('id');
         $limit = 10;
         $offset = $data*10;
         $ads = $this->usermodel->user_ad($limit,$offset);?>
      <?php  if(count($ads)): ?>
                  <?php foreach ($ads as $data): ?>
                  <a href="<?= site_url('Ads/details/'.$data['AdId']); ?>">
                    <li>
                    <img src="<?= base_url('uploads/'.$data['Image1']); ?>" title="" alt="" />
                    <section class="list-left">
                    <h5 class="title"><?= $data['AdTitle']; ?></h5>
                    <span class="adprice">&#8377; <?= $data['Price']; ?></span>
                    <p class="catpath"><?= $this->mylib->category($data['Category']); ?>»<?= $this->mylib->categories_name($data['Category']); ?> </p>
                    <p class="catpath college"><?= $this->mylib->college_name($data['College_id']); ?></p>
                    </section>
                    <section class="list-right">
                    <span class="date"><?= $this->mylib->timeago($data['Time']); ?></span>
                    
                    </section>
                    <div class="clearfix"></div>
                    </li> 

                    <?php endforeach; ?>
                  <?php else: ?>

                  <li style="text-align: center;">No more Ads</li>
                  
                  <?php endif; ?>
<?php }




}

            