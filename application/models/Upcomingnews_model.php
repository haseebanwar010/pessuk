<?php
class Upcomingnews_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    public function set_upcomingnews(){
        $this->load->helper('url');
        $data = array();

//        if($image == false){
//        }
//        else{
//            $data['image']=$image;
//        }
        if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('sort_order')){
            $data['sort_order'] = $this->input->post('sort_order');
        }
        if($this->input->post('showon')){
            $data['showon'] = $this->input->post('showon');
        }
        /*if($this->input->post('video')){
            $data['video'] = $this->input->post('video');
        }*/
//        if($this->input->post('description')){
//            $data['description'] = $this->input->post('description');
//        }
       
		
		return $this->db->insert('upcoming_news', $data);
    }
    public function get_upcomingnews( $id = FALSE){
       
        if($id === FALSE){  
            $query = $this->db->get('upcoming_news');
        return $query->result_array();
            
		  }
        else{
        $query = $this->db->where('id', $id)->get('upcoming_news');
            return $query->result_array();
    }
        }
    
    public function update_news($image = false){
          $this->load->helper('url');
        $data = array();
   
      

		if($this->input->post('title')){
            $data['title'] = $this->input->post('title');
        }
        if($this->input->post('sort_order')){
            $data['sort_order'] = $this->input->post('sort_order');
        }
        if($this->input->post('showon')){
            
            $data['showon'] = $this->input->post('showon');
        }else{
            $data['showon'] = 0;
        }


	
		
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('upcoming_news', $data); 
    }

   
public function deletenews($id){
        $this->load->helper('url');
		$this->db->where('id', $id);
		return $this->db->delete('upcoming_news'); 
    
}
    
    
    
}
?>