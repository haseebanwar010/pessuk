<?php
class Parkingenforcement_model extends CI_Model {
     public function __construct()
    {
        $this->load->database();
    }
    

public function getdata($id){
        $this->db->where('id',$id);
        $query=$this->db->get('pages');
//    var_dump($query->row_array());
//    exit;
        return $query->row_array();
}
    
public function validateuser(){
    $status=1;
			 $email = $this->security->xss_clean($this->input->post('email'));
			 $password = $this->security->xss_clean(md5($this->input->post('password')));

            
            $this->db->where('status', $status);
            $this->db->where('email', $email);
			$this->db->where('password', $password);
            
    $query = $this->db->get('staff');
	if($query->row_array() !=''){
       return $query->row_array();  
    }
    else{
        return false;
    }
      
}
    
public function assigntickets(){
        $data = array();
       if($this->input->post('pcn_no')){
           $data['pcn_no'] = $this->input->post('pcn_no');
       }
           if($this->input->post('date')){
           $data['date'] = $this->input->post('date');
       }
           if($this->input->post('time')){
           $data['time'] = $this->input->post('time');
       }
           if($this->input->post('vihicle_type')){
           $data['vihicle_type'] = $this->input->post('vihicle_type');
       }
           if($this->input->post('registration')){
           $data['registration'] = $this->input->post('registration');
       }
           if($this->input->post('color')){
           $data['color'] = $this->input->post('color');
       }
           if($this->input->post('location')){
           $data['location'] = $this->input->post('location');
       }
           if($this->input->post('charge_nationality')){
           $data['charge_nationality'] = $this->input->post('charge_nationality');
       }
           if($this->input->post('charge_disability')){
           $data['charge_disability'] = $this->input->post('charge_disability');
       }
           if($this->input->post('fdetails')){
           $data['fdetails'] = $this->input->post('fdetails');
       }
    
return $this->db->insert('tickets_assign', $data);
}
    
public function coursedata(){
       $data = array();
    
       if($this->input->post('course_name')){
           $data['course_name'] = $this->input->post('course_name');
       }
           if($this->input->post('title')){
           $data['title'] = $this->input->post('title');
       }
    
               if($this->input->post('forename')){
           $data['forename'] = $this->input->post('forename');
       }
    
        if($this->input->post('surname')){
        $data['surname'] = $this->input->post('surname');
        }
        
        if($this->input->post('surname')){
        $data['surname'] = $this->input->post('surname');
        }
        
        if($this->input->post('gender')){
        $data['gender'] = $this->input->post('gender');
        }
        
        if($this->input->post('dob')){
        $data['dob'] = $this->input->post('dob');
        }
        
        if($this->input->post('age')){
        $data['age'] = $this->input->post('age');
        }
            
        if($this->input->post('nationality')){
        $data['nationality'] = $this->input->post('nationality');
        }
                
        if($this->input->post('disability')){
        $data['disability'] = $this->input->post('disability');
        }
                    
        if($this->input->post('house_det')){
        $data['house_det'] = $this->input->post('house_det');
        }
                        
        if($this->input->post('street')){
        $data['street'] = $this->input->post('street');
        }
    
        if($this->input->post('city')){
        $data['city'] = $this->input->post('city');
        }
        
        if($this->input->post('country')){
        $data['country'] = $this->input->post('country');
        }
            
        if($this->input->post('post_code')){
        $data['post_code'] = $this->input->post('post_code');
        }
                
        if($this->input->post('telephone_no')){
        $data['telephone_no'] = $this->input->post('telephone_no');
        }
                    
        if($this->input->post('mobile_no')){
        $data['mobile_no'] = $this->input->post('mobile_no');
        }
                        
        if($this->input->post('email')){
        $data['email'] = $this->input->post('email');
        }
                            
        if($this->input->post('sec_email')){
        $data['sec_email'] = $this->input->post('sec_email');
        }
                                
        if($this->input->post('relationship')){
        $data['relationship'] = $this->input->post('relationship');
        }
                                    
        if($this->input->post('telephone')){
        $data['telephone'] = $this->input->post('telephone');
        }
                                        
        if($this->input->post('telephone')){
        $data['telephone'] = $this->input->post('telephone');
        }
                                            
        if($this->input->post('userCaptcha')){
        $data['userCaptcha'] = $this->input->post('userCaptcha');
        }
//    echo '<pre>';
//    var_dump($data);
//    exit;
    
return $this->db->insert('course_data', $data);

}

    
}
?>