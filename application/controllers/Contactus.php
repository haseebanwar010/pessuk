<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller{

function __construct(){
parent:: __construct();
//    $this->load->model('Event_model');
}

    public function index(){
                $this->load->helper('form');
        $this->load->library('form_validation');
//        $data['page'] = 'contactus';
//        $this->load->view('frontend/template/header',$data);
//        $this->load->view('frontend/contactus',$data);
//        $this->load->view('frontend/template/footer',$data);
    }
    
 public function contact_us(){
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('description', 'Description', 'required');
     
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->email;

        $subject="Contact Us";
        
        if ($this->form_validation->run() === FALSE){

        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/contactus',$data);
        $this->load->view('frontend/template/footer',$data);
        }
        else{
    

          

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
                                                        $message.=$baseurl."assets/frontend/images/logo.png";
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
													<p style='font-family: verdana;'>We have recieved a contact us email from user.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>User detail</h4>
                                    <p style='text-align: left; font-family: verdana;'>Name : ".$this->input->post('name')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Email : ".$this->input->post('email')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Telephone : ".$this->input->post('telephone')."</p>
                            <p style='text-align: left; font-family: verdana;'>Description : ".$this->input->post('description')."</p>
                                                    
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
            redirect('contactus');
        }
        
    }
 
    
}
?>
    
    