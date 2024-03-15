<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upcoming_news extends CI_Controller {
   
	protected $title = '';

	public function __construct()
        {
                parent::__construct();
                
				$this->load->library('session');
				$this->load->model('Upcomingnews_model');
				
		}
	
	public function index( $msg = NULL)
	{
        $data=array();
        $data['page'] = 'upcoming_news';
        if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
		$data['upcomingnews'] = $this->Upcomingnews_model->get_upcomingnews();
		if(! $this->session->userdata('validated')){
			redirect('auth');
		}
        else{
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/Upcoming_news/index', $data);
            $this->load->view('admin/templates/footer', $data);
        }
				
		}
    }
    
    public function add($url = NULL){
			if(! $this->session->userdata('validated')){
			 redirect('auth');
		    }
        $image="";
			$data['page'] = 'add_upcoming_news';
			$this->load->helper('form');
			$this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
			
			if ($this->form_validation->run() === FALSE)
			{
				if($url == NULL){
				    $this->load->view('admin/templates/header');
				    $this->load->view('admin/templates/sidebar', $data);
				    $this->load->view('admin/upcoming_news/add', $data);
				    $this->load->view('admin/templates/footer');
				}else{
				    echo validation_errors();
				}
			}
			else
			{
                $this->Upcomingnews_model->set_upcomingnews();
				$this->session->set_flashdata('msg', 'News Added Successfully!');
				redirect('admin/upcoming_news');	
			}
			
		}

    public function edit($id = NULL){
			$user = $this->session->get_userdata();
			$data['page'] = 'edit_upcoming_news';
            
            $data['upcoming_news'] = $this->Upcomingnews_model->get_upcomingnews($id);
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/templates/sidebar', $data);
				$this->load->view('admin/Upcoming_news/edit', $data);
				$this->load->view('admin/templates/footer');
			}
			else
			{
                
                $this->Upcomingnews_model->update_news();
				$this->session->set_flashdata('msg', 'News Information is updated Successfully!');
				redirect('admin/upcoming_news');
                
				
			}
			
			
			
			
		}
    
public function delete($id = NULL){
			$user = $this->session->get_userdata();
			$data['page'] = 'delete_upcoming_news';
            $this->Upcomingnews_model->deletenews($id);
				$this->session->set_flashdata('msg', 'News Deleted Successfully!');
				redirect('admin/upcoming_news');
        
    }  
    
    
    

}
?>