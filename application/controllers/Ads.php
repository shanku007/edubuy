<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends MY_Controller {


   	public function __construct(){

       		 parent::__construct();
       		 $this->load->model('adsmodel');
          
   	}


	


	




	





	





	
	



  public function setcollege(){


   $college = $this->input->post('college');
   $this->session->set_userdata('college',$college);

  }
}