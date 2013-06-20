<?php

class Account extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
       
        if($this->session->userdata('role_id')){
            $this->pageRedirect($this->session->userdata('role_id'));
        }

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
              
                $this->load->model('account_manager');               
                $result = $this->account_manager->loginValidate();
                $redirectUrl = '';
                if($result) {
                    
                    $url = '';
                     switch ($this->session->userdata('role_id')) {
                case 1:
                    $url = base_url().'admin';                              
                    break;
                case 2:
                    $url = base_url().'home';          
                    break;
                default:
                    $url = base_url();          
                    break;
            }
            
                    $ret_val = array('status' => 'success',
                                'data' => $url);
                    echo json_encode($ret_val);
                } else {
                    $ret_val = array('status' => 'error',
                                'data' => 'Invalid credentials! Please try again');
                    echo json_encode($ret_val);
                }
            }
        } else {
            $pageDataArray = array();

            $data = array(
                'pageLoad' => 'login_page',
                'pageData' => $pageDataArray
            );
            $this->load->view('layout/content_layout', $data);
        }
    }

    function pageRedirect($roleId) {
            switch ($roleId) {
                case 1:
                    redirect(base_url().'admin', 'refresh');                              
                    break;
                case 2:
                    redirect(base_url().'home', 'refresh');          
                    break;
                default:
                    redirect(base_url(), 'refresh');          
                    break;
            }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url(), 'location');          
    }
    
    function resetPassword() {

        $pageDataArray = array();

        $data = array(
            'pageLoad' => 'password_reset',
            'pageData' => $pageDataArray
        );
        $this->load->view('layout/content_layout', $data);
    }
        
    function forgotPassword() {
        if($this->session->userdata('role_id')){
            $this->pageRedirect($this->session->userdata('role_id'));
        }
        
        if ($this->input->is_ajax_request()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
             if ($this->form_validation->run() == FALSE) {
                $errorData = validation_errors();
                $errorData = str_replace('<p>','',$errorData);
                $errorData = str_replace('</p>','<br>',$errorData);
                $ret_val = array('status' => 'error',
                                'data' => $errorData);
                echo json_encode($ret_val);
            } else {
                //validation passed.. continue
                $this->load->model('account_manager');
                $resultName = $this->account_manager->checkIfEmailExistsInDatabase($this->input->post('email'));
                if($resultName) {
                    // email exists .... generate the password recovery link
                   $encodedPasswordRecoveryUrl = $this->account_manager->getEncodedPasswordRecoveryUrl($this->input->post('email'));
                   if($encodedPasswordRecoveryUrl) {
                       //gotthe link .. send it via email 
                       
                       $this->load->model('utilities/email');
                       $htmlString = $this->email->getPasswordRecoveryTemplate($encodedPasswordRecoveryUrl);
                   } else {
                       $ret_val = array('status' => 'error',
                                'data' => 'Password Recovery link generation Failed! Please try again');
                        echo json_encode($ret_val);
                   }
                    
                  //  $this->load->model('utilities/email');
                   // $htmlString = $this->email->getPasswordRecoveryTemplate($encodedPasswordRecoveryUrl);
                    
                   // $this->email->sendEmail($htmlString,  $this->input->post('email'));
                    
                } else {
                    //email does not exist in db .. send error message
                    $ret_val = array('status' => 'error',
                                'data' => 'Email not found in records! Please try again');
                echo json_encode($ret_val);
                                        
                }               
                
            }
            
        }
        
    }
    
    function passwordRecovery() {
        
    }

}