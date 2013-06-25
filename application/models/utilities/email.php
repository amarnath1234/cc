<?php

class Email extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function sendEmail($email, $subject, $htmlString) {
        // need to move this config to the main config section and just include them here 
        $config = array(
			'mailtype' => "html",
			'protocol' => "smtp",
			'smtp_host' => "ssl://smtp.googlemail.com",
			'smtp_port' => 465,
			'smtp_user' => "amar.insane@gmail.com",
			'smtp_pass' => "DiscoFighter1" 
		);
        
        
        
        $this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->message($htmlString);
		$this->email->from('amar.insane@gmail.com','CC');
		$this->email->to($email);
		$this->email->subject($subject);
                
                if($this->email->send())
		{
                    return true;
		}
		else
		{
			//show_error($this->email->print_debugger());
                        return false;
		}	
                
       return false;
    }
    
    function getPasswordRecoveryTemplate($url, $email) {
       $templateString = 'Hi, <br/><br/>';
       $templateString .= 'You, or somebody else has chosen to rest the password for '.$email.'<br/>';
       $templateString .= 'Please click on the link below to reset your password<br/><br/>';
       $templateString .= $url;
        
       return $templateString;
    }
    
}