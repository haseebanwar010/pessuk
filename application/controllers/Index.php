<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Home_model');
}

    public function index(){
		$this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'index';

        $data['latestnews']=$this->Home_model->getnews();
//        $data['homedata']=$this->Home_model->gethomedata();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/template/footer',$data);
    }
    
    public function login(){
        if(isset($_POST['login'])){
        $result=$this->Home_model->validateuser();
            
            if(!empty($result)){
                $session_data=array(
                'id'=>$result['id'],
                'name'=>$result['name'],
                'email'=>$result['email'],
                'phone'=>$result['phone'],
				'location'=>$result['location'],
                'status'=>$result['status'],
                'validated' => true
                );
                $_SESSION['frontend_client']=$session_data;
//                $this->session->set_userdata($_SESSION['frontend_client']);

                redirect('index/tickets');
            }
            else{
                $this->session->set_flashdata('error_msg','Invalid Email and/or Password!');
                redirect('index');
            }
            
            
        }

    }
    
public function tickets(){
	
	$this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'tickets';
    $locid='';
    $clientname='';
    if(isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])){
        $data=$_SESSION['frontend_client'];
        $locid=$data['location'];
        $clientname=$data['name'];
    }
    
		$data['client_name']=$clientname;
        $data['loc_name']=$this->Home_model->getlocname($locid);
        $data['tickets']=$this->Home_model->gettickets($locid);
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/tickets',$data);
        $this->load->view('frontend/template/footer',$data);
}
	
	
    
public function contactus(){

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->form_validation->set_rules('uname', 'Name', 'required|min_length[3]');
     
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->email;

        $subject="Contact Us";
        
        if ($this->form_validation->run() === FALSE){
			redirect('index/tickets');
        }
        else{
			
    $clientname='';
    if(isset($_SESSION['frontend_client']) && !empty($_SESSION['frontend_client'])){
		$data=$_SESSION['frontend_client'];
        $clientname=$data['name'];
    }

          

                $message="<table cellpadding='0' width='100%' cellspacing='0' border='0' id='backgroundTable' class='bgBody'>
		<tr>
			<td>
				<table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
					<tr>
						<td class='movableContentContainer'>
							
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr height='40'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
									<tr>
										<td width='200' valign='top'>&nbsp;</td>
										<td width='200' valign='top' align='center'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >";
													$message.="<img src='";
                                                        $message.=$baseurl."assets/frontend/images/logo1.png";
                                                        $message.="' width='250' alt='Logo'  data-default='placeholder' />";
       
												$message.="</div>
											</div>
										</td>
										<td width='200' valign='top'>&nbsp;</td>
									</tr>
									<tr height='25'>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
										<td width='200'>&nbsp;</td>
									</tr>
								</table>
							</div>

							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='3' align='center' style='padding-bottom:10px;padding-top:25px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
													<h2 style='font-family: verdana;'>Contact us</h2>
												</div>
											</div>
										</td>
									</tr>
                                    <tr>
										<td width='100'>&nbsp;</td>
										<td width='400' align='center' style='padding-bottom:5px;'>
											<div class='contentEditableContainer contentTextEditable'>
												<div class='contentEditable' >
                                                <span style='font-family: verdana;'>Dear, Admin</span>
													<p style='font-family: verdana;'>We have recieved a contact us email from <b>".$clientname."</b>.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>User detail</h4>
                                    <p style='text-align: left; font-family: verdana;'>Name : ".$this->input->post('uname')."</p>
                            <p style='text-align: left; font-family: verdana;'>Comment : ".$this->input->post('description')."</p>
                                                    
												</div>
											</div>
										</td>
										<td width='100'>&nbsp;</td>
									</tr>
								</table>
							</div>
							<div class='movableContent'>
								<table cellpadding='0' cellspacing='0' border='0' align='center' width='600'>
									<tr>
										<td width='100%' colspan='2' style='padding-top:65px;'>
											<hr style='height:1px;border:none;color:#333;background-color:#ddd;' />
										</td>
									</tr>
									</table></div></td></tr></table></td></tr></table>";

            send_email_custom($adminemail, $this->input->post('email'), $subject, $message);
            $this->session->set_flashdata('msg', 'Your email has been sent to the admin successfully!');
            redirect('Index/tickets');
        }


    }


    
public function logout(){
$_SESSION['frontend_client']=array();
   redirect('index','refresh');
		}
    
}
?>
    
    