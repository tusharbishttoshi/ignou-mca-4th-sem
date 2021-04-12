<?php
    class Login extends Ci_controller{
        public function index(){
            $this->load->view('main/login');
        }
        
        public function signin(){
            $error = array('success' => false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('user', 'Login ID', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if($this->form_validation->run()){
                $usr = $this->mymodel->select_one('*', 'status="ACTIVE" and (admin_email="'.$formdata['user'].'" or admin_mobile="'.$formdata['user'].'")', 'admin');
                if($usr){
                    if($usr->admin_password === $formdata['password']){
                        $this->session->set_userdata('dida_admin', $usr->admin_id);
                        $error['success'] = true;
                    }else{
                        $error['message']['password'] = '<p>Wrong password. Please try again!</p>';
                    }
                    
                }else{
                    $error['message']['user'] = '<p>Invalid user id. Please try again!</p>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            
            echo json_encode($error);
        }
        
        public function password(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
            $this->form_validation->set_rules('userid', 'Email/mobile', 'required');
            if($this->form_validation->run()){
                $usr = $this->mymodel->select_one('admin_email, admin_id', 'status="ACTIVE" and (admin_email="'.$formdata['userid'].'" or admin_mobile="'.$formdata['userid'].'")', 'admin');
                if($usr){
                    $lnk = md5(uniqid('maanadmin_'));
                    $data = array(
                        'admin_reset_link' => $lnk,
                        'admin_reset_time' => date('Y-m-d H:i:s')
                    );
                    $sql = $this->mymodel->update('admin', array('admin_id'=>$usr->admin_id), $data);
                    $this->send_mail($this->resetmail($lnk), $usr->admin_email, 'Password recovery mail :: Mann travel');
                    $error['success'] = true;
                    $error['alert'] = '<div class="m-4 alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><h4>A reset link send on your email. Please check your inbox!</h4></div>';
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
        
        private function resetmail($lnk){
            $msg = '<h4>Hi User</h4>
            <p>To reset your password <a href="'.site_url('login/createpassword/?resetlink='.$lnk).'">Click here</a></p>
            <p><p>
            
            <p>Thanks</p>
            
            ';
            
            return $msg;
        }
        
        public function sendmail(){
            $this->send_mail('This is message line', 'tarun.comsoft@gmail.com', 'test mail form localhost');
        }
        
        private function send_mail($msg, $to, $subject){
            $config = Array(
                'protocol'  => 'sendmail',
                'smtp_crypto'  => 'tsl',
                'mailtype'  => 'html',
                'wordwrap' => TRUE,
                'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->load->library('email', $config);
            $this->email->from('info@didafoundationinternational.com', 'Dida foundation'); // change it to yours
            $this->email->to($to);// change it to yours
            $this->email->subject($subject);
            $this->email->message($msg);
            $this->email->set_newline("\r\n");
            if($this->email->send())
            {
                return true;
            }
        }
        
        public function createpassword(){
            if(isset($_GET['resetlink'])){
                $link = $_GET['resetlink'];
            } else{ $link = 'sdjf';}
            
            $chk = $this->mymodel->select_one('admin_reset_time', array('admin_reset_link'=>$link), 'admin');
            if($chk){
                if(date('Y-m-d H:i:s', strtotime('+30 minutes', strtotime($chk->admin_reset_time))) > date('Y-m-d H:i:s')){
                    $data['failed'] = false;
                }else{
                    $data['failed'] = true;
                    $data['msg'] = 'Your link has been expired. please try again!';
                }
            }else{
                $data['failed'] = true;
                $data['msg'] = 'Invalid reset link';
            }
            
            $this->load->view('main/recoverpassword', $data);            
        }
        
        public function create_pass(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
            $this->form_validation->set_rules('resetlnk', 'New password', 'required');
            $this->form_validation->set_rules('new_pass', 'New password', 'required|min_length[7]');
            $this->form_validation->set_rules('conf_pass', 'Confirm password', 'required|matches[new_pass]');
            if($this->form_validation->run()){
                $data = array(
                    'admin_password' => $formdata['conf_pass'],
                    'admin_reset_link' => null,
                    'admin_reset_time' => null
                );
                $sql = $this->mymodel-> update('admin', array('admin_reset_link'=>$formdata['resetlnk']), $data);
                if($sql){
                    $error['alert'] = '<div class="alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><p>Your password hasbeen successfully changed</p><a href="'.site_url('login').'" class="btn btn-info">Login</a></div>';
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
        
        public function __construct(){
            parent:: __construct();
            if($this->session->userdata('dida_admin')){
                redirect(base_url('home'));
            }
        }
        
    }
?>