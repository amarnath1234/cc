<?php

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
         $pageDataArray = array();
        
        $data = array(
                'pageLoad' => 'admin_dashboard',
                'pageData' => $pageDataArray
                );
        $this->load->view('layout/content_layout',$data);       
    }
}