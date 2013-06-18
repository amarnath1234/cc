<?php

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
$this->load->helper('ChromePhp');
ChromePhp::log('this is a log message');


        if ($this->input->is_ajax_request()) {
            // the post has come from the javascript, hence validate and proceed
            
           print_r($this->input->post());
        } else {
            $pageDataArray = array();

            //if(isset($this->session->userdata('logged_in')) && ($this->session->userdata() == 1)) {
            //    array_push($pageDataArray, array('loggedIn' => 1));
            //}

            $data = array(
                'pageLoad' => 'login_page',
                'pageData' => $pageDataArray
            );
            $this->load->view('layout/content_layout', $data);
        }
    }

    function resetPassword() {

        $pageDataArray = array();

        $data = array(
            'pageLoad' => 'password_reset',
            'pageData' => $pageDataArray
        );
        $this->load->view('layout/content_layout', $data);
    }

}