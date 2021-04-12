<?php
    class Profile extends Ci_controller{
        public function index(){
            $data['prfl'] = $this->mymodel->select_one('*', array('admin_id'=>$this->session->userdata('mann_admin')), 'admin');
            if($data['prfl']){
                $this->load->view('main/profile', $data);
            }
                
        }
       
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('name', 'name', 'required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['image'] = $formdata['dp_img'];
                }else{
                    $config = array(
                        'upload_path' => './assets/images/profile/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        
                        $imgcon = array(
                           'source_image' =>  'GD2',
                           'source_image' =>  './assets/images/profile/'.$formdata['image'],
                           'width' =>  '120',
                           'height' =>  '120',
                           'wm_text' =>  'Mann Travel',
                           'wm_type' =>  'text',
                           'wm_vrt_alignment' =>  'bottom',
                           'wm_hor_alignment' =>  'left',
                           'wm_padding' =>  '2',
                        );
                        
                        $this->load->library('image_lib', $imgcon);
                        $this->image_lib->resize();
                        $this->image_lib->watermark();
                    }
                }
                $data = array(
                    'admin_dp' => $formdata['image'],
                    'admin_name' => $formdata['name']
                );
                
                $sql = $this->mymodel->update('admin', array('admin_id'=>$this->session->userdata('mann_admin')), $data);
                if($sql){
                    $error['success'] = true;
                }else{
                    $error['message']['userid'] = '<p>Invalid user id. Please try again!</p>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function changepassword(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('old_pass', 'Old password', 'required|callback_oldpass');
            $this->form_validation->set_rules('new_pass', 'new password', 'required|min_length[7]');
            $this->form_validation->set_rules('conf_pass', 'confirm password', 'required|matches[new_pass]');
            if($this->form_validation->run()){
                $data = array(
                    'admin_password' => $formdata['conf_pass']
                );
                $sql = $this->mymodel->update('admin', array('admin_id'=>$this->session->userdata('mann_admin')), $data);
                if($sql){
                    $error['alert'] = '<div class="alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><p>Your password has been successfully changed</p></div>';
                    $error['success'] = true;
                }else{
                    $error['message']['userid'] = '<p>Invalid user id. Please try again!</p>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function oldpass($old_pass){
            $data = $this->mymodel->select_one('admin_password', array('admin_id'=>$this->session->userdata('mann_admin')), 'admin');
            if($data->admin_password !== $old_pass){
                $this->form_validation->set_message('oldpass', 'Old password not matched');
                return false;
            }else{ return true;}                
        }
        
        public function __construct(){
            parent:: __construct();
            if(!$this->session->userdata('mann_admin')){
                redirect(base_url('login'));
            }
        }
        
    }
?>