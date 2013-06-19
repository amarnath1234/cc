<?php

class Account_manager extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function loginValidate() {

        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', $this->input->post('password'));
        $this->db->where('delete_flag != ', 1);
        $query = $this->db->get('login');

        if ($query->num_rows == 1) {
            /*
             * Assign relavent data into the session... those are as follows
             * 0. Id -
             * 1. Email - 
             * 2. Name - 
             * 3. role_id -
             */
            $this->db->select('id, name, role_id');
            $this->db->where('email', $this->input->post('email'));
            $this->db->where('delete_flag != ', 1);
            $query = $this->db->get('login');

            foreach ($query->result() as $row) {
                $id = $row->id;
                $name = $row->name;
                $role_id = $row->role_id;
            }
            
            $sessionData = array(
                            'id' => $id,
                            'name' => $name,
                            'role_id' => $role_id,
                            'email' => $this->input->post('email')
                           );

            $this->session->set_userdata($sessionData);
            return true;
        } 
        $this->session->sess_destroy();
        return false;
    }
}