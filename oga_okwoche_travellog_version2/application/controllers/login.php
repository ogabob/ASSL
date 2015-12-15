<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
 //method to show login view
    
	public function log_view()
	{
		$this->load->view('login_form');
	}
    
 //method to make sure login credentials are correct
    
    public function validation(){
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|callback_valid_credentials');
         $this->form_validation->set_rules('password', 'Password', 'required|md5');
        
        
        
        
        if ($this->form_validation->run()){
             
            return true;
            //$this->load->view('dashboard_view');
       
        }else{
        
          //$this->load->view('login_form');
          return false;    
        }
    
    }
    
   
    
   //method to match login credentials with the database and call the model method for matching the credentials 
    public function valid_credentials(){
        
        $this->load->model('login_model');
        $q = $this->login_model->match_login();
        
        if ($q['valid']){
            //return true;
             $data = array(
                'id'=>$q['id'],
                'email'=>$this->input->post('email'),
                'is_logged_in'=> 1);
            $this->session->set_userdata($data);
            $this->load->view('log_view');
        
        }else{
             $this->load->view('login_form');
            //return false;
        
        }
         
    }
    
    
    
    
    //method to load the logout view. this is temporary in the time being
    
    public function logout(){
        $this->load->view('login_form');
       
          
    }
    
    //method to load the sign up view
    public function signup(){
        $this->load->view('signup_view');
    
    
    }
    
    //method to validate the credentials in the sign up form
    
    public function signup_validation(){
        
        $this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('firstname', ' First Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email',   'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('cpassword', 'Please enter matching Password', 'trim|required|matches[password]');
		
        $this->form_validation->set_message('is_unique',"This email already exists."); //if email already exist,this a message that shows up.
        
        
        if($this->form_validation->run() == FALSE)
		{
			$this->load->view('signup_view');
		}
		
		else
		{			
			$this->load->model('login_model');
            
            
			if($q = $this->login_model->newprofile())
			{
				
				$this->load->view('profile_view');

			}
			else
			{
				$this->load->view('signup_view');			
			}
    
    }
            
            
                       
    }
    
     public function log(){
        $this->load->view('create_log_view');
    }
   
}