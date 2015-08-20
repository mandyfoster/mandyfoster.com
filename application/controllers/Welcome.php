<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('templates/headerWIP');
		$this->load->view('welcome_message');
        
       // $this->load->helper(array('form', 'url'));
        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com'); 
        $this->email->cc('another@another-example.com'); 
        $this->email->bcc('them@their-example.com'); 

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');	

        $this->email->send();

        //echo $this->email->print_debugger();

		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('myMessage', 'Message', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('forms/quick-form');
		}
		else
		{
			$this->load->view('forms/quick-success');
		}

        $this->load->view('templates/footerWIP');
	}
}
