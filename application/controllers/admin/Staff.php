<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
   
	protected $title = 'Pessuk';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('staff_model');
				
		  }
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'staff';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
		$data['staffs'] = $this->staff_model->get_staffs();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/staff/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    
    public function add($url = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
        $data['page'] = 'addstaff';
        $this->load->helper('form');
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[clients.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/staff/add', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->staff_model->set_staff();
            $this->session->set_flashdata('msg', 'Staff Added Successfully!');
            redirect('admin/staff');
        }
			
    }
    public function edit($id = NULL){
        if(! $this->session->userdata('validated')){
            redirect('auth');
        }
        $data['page'] = 'editstaff';
        $data['staff'] = $this->staff_model->get_staffs($id);
		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[clients.email]');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if($this->input->post('password') && $this->input->post('password')!=''){
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        }
        if ($this->form_validation->run() === FALSE){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/staff/edit', $data);
            $this->load->view('admin/templates/footer');
        }
        else{
            $this->staff_model->update_staff();
            $this->session->set_flashdata('msg', 'Staff Information is updated Successfully!');
            redirect('admin/staff');
        }
    }
    public function delete($id){
        $this->staff_model->deletestaff($id);
        $this->session->set_flashdata('msg', 'Staff Deleted Successfully!');
        redirect('admin/staff');
    }
}
?>