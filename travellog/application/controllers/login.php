<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
    
	public function log_view()
	{
		$this->load->view('login_form');
	}
    
    public function dash_view()
	{
		$this->load->view('dashboard_view');
	}
    
    public function validation(){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_valid_credentials');
         $this->form_validation->set_rules('password', 'Password', 'required|md5');
        
        
        if ($this->form_validation->run()){
            
            redirect ('login/dash_view');
       
        }else{
        
          $this->load->view('login_form');
        }
    
    }
    
    public function valid_credentials(){
        
        $this->load->model('login_model');
        
        if ($this->login_model->match_login()){
            return true;
        
        }else{
            $this->load->view('login_form');
            return false;
        
        }
    
    }
            
            
            
            
}
