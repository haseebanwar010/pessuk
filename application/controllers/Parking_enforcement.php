<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parking_enforcement extends CI_Controller{

function __construct(){
parent:: __construct();
    $this->load->model('Parkingenforcement_model');
    $this->load->model('Home_model');
     $this->load->helper('captcha');
}

    public function index(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'paking_enforcement';
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/parkingenforcement',$data);
        $this->load->view('frontend/template/footer',$data);
    }
    public function parking($id = NULL){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $getid=$id;
        
        if($getid==1){
        $data['page'] = 'parking_introduction';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/pintroduction',$data);
        $this->load->view('frontend/template/footer',$data);
        }
        else if($getid==2){
        $data['page'] = 'parking_pselfticket';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/pselfticket',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==3){
        $data['page'] = 'parking_warden';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/pwarden',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==4){
        $data['page'] = 'parking_parkingofficer';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/parkingofficer',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==5){
        $data['page'] = 'parking_anprcamers';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/anprcamers',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==6){
        $data['page'] = 'parking_payanddisplay';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/payanddisplay',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==7){
        $data['page'] = 'parking_parkingpermits';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/parkingpermits',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==8){
        $data['page'] = 'parking_linemarkings';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/linemarkings',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==9){
        $data['page'] = 'parking_carparks';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/carparks',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==10){
        $data['page'] = 'parking_ourclients';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/ourclients',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==11){
        $data['page'] = 'parking_testimonials';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/testimonials',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==12){
        $data['page'] = 'parking_accrediation';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/accrediation',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==13){
        $data['page'] = 'parking_jobvacancy';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/jobvacancy',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==14){
        $data['page'] = 'parking_areaswecover';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/areaswecover',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==15){
        $data['page'] = 'parking_whychooseus';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/whychooseus',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
        else if($getid==16){

            
        }
//        else if($getid==17){
//        $data['page'] = 'parking_businessenquiry';
//        $data['result']=$this->Parkingenforcement_model->getdata($getid);
//        $this->load->view('frontend/template/header',$data);
//        $this->load->view('frontend/businessenquiry',$data);
//        $this->load->view('frontend/template/footer',$data);
//            
//        }
        else if($getid==18){
        $data['page'] = 'parking_payacharge';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/payacharge',$data);
        $this->load->view('frontend/template/footer',$data);
        }
        else if($getid==19){
        $data['page'] = 'parking_appealsprocedure';
            $data['latestnews']=$this->Home_model->getnews();
        $data['result']=$this->Parkingenforcement_model->getdata($getid);
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/appealsprocedure',$data);
        $this->load->view('frontend/template/footer',$data);
            
        }
//        else if($getid==20){
//        $data['page'] = 'parking_contactus';
//        $data['result']=$this->Parkingenforcement_model->getdata($getid);
//        $this->load->view('frontend/template/header',$data);
//        $this->load->view('frontend/contactus',$data);
//        $this->load->view('frontend/template/footer',$data);
//
//        }

        

    }
    

public function contact(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'paking_enforcement';
    $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/contactus',$data);
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
            redirect('Parking_enforcement/contact');
        }


    }

  
public function businessenqiry(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'paking_enforcement';
    $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/businessenquiry',$data);
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
        $this->load->view('frontend/businessenquiry',$data);
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

   
public function slogin(){
        $data['page'] = 'parking_stafflogin';
            $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/stafflogin',$data);
        $this->load->view('frontend/template/footer',$data);
}
    
public function login(){
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
    
        if($this->form_validation->run()==TRUE)
        {
        $result=$this->Parkingenforcement_model->validateuser();

            
            if(!empty($result)){

                $session_data=array(
                'id'=>$result['id'],
                'name'=>$result['name'],
                'email'=>$result['email'],
                'phone'=>$result['phone'],
                'status'=>$result['status'],
                'validated' => true
                );
                
                $_SESSION['frontend_staff']=$session_data;
                redirect('parking_enforcement');
            }
            else{
//                $data['msg'] = 'Invalid username and/or password.';
                $this->session->set_flashdata('error_msg','Invalid Email and/or Password!');
                $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/stafflogin',$data);
        $this->load->view('frontend/template/footer',$data);
            }
            
        }
        else{
            $data['latestnews']=$this->Home_model->getnews();
             $this->load->view('frontend/template/header',$data);
            $this->load->view('frontend/stafflogin');
            $this->load->view('frontend/template/footer',$data);
        }

    }
    
    
public function assign_tickets(){
    
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'paking_enforcement';
    $data['latestnews']=$this->Home_model->getnews();
        $this->form_validation->set_rules('pcn_no','PCN NO','required');
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('time','Time','required');
        $this->form_validation->set_rules('vihicle_type','Vihicle Type','required');
        $this->form_validation->set_rules('registration','Registration','required');
        $this->form_validation->set_rules('color','Color','required');
        $this->form_validation->set_rules('location','Location/Site','required');
        $this->form_validation->set_rules('charge_nationality','Charge as','required');
        $this->form_validation->set_rules('charge_disability','Charge','required');
    
    
    if($this->form_validation->run()==TRUE){
        $result=$this->Parkingenforcement_model->assigntickets();
        $data['assigntickets']=$result;
         $this->session->set_flashdata('msg','Ticket assign successfully');
        $data['latestnews']=$this->Home_model->getnews();
        redirect('parking_enforcement/apply', $data);
//        $this->load->view('frontend/template/header',$data);
//        $this->load->view('frontend/apply',$data);
//        $this->load->view('frontend/template/footer',$data);
                
    }
    else{
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/assigntickets',$data);
        $this->load->view('frontend/template/footer',$data);
    }

}
    
    
public function apply(){
    
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['page'] = 'apply';
        $this->form_validation->set_rules('course_name','Course Name','required');
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('forename','forename','required');
        $this->form_validation->set_rules('surname','surname','required');
        $this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('dob','dob','required');
        $this->form_validation->set_rules('age','age','required');
        $this->form_validation->set_rules('nationality','nationality','required');
        $this->form_validation->set_rules('disability','disability','required');
        $this->form_validation->set_rules('house_det','house_det','required');
        $this->form_validation->set_rules('street','street','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('country','country','required');
        $this->form_validation->set_rules('post_code','post_code','required');
        $this->form_validation->set_rules('telephone_no','telephone_no','required');
        $this->form_validation->set_rules('mobile_no','mobile_no','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('sec_email','sec_email','required|valid_email');
        $this->form_validation->set_rules('relationship','relationship','required');
        $this->form_validation->set_rules('telephone','telephone','required');
//        $this->form_validation->set_rules('captcha','captcha','required');
    
    if($this->form_validation->run()=== FALSE ){
            $characters = 'QAZWSXEDCRFVTGBYHNUJMIKOLP?!@#$%*123456789';
			$random_number = "";
            $max = strlen($characters) - 1;

            for ($i = 0; $i < 7; $i++) {
                $random_number .= $characters[mt_rand(0, $max)];
            }
				$vals = array(
                    'word_length'   => 4,
                    'font_size'     => 26,
                'word' => $random_number,
                'img_path' => './assets/frontend/captcha/',
                'img_url' => base_url() . 'assets/frontend/captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200,    
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(243, 243, 249)
        )
            );
            $data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
        
        
        
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/apply',$data);
        $this->load->view('frontend/template/footer',$data);             
    }
    else if($_SESSION['captchaWord']!=$this->input->post('userCaptcha')){
             $characters = 'QAZWSXEDCRFVTGBYHNUJMIKOLP?!@#$%*123456789';
			$random_number = "";
            $max = strlen($characters) - 1;

            for ($i = 0; $i < 7; $i++) {
                $random_number .= $characters[mt_rand(0, $max)];
            }
				$vals = array(
                    'word_length'   => 4,
                    'font_size'     => 26,
                'word' => $random_number,
                'img_path' => './assets/frontend/captcha/',
                'img_url' => base_url() . 'assets/frontend/captcha/',
                'img_width' => 140,
                'img_height' => 32,
                'expiration' => 7200,    
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(243, 243, 249)
        )
            );
            $data['captcha'] = create_captcha($vals);
			$this->session->set_userdata('captchaWord', $data['captcha']['word']);
            $this->session->set_flashdata('validation_errors_captcha', 'Invalid Captcha');
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/apply',$data);
        $this->load->view('frontend/template/footer',$data);
        }
    
    else{
        $result=$this->Parkingenforcement_model->coursedata();
        $data['coursedata']=$result;
        
        if($data['coursedata']==true){
        
        $this->session->set_flashdata('msg','Course Assign Successfully!');
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/apply',$data);
        $this->load->view('frontend/template/footer',$data);
        }
        else{
            
        }
        $this->session->set_flashdata('error','Failed to assign Course!');
        $data['latestnews']=$this->Home_model->getnews();
        $this->load->view('frontend/template/header',$data);
        $this->load->view('frontend/apply',$data);
        $this->load->view('frontend/template/footer',$data);
    }

}
 
 
    
    
public function logout(){
$_SESSION['frontend_staff']=array();
   redirect('parking_enforcement','refresh');
		}
    
}
?>