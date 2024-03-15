<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller {
   
	protected $title = 'Pessuk';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('locations_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'locations';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
		$data['locations'] = $this->locations_model->get_locations();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/locations/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
        $data['page'] = 'addlocation';
        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/locations/add', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->locations_model->set_location();
            $this->session->set_flashdata('msg', 'Location Added Successfully!');
            redirect('admin/locations');
        }
			
    }
    public function edit($id = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
        $data['page'] = 'editlocation';
        $data['location'] = $this->locations_model->get_locations($id);
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/locations/edit', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->locations_model->update_location();
            $this->session->set_flashdata('msg', 'Location Information is updated Successfully!');
            redirect('admin/locations');
        }
    }
    public function delete($id){
        $this->locations_model->deletelocation($id);
        $this->session->set_flashdata('msg', 'Location Deleted Successfully!');
        redirect('admin/locations');
    }
}
?>