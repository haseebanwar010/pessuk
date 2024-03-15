<?php
class Locations_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_location(){
        $data = array();
        if($this->input->post('name')){
            $data['name'] = $this->input->post('name');
        }
		return $this->db->insert('locations', $data);
    }
    public function get_locations( $id = FALSE){
        if($id === FALSE){  
            $query = $this->db->get('locations');
            return $query->result_array();
        }
        else{
            $query = $this->db->where('id', $id)->get('locations');
            return $query->row_array();
        }
    }
    
    public function update_location(){
        $data = array();
		if($this->input->post('name')){
            $data['name'] = $this->input->post('name');
        }
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('locations', $data); 
    }
    public function deletelocation($id){
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('locations'); 
    }
}
?>