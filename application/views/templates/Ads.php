<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends MY_Controller {


   	public function __construct(){

       		 parent::__construct();
       		 $this->load->model('adsmodel');
           $this->load->library('pagination');

            
             // custom paging configuration
            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
   	}


	public function all_classified(){

            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
      $config['base_url']    = base_url().'Ads/all_classified';
      $config['total_rows']  = $this->adsmodel->no_of_record(NULL);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified(NULL,$config['per_page'],$this->uri->segment(4));
      $this->pagination->initialize($config);
     
         
			$this->Allads($data);

			

		}


    public function all_Ads($cat){

            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['base_url']    = base_url().'Ads/all_classified';
      $config['total_rows']  = $this->adsmodel->no_of_record($cat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified($cat,$config['per_page'],$this->uri->segment(4));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);

      

    }



	public function transportation($cat,$subcat){
            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
	   $config['base_url']    = base_url().'Ads/';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(5));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);

	}



	public function mobiles($cat,$subcat){
                   $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
       $config['base_url']    = base_url().'Ads/mobiles';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(5));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);
		 

	}



	public function books_hobby($cat,$subcat){
               $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
      $config['base_url']    = base_url().'Ads/books_hobby';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(5));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);
		 

	}



	public function stationary($cat,$subcat){
            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
		  $config['base_url']    = base_url().'Ads/stationary';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(5));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);
	}




	public function electronics_appliances($cat,$subcat){
            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
	    $config['base_url']    = base_url().'Ads/electronics_appliances';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(3));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);

	}


		


	public function furnitures($cat,$subcat){

            $config['num_links'] = 6;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li><a>';
            $config['cur_tag_close'] = '</a></li>';
 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
      $config['base_url']    = base_url().'Ads/furnitures';
      $config['total_rows']  = $this->adsmodel->no_of_record_custom($cat,$subcat);
      $config['per_page']    = 2;
      $data['ads']           = $this->adsmodel->all_classified_custom($cat,$subcat,$config['per_page'],$this->uri->segment(5));
      $this->pagination->initialize($config);
     
         
      $this->Allads($data);

	}


	




	





	





	public function details($Ad_id){
		
		 

         $data['Ad'] = $this->adsmodel->singleAd($Ad_id);


		 if ( ! file_exists(APPPATH.'views/pages/single.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$this->load->view('templates/header.php');

		$this->load->view('pages/single.php',$data);
		$this->load->view('templates/footer.php');

	}



  public function Allads($view_data){

     if ( ! file_exists(APPPATH.'views/pages/all-classifieds.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
    $this->load->view('templates/header.php');
    $this->load->view('templates/search.php',$view_data);
    $this->load->view('pages/all-classifieds.php');
    $this->load->view('templates/footer.php');
  }
}