<?php
class Clients_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_client(){
        $data = array();
        if($this->input->post('name')){
            $data['name'] = $this->input->post('name');
        }
        if($this->input->post('email')){
            $data['email'] = $this->input->post('email');
        }
        if($this->input->post('phone')){
            $data['phone'] = $this->input->post('phone');
        }
		if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('status')){
            $data['status'] = $this->input->post('status');
        }
		return $this->db->insert('clients', $data);
    }
    public function get_clients( $id = FALSE){
        if($id === FALSE){  
            $query = $this->db->get('clients');
            return $query->result_array();
        }
        else{
            $query = $this->db->where('id', $id)->get('clients');
            return $query->row_array();
        }
    }
	
//public function get_location(){
//$this->db->select('l.*');
//$this->db->from('locations l');
//$this->db->join('clients c', 'l.id != c.location', 'left');
//$query = $this->db->get(); 
//
//	
////		    $query = $this->db->get('locations');
//            return $query->result_array();
//}
    
public function get_editlocations($locs_id){

	$this->db->where_not_in('id', $locs_id);
	$query = $this->db->get('locations');
	return $query->result_array();
}
    
public function get_locations(){
	
	$this->db->where_not_in('id', $locid);
	$query = $this->db->get('locations');

	return $query->result_array();
	
}
	
public function get_location(){
	
	$this->db->select('location');
	$query = $this->db->get('clients');

	return $query->result_array();
	
}
public function get_difflocation($locid){
	$this->db->where_not_in('id', $locid);
	$query = $this->db->get('locations');
	return $query->result_array();
	
}
    public function update_client(){
        $data = array();
		if($this->input->post('name')){
            $data['name'] = $this->input->post('name');
        }
        if($this->input->post('email')){
            $data['email'] = $this->security->xss_clean($this->input->post('email'));
        }
        if($this->input->post('phone')){
            $data['phone'] = $this->input->post('phone');
        }
		if($this->input->post('location')){
            $data['location'] = $this->input->post('location');
        }
        if($this->input->post('status')){
            $data['status'] = $this->input->post('status');
        }
        else{
            $data['status'] = 0;
        }
        if($this->input->post('password') && $this->input->post('password')!=''){
            $data['password'] = $this->security->xss_clean(md5($this->input->post('password')));
        }
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('clients', $data); 
    }
    public function deleteclient($id){
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('clients'); 
    }
}
?>