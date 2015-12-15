<?php

class Login_model extends CI_Model{
    
    public function match_login(){
        
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $q = $this->db->get('user');
        
        if($q->num_rows()== 1){
            
            $uid = $q->result_array();
			$result = array_shift($uid);
			$result['valid'] = true;
			return $result;
            
        }else{
        
        return false;
        }
    }
    
    public function newprofile()
	{
		$newpro = array(

			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),			
			'password' => md5($this->input->post('password'))						
			);

		$new = $this->db->insert('user', $newpro);
		return $new;

		
	}
    
   
    
   
    
   
}