<?php
class Staff_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_staff(){
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
        if($this->input->post('status')){
            $data['status'] = $this->input->post('status');
        }
		return $this->db->insert('staff', $data);
    }
    public function get_staffs( $id = FALSE){
        if($id === FALSE){  
            $query = $this->db->get('staff');
            return $query->result_array();
        }
        else{
            $query = $this->db->where('id', $id)->get('staff');
            return $query->row_array();
        }
    }
    
    public function update_staff(){
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
        return $this->db->update('staff', $data); 
        
        
    }
    public function deletestaff($id){
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('staff'); 
    }
}
?>