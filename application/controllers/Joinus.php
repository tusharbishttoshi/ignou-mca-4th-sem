<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinus extends CI_Controller {
	public function index()
	{
		$this->load->view('main/membership');
	}
    
    
    
    public function formsub(){
        $error = array('success'=>false, 'message'=>array());
		$form_data = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<span class="error-frm">','</span>');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('father', 'father name', 'required');
		$this->form_validation->set_rules('address', 'name', 'required');
		$this->form_validation->set_rules('dob', 'Date of birth', 'required');
		$this->form_validation->set_rules('mobile', 'mobile', 'required|is_natural|min_length[7]');
		$this->form_validation->set_rules('ocupation', 'ocupation', 'required|max_length[100]');
		$this->form_validation->set_rules('quali', 'Qualification', 'required|max_length[100]');
		$this->form_validation->set_rules('ssn', 'ID Number', 'required|max_length[100]');
        
		if($this->form_validation->run()){
            $data = array(
                'name' => $form_data['name'],
                'gaurdian_name' => $form_data['father'],
                'email' => $form_data['email'],
                'mobile' => $form_data['mobile'],
                'gender' => $form_data['gender'],
                'id_number' => $form_data['ssn'],
                'dob' => $form_data['dob'],
                'qualification' => $form_data['quali'],
                'occupation' => $form_data['ocupation'],
                'address' => $form_data['address'],
                'create_date' => date('Y-m-d H:i')
            );
            
			if($this->mymodel->insert_data('members', $data))	{
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
}