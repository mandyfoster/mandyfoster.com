<?php
class Pages extends CI_Controller {
    
    
    
    
// settings
	protected 	$sendEmailTo 		= 	'contact@mandyfoster.com'; //change this!
	protected	$subjectLine 		= 	""; // actually set on line 58.
	
	// views
	protected 	$formView			= 	'pages/contact';
	protected	$successView		= 	'welcome_success';
	protected	$errorView			= 	'welcome_error'; //used when the mail failed.
	protected  	$displayEmailWhenError = FALSE; // if $errorView is shown, should we reveal $sendEmailTo?
	protected 	$headerView 		= 	'templates/header'; //null to disable
	protected 	$footerView 		= 	'templates/footer'; //null to disable
	// spam protection
	protected	$spam_protection	= 	TRUE; // true or false
	protected 	$spam_question		=	'What color is a red snake';
	protected	$spam_answer		= 	'red';
	// other
	public 		$data 				= 	array(); // used for the views
    
    
    
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('email');
        //$this->load->library('recaptchalib'); 
	}
    
    
    
    
    
    
    

    public function about($page = 'about')
	{
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
        //$this->load->helper('url');
        $this->load->view('templates/header');
		$this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
	}//end about page
    
    public function contact($page = 'contact')
	{
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
        
        $this->subjectLine = "Contact form response from " . $_SERVER['HTTP_HOST'];
		$this->set_validation_rules(); 
        $this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');
 
        
        
		if($this->form_validation->run() == FALSE) 
        {// show the form
			$this->show_view($this->formView);
		} 
        else 
        {// success! email it, assume it sent, then show contact success view.
			if ($this->send_mail()) 
            {
				$this->show_view($this->successView);
			}
			else
            {
				log_message("error","Contact form - Error sending email. Debug message: " . $this->email->print_debugger() . " from: {$this->input->post('email')}. Message: {$this->input->post('message')}");
				$this->show_view($this->errorView);
			}// load the view
            
			// if $this->headerView/footerView is set it will load their views
		}  
	}//end contact page
    
    
    
    
    
    
    
    
    public function recaptcha($str='')
    {
      $google_url="https://www.google.com/recaptcha/api/siteverify";
      $secret='6Lcb-AETAAAAANwzr5UcL2PxuM4iwV8eQbcd971V';
      $ip=$_SERVER['REMOTE_ADDR'];
      $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_TIMEOUT, 10);
      curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
      $res = curl_exec($curl);
      curl_close($curl);
      $res= json_decode($res, true);
      //reCaptcha success check
      if($res['success'])
      {
        return TRUE;
      }
      else
      {
        $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
        return FALSE;
      }
    }
    
    
	/* HELPER FUNCTIONS */
	// load the form view
	protected function show_view($view) 
    {
			if ($this->headerView) {
                $this->load->view($this->headerView,$this->data);
            }
        
			$this->load->view($view,$this->data);
        
			if ($this->footerView) {
                $this->load->view($this->footerView,$this->data); 
            }
	}
    
	protected function send_mail()
    {
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to($this->sendEmailTo);
			$this->email->subject($this->subjectLine);
			$this->email->message($this->input->post('message') . '   ' . $this->input->post('needResume'));
			return $this->email->send();
	}
    
    
	protected function set_validation_rules() 
    {
		$this->form_validation->set_rules('name', 'Your name', 'trim|required');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'The Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|strip_tags');
		/*if ($this->spam_protection) 
        {
			$this->form_validation->set_rules('spam_protection', 'Spam Protection', 'callback__spam_protection');
		}*/
	}

    
    
    
}