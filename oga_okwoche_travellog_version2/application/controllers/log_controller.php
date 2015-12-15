<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_controller extends CI_Controller 
{
   
    function log_list(){
    $uid = $_SESSION['id'];
    $this->load->model('log_model');
    $data['logs'] = $this->log_model->get_log($uid);
    $this->load->view('log_view',$data);
    }
    
    function add_log(){
        
        $this->load->model('log_model');
        $q =$this->log_model->new_log();
        $this->load->view('log_view');
    }
    
    function edit_log()
    {

    	$this->load->model('log_model');
    	$q= $this->trip_model->update_log();
    	redirect('log_controller/log_list', 'refresh');
    }
    
    function requested_log()
	{
		$uid = $_SESSION['id'];
		$trip = $this->input->post('log');
		$this->load->model('log_model');
		$data['logs'] = $this->log_model->get_log($uid,$logs);
		if ($uid == $data['trip']['id']){
			$this->load->view('requested_log_view', $data);
			
		}else{
			redirect('log_controller/log_list');
		}
	}
    
    function deletetrip()
    {

    	$this->load->model('log_model');
    	$q= $this->trip_model->delete_log();
    	redirect('log_controller/log_list');
    }	
    

}