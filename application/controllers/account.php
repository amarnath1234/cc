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
            
          $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errorData = validation_errors();
                $errorData = str_replace('<p>','',$errorData);
                $errorData = str_replace('</p>','<br>',$errorData);
                $ret_val = array('status' => 'error',
                                'data' => $errorData);
                echo json_encode($ret_val);
            } else {
                //validation passed.. continue
                
                $ret_val = array('status' => 'success',
                                'data' => 1);
                echo json_encode($ret_val);
                
            }
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