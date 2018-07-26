<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincategory extends MY_Controller {


   	public function __construct(){

       		 parent::__construct();
       		 $this->load->model('Adlisting/maincategorymodel');
           

            
             // custom paging configuration
            
   	}


   	public function index($cat){
            
             unset($_SESSION['min']);
            unset($_SESSION['max']);
            unset($_SESSION['sort']);
            $search_query = "";
            $data['ads']     =  $this->maincategorymodel->all_classified($cat,$search_query,10,0);

            if ( ! file_exists(APPPATH.'views/pages/maincategory.php')){
                // Whoops, we don't have a page for that!
                show_404();
           }
            
            $this->load->view('templates/header.php');
            $this->load->view('templates/search.php',$data);
            $this->load->view('pages/maincategory.php');
            $this->load->view('templates/footer.php');
            

			

		}



    public function load_more_ajax($cat){

         $search_string = $this->input->post('search_query');
         $data = $this->input->post('id');
         $limit = 10;
         $offset = $data*10;
         $ads = $this->maincategorymodel->all_classified($cat,$search_string,$limit,$offset);  ?>
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


   <?php   }



   public function minmax($cat){
         
         
        $min = $this->input->post('min');
        $max = $this->input->post('max');
        $sort = $this->input->post('sort');

        
        $search_string = $this->input->post('search_query');
        $college = $this->input->post('college');

     
         $config = array(
           array(
                'field' => 'min',
                'label' => 'Minimum',
                'rules' => 'numeric',
                
                ),

            array(
                'field' => 'max',
                'label' => 'Maximum',
                'rules' => 'numeric',
            ),

             array(
                'field' => 'sort',
                'label' => 'Sorting',
                'rules' => 'numeric',
            )
               
                );


        
         $this->form_validation->set_rules($config);
         if ($this->form_validation->run()){
          
            
        
         $this->session->set_userdata('min',$min);
         $this->session->set_userdata('max',$max);
         $this->session->set_userdata('sort',$sort);
         if(!empty($college)){
         $this->session->set_userdata('college',$college);
     }else{
        unset($_SESSION['college']);
     }
         $limit = 10;
         $offset = 0;
         
         $ads = $this->maincategorymodel->all_classified($cat,$search_string,$limit,$offset); ?>
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


   <?php }else{?>

    <li style="text-align: center;">Please select a valid range</li>

  <?php }




}

}

?>