<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
   
	protected $title = 'Pessuk';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('clients_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'clients';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
        $data['locations']=$this->clients_model->get_location();
		$data['clients'] = $this->clients_model->get_clients();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/clients/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
		$locid=array();
        $loc=$this->clients_model->get_location();
		foreach($loc as $loca){
			$locid[]=$loca['location'];
		}
        $data['locations']=$this->clients_model->get_difflocation($locid);
		
		
        $data['page'] = 'addclient';
        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[clients.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/clients/add', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->clients_model->set_client();
            $this->session->set_flashdata('msg', 'Client Added Successfully!');
            redirect('admin/clients');
        }
			
    }
    public function edit($id = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
        $data['page'] = 'editclient';
		
		$data['client'] = $this->clients_model->get_clients($id);
		$clientlocid=$data['client']['location'];
		
		$locid=array();
        $loc=$this->clients_model->get_location();
		foreach($loc as $loca){
			if($clientlocid != $loca['location']){
			$locid[]=$loca['location'];
				}
		}
		
	    $data['locations']=$this->clients_model->get_editlocations($locid);
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[clients.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('location', 'Location', 'required');
        if($this->input->post('password') && $this->input->post('password')!=''){
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        }
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/clients/edit', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->clients_model->update_client();
            $this->session->set_flashdata('msg', 'Client Information is updated Successfully!');
            redirect('admin/clients');
        }
    }
    public function delete($id){
        $this->clients_model->deleteclient($id);
        $this->session->set_flashdata('msg', 'Client Deleted Successfully!');
        redirect('admin/clients');
    }
}
?>