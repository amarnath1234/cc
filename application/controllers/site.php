 <?php

class Site extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $pageDataArray = array();
        
        $data = array(
                'pageLoad' => 'home_page',
                'pageData' => $pageDataArray
                );
        $this->load->view('layout/content_layout',$data);        
    }
    
}