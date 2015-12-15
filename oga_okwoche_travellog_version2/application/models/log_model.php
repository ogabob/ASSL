<?php

class Log_model extends CI_Model{
    
   
	function get_log($uid,$id = 0)
	{
		if($id == 0){
            $query = $this->db->get_where('log',array ('id='=>$uid));
            return $query->result_array();
        }
        $query = $this->db->get_where('log', array('logid ='=>$id));
        return $query->row_array();
    }
    
    function new_log()
    {
        $info = array(
            'id'=>$this->input->post('uid'),
            'where'=>$this->input->post('where'),
            'when'=> $this->input->post('when'),
            'cost'=> $this->input->post('cost'),
            'rating'=> $this->input->post('rating'),
            'experience'=> $this->input->post('experience'),
            'recommendations'=> $this->input->post('recommendations'),
        );
        
        $cond ="";
        $newlog=$this->db->insert('log',$info);
        return $newlog;    
    }
    
     function update_log()
    {
        $info = array(
            'id'=>$this->input->post('uid'),
            'where'=>$this->input->post('where'),
            'when'=> $this->input->post('when'),
            'cost'=> $this->input->post('cost'),
            'rating'=> $this->input->post('rating'),
            'experience'=> $this->input->post('experience'),
            'recommendations'=> $this->input->post('recommendations'),
        );
        
        $this->db->where('logid',$this->input->post('logid'));
        $this->db->update('log', $data); 
   }
     function delete_log()
  {

    $id = $this->input->post('tripid');
    $this->db->where('id', $id);
    $this->db->delete('log');
  }
}