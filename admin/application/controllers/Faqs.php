<?php
    class Faqs extends Ci_controller{
        public function index(){
            $data['pages'] = $this->mymodel->get_all('faqs');
            $this->load->view('main/faqs', $data);
        }
        
        public function edit($id = 1){
            $data['faq'] = $this->mymodel->select_one('*', array('id'=>$id), 'faqs');
            $this->load->view('main/faqs_edit', $data);
        }
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            $this->form_validation->set_rules('descrp', 'Description', 'required|max_length[1000]');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('position', 'Status', 'required|is_natural|max_length[3]');
            if($this->form_validation->run()){
                $data = array(
                   'title' =>  $formdata['title'],
                   'description' => $formdata['descrp'],
                   'position' => $formdata['position'],
                   'status' => $formdata['status']
                );

                
                $sql = $this->mymodel->update('faqs', array('id'=>$formdata['edtid']), $data);
                if($sql){
                    $error['success'] = true;
                }else{
                    $error['message']['userid'] = '<span class="form_error">Invalid user id. Please try again!</span>'; 
                }
                
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function add(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            $this->form_validation->set_rules('descrp', 'Description', 'required|max_length[1000]');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('position', 'Status', 'required|is_natural|max_length[3]');
            if($this->form_validation->run()){
                $data = array(
                   'title' =>  $formdata['title'],
                   'description' => $formdata['descrp'],
                   'position' => $formdata['position'],
                   'created_date' => date('Y-m-d'),
                   'status' => $formdata['status']
                );

                $sql = $this->mymodel->insert('faqs', $data);
                if($sql){
                    $error['success'] = true;
                }
            }else{
                foreach($_POST as $key =>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function delete(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('faqs', array('id'=>$formdata['deleteid']));
                if($sql){
                    $error['success'] = true;
                }
            }else{
                foreach($_POST as $key =>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function __construct(){
            parent:: __construct();
            if(!$this->session->userdata('mann_admin')){
                redirect(base_url('login'));
            }
        }
    }
?>