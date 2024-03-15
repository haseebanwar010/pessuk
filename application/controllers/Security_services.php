<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_services extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Parkingenforcement_model');
    $this->load->model('Home_model');
}

    public function index(){
        $data['page'] = 'security_services';
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/securityservices',$data);
        $this->load->view('frontend/template/footer',$data);
    }
    public function security($id = NULL){
        $getid=$id;
        
        if($getid==21){
        $data['page'] = 'securityguards';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/securityguards',$data);
        $this->load->view('frontend/template/footer',$data);
        }
        else if($getid==22){
        $data['page'] = 'corporatesecurity';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/corporatesecurity',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==23){
        $data['page'] = 'eventsecurity';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/eventsecurity',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==24){
        $data['page'] = 'retailsecurity';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/retailsecurity',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==25){
        $data['page'] = 'industrialsecurity';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/industrialsecurity',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==26){
        $data['page'] = 'constructionsecurity';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/constructionsecurity',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==27){
        $data['page'] = 'mobilepatrols';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/mobilepatrols',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==28){
        $data['page'] = 'alarmresponse';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/alarmresponse',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==29){
        $data['page'] = 'cctv';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/cctv',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==30){
        $data['page'] = 'keyholding';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/keyholding',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==31){
        $data['page'] = 'secareaswecover';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secareaswecover',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==32){
        $data['page'] = 'secaccrediation';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secaccrediation',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==33){
        $data['page'] = 'secourclient';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secourclient',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==34){
        $data['page'] = 'sectestimonials';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/sectestimonials',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
//        else if($getid==35){
//        $data['page'] = 'secbusinessenquiry';
//        $data['result']=$this->Parkingenforcement_model->getdata($getid);
//        $this->load->view('frontend/template/header',$data);
//        $this->load->view('frontend/secbusinessenquiry',$data);
//        $this->load->view('frontend/template/footer',$data);
//            
//        }
        else if($getid==36){
        $data['page'] = 'secinstantsecurityquote';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secinstantsecurityquote',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==37){
        $data['page'] = 'secaboutus';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secaboutus',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==38){
        $data['page'] = 'secjobvacancy';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secjobvacancy',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==39){
        $data['page'] = 'seccontactus';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/seccontactus',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==40){
        $data['page'] = 'secwhychooseus';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secwhychooseus',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        
        

    }
    
   
public function contact(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'seccontactus';
    $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/seccontactus',$data);
        $this->load->view('frontend/template/footer',$data);  
}
    
public function contactus(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->form_validation->set_rules('uname', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
     
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->email;

        $subject="Contact Us";
        
        if ($this->form_validation->run() === FALSE){
            $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/seccontactus',$data);
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
													<p style='font-family: verdana;'>We have recieved a contact us email from user.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>User detail</h4>
                                    <p style='text-align: left; font-family: verdana;'>Name : ".$this->input->post('name')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Email : ".$this->input->post('email')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Telephone : ".$this->input->post('phone')."</p>
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
            redirect('security_services/contact');
        }


    }

  
public function businessenqiry(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'secbusinessenquiry';
    $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secbusinessenquiry',$data);
        $this->load->view('frontend/template/footer',$data);  
}
    
public function benqiry_contact(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data=array();
        $baseurl = $this->config->item('base_url');
        $this->form_validation->set_rules('uname', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
     
        $sitesettings=getsitedata();     
        $adminemail=$sitesettings->email;

        $subject="Contact Us";
        
        if ($this->form_validation->run() === FALSE){
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/secbusinessenquiry',$data);
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
													<p style='font-family: verdana;'>We have recieved a contact us email from user.</p>
                                                    <h4 style='border-top: 1px solid #eee; font-family: verdana; text-align: left; padding-top: 20px;'>User detail</h4>
                                    <p style='text-align: left; font-family: verdana;'>Name : ".$this->input->post('name')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Email : ".$this->input->post('email')."</p>
                                    <p style='text-align: left; font-family: verdana;'>Telephone : ".$this->input->post('phone')."</p>
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
            redirect('Parking_enforcement/businessenqiry');
        }


    }

  
    
    
}
?>