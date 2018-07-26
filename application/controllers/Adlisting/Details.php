<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends MY_Controller {


	public function index($Ad_id){
		
		 
         $this->load->model('adsmodel');
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

}