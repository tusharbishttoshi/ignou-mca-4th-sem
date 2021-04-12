<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$this->load->view('main/contact');
	}
    
    
    public function enquiry(){
        $error = array('success'=>false, 'message'=>array());
		$form_data = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error-frm">','</span>');
		$this->form_validation->set_rules('form_name', 'name', 'required');
		$this->form_validation->set_rules('form_phone', 'mobile', 'required|is_natural|min_length[7]');
        
		if($this->form_validation->run()){
            $data = array(
                'inquiry_date' => date('Y-m-d H:i'),
                'name' => $form_data['form_name'],
                'email' => $form_data['form_email'],
                'mobile' => $form_data['form_phone'],
                'inquiry_subject' => $form_data['enq_type'],
                'inquiry_message' => $form_data['form_message'].' Address: '.$form_data['form_address'],
                'status' => 'UNREAD',
            );
            
			if($this->mymodel->insert_data('inquiry', $data))	{
                $this->send_mail($this->email_temp($form_data['form_name'], $form_data['form_phone'], $form_data['form_email'], $form_data['form_address'], $form_data['form_message']), 'Enquiry form website');
				$error['alert'] = '<div class="alert alert-success text-center p-5">
                    <h1 class="m-b-3"><i class="fa fa-check"></i></h1><br><br><br>
                    <p>We have recieved your details. we will contact you soon.Thankyou!</p><br><br><br>
                </div>';
				$error['success'] = true;
			}
			else{
				$error['message']['name'] = '<p>Error in submiting data</p>';
			}
		}
		else{
            foreach($_POST as $key => $value){
			     $error['message'][$key] = form_error($key);
            }
		}
		echo json_encode($error);
    }
    
    private function send_mail($msg, $subject){
        $config = Array(
            'protocol'  => 'sendmail',
            'smtp_crypto'  => 'tsl',
            'mailtype'  => 'html',
            'wordwrap' => TRUE,
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->from('website@didafoundationinternational.com', 'Dida foundation'); // change it to yours
        $this->email->to('mrmdida@gmail.com ');// change it to yours
        $this->email->bcc('tanu.tarunchaudhary@gmail.com');// change it to yours
        $this->email->subject($subject);
        $this->email->message($msg);
        if($this->email->send())
        {
            return true;
        }
    }
    
    private function email_temp($name, $mobile, $email, $address, $message){
        return $msg = '<div style="background: #d6d6d6; padding: 5px 10%;">
                <div style="background: white; padding: 1% 3%; margin: 2% 0; border-radius:5px;">
                <div style="text-align:center;"><img src="http://didafoundationinternational.com/assets/img/logo.png"></div>
                <h1>Hi Mr. Dada,</h1>
            <p>This is mail form your website because an visitor showing intrust on your services.</p>
            <p>The details are given below</p>
            <br>
            <p>Name: <b>'.$name.'</b></p>
            <p>Mobile: <b>'.$mobile.'</b></p>
            <p>Email: <b>'.$email.'</b></p>
            <p>Address: <b>'.$address.'</b></p>
            <p>Messasge: <b>'.$message.'</b></p>
            
            <br><br>
            <h5>Thanks </h5>
            <h5>Rashi enterprises</h5>
            </div></div>
        ';
    }
    
    public function chk(){
        $msh = $this->email_temp('Tarun', 'sjh', 1,1,1);
        if($this->send_mail($msh, 'test')){
            echo 'sent';
        }else{
            echo 'en error';
        }
    }
}
