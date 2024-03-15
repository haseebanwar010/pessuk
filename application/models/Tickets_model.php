<?php
class Tickets_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }

    
public function get_tickets($data= NULL){

	$locname='';
	$refid='';
	if($data['locname']!=''){
		$locname=$data['locname'];
	}
	if($data['refId']!=''){
		$refid=$data['refId'];
	}
	
	if($locname!='' && $refid!=''){
	$this->db->select('*');	
	$this->db->where('Location',$locname);	
	$this->db->like('UserID',$refid);	
	$query = $this->db->get('tickets');
	return $query->result_array();	
	}
	
	elseif($locname=='' && $refid!=''){
		
	$this->db->select('*');		
	$this->db->like('UserID',$refid);	
	$query = $this->db->get('tickets');
	return $query->result_array();	
	}
		
	elseif($locname!='' && $refid==''){
		
	$this->db->select('*');	
	$this->db->where('Location',$locname);		
	$query = $this->db->get('tickets');
	return $query->result_array();	
	}
	else{
	$query = $this->db->get('tickets');
	return $query->result_array();
	}
	

}
    
public function get_reftickets($refId){
	
	$this->db->select('*');	
	$this->db->like('EasyCollectRef', $refId);
//	$this->db->where('EasyCollectRef',$refId);	
	$query = $this->db->get('tickets');
	return $query->result_array();	

}
	
public function get_locations(){
	$query = $this->db->get('locations');
	return $query->result_array();
}
public function getdesireloc($id){
	$this->db->select('name');
	$this->db->where('id',$id);
	$query = $this->db->get('locations');
	return $query->row_array();
}
	
}
?>