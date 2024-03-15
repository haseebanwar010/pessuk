<?php
class Home_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    
    public function getbanners()
    {
        $query=$this->db->get('banners');
        if($query->result()!=''){
            return $query->result();
        }
        else{
            return false;
        }
        
        
    }
public function gethomedata()
    {
        $this->db->where('id',3);
        $query=$this->db->get('pages');
        if($query->row()!=''){
            return $query->row();
        }
        else{
            return false;
        }
        
        
    }
public function getaboutus()
    {
        $this->db->where('id',4);
        $query=$this->db->get('pages');
        if($query->row()!=''){
            return $query->row();
        }
        else{
            return false;
        }
        
        
    }
public function getfaqs()
    {
        $this->db->where('id',5);
        $query=$this->db->get('pages');
        if($query->row()!=''){
            return $query->row();
        }
        else{
            return false;
        }
        
        
    }
    
public function validateuser(){
      $status=1;
			 $email = $this->input->post('email');
			 $password = $this->security->xss_clean(md5($this->input->post('password')));
			
            
			$this->db->where('email', $email);
			$this->db->where('password', $password);
            $this->db->where('status', $status);
    
    
			$query = $this->db->get('clients');
	if($query->row_array() !=''){
       return $query->row_array();  
    }
    else{
        return false;
    }
			//echo $querytext = "SELECT * FROM users WHERE name = '".$username."' AND pass = '".$password."'";
			//$query = $this->db->query($querytext);
}
    
public function getnews(){
        $this->db->select('title');
        $this->db->where('showon',1);
        $this->db->order_by("id", "DESC");
//        $this->db->limit('10');
        $query=$this->db->get('upcoming_news');
       
        if($query->result_array()!=''){
            return $query->result_array();
        }
        else{
            return false;
        }
}
    
public function gettickets($id){
	
$this->db->select('t.*');
$this->db->from('tickets t');
$this->db->join('locations l', 't.location = l.name ', 'left');
	$this->db->where('l.id',$id);
$query = $this->db->get(); 

       
        if($query->result()!=''){

            return $query->result();
        }
        else{
            return false;
        }
}
public function getlocname($locid){
$this->db->select('*');
$this->db->from('locations');
	$this->db->where('id',$locid);
$query = $this->db->get(); 
	 return $query->row();
}
    
}
?>