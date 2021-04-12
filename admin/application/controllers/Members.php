<?php
    class Members extends Ci_controller{
        public function index(){
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['users'] = $this->mymodel->selcet_limit('*', 'members', array('1'=>1), 'id', 30, 0, 'desc');
            $this->load->view('main/users', $data);
        }
        
        public function page($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['blog'] = $this->mymodel->selcet_limit('*', 'members', array('1'=>1), 'blog_id', 30, $id, 'desc');
            $this->load->view('main/users', $data);
        }
       
        public function delete(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('users', array('user_id'=>$formdata['deleteid']));
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
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
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
                           'height' =>  '90',
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
                    $error['message']['userid'] = '<span class="form_error">Invalid user id. Please try again!</span>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        private function getCong(){
            $config = array(
                'base_url' => base_url('members/page'),
                'total_rows' => $this->mymodel->count_all('members'),
                'per_page' => '30',
                'uri_segment' => 3,
                'use_page_numbers' => true,
                'full_tag_open' => '<ul class="pagination">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li class="page-item">',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="page-item active"><a hreff="#" class="page-link">',
                'cur_tag_close' => '</a></li>',
                'attributes' => array('class' => 'page-link')
            );
            return $config;
        }
        
        public function __construct(){
            parent:: __construct();
            if(!$this->session->userdata('dida_admin')){
                redirect(base_url('login'));
            }
        }
    }
?>