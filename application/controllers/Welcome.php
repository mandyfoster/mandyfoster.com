<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('email');
        //$this->load->library('recaptchalib'); 
	}

        public function index()
	{
        /*if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }*/
        
        //$this->load->helper('url');
        $this->load->view('templates/header');
		$this->load->view('welcome_message');
        $this->load->view('templates/footer');
	}//end index page

    
}
