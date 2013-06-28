<?php
class Upload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// requires 'form' and 'url' helper if not autoloaded
	}
	
	/*
	*	Handles JSON returned from /js/uploadify/upload.php
	*/
	public function uploadify()
	{
		//Decode JSON returned by /js/uploadify/upload.php
		$file = $this->input->post('filearray');
		$data['json'] = json_decode($file);
		
		$this->load->view('upload/uploadify',$data);
	}
	
}
/* End of File /application/controllers/upload.php */