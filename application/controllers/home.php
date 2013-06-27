<?php

class Home extends CI_Controller {

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
    
    function blockForm($action, $id) {
       
       /* 
        if(($action == 'contribute')&&($id == 0)) {
            $pageDataArray = array(); // change this repeated declaration
        } else */ 
            $pageDataArray = array();
            $pageDataArray['action'] = $action;
            if($action == 'edit') {
            
            //need to populate this array with the id values 
            //
            //$this->load->model('block_manager');
            //$pageDataArray['dbData'] = $this->account_manager->getsomedata($id);
              
              $pageDataArray['id'] = $id;
        } else if ($action == 'register') {
              $pageDataArray['id'] = 0;
        }
        
        $data = array(
                'pageLoad' => 'block_form',
                'pageData' => $pageDataArray
                );
        $this->load->view('layout/content_layout',$data);        
    }
}