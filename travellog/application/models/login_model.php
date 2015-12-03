<?php

class Login_model extends CI_Model{
    
    public function match_login(){
        
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $q = $this->db->get('user');
        
        if($q->num_rows() == 1{
            return true;
            
        }else{
        
        return false;
        }
    }

}