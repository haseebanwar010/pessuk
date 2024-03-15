<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Upload_model');
}

    public function index(){
        $data['page'] = 'upload';

        $this->load->view('frontend/upload',$data);
    }

		
	public function importfile(){
		   $data['page'] = 'upload';
		if(isset($_POST['importSubmit'])){

		  $result=$this->Upload_model->importcsvtickets();
			if($result==1){
				
				$this->session->set_flashdata('msgdanger', 'File Type Should Be A CSV Type!');
				redirect('upload');
			}
			else if($result==2){
				
				$this->session->set_flashdata('msgdanger', 'Failed TO Uploading File!');
				redirect('upload');
			}
			else if($result==3){
				
				$this->session->set_flashdata('msg', 'CSV File Uploaded Successfully!');
				redirect('upload');
			}
		  $data['tickets']=$result;
		}
		else{
			redirect('upload');
		}

  


	
	}

    
}
?>
    
    