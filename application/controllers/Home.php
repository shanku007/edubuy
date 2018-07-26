 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
         
		$this->startpage();
		

	}

	//for contact, faq, feedback, howitworks,mobileapp, privacy, regions, services , sitemap, terms, typography .php

	public function re_direct($page_to_load){

		 if ( ! file_exists(APPPATH.'views/pages/'.$page_to_load.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$this->load->view('templates/header.php');
		$this->load->view('pages/'.$page_to_load.'.php');
		$this->load->view('templates/footer.php');

	}




//for all main page




    public function categories($page_to_load){

    	$this->load->model('adsmodel');
    	$data['ads_count'] = $this->adsmodel->no_of_ads_category();

		 if ( ! file_exists(APPPATH.'views/pages/'.$page_to_load))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
       
		$this->load->view('templates/header.php');
		$this->load->view('pages/'.$page_to_load,$data);
		$this->load->view('templates/footer.php');

	}
	







	


















    
}
