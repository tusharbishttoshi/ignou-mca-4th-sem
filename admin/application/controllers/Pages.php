<?php
    class Pages extends Ci_controller{
        public function index(){
            $data['pages'] = $this->mymodel->get_all('pages_seo');
            $this->load->view('main/pages', $data);
        }
        
        public function edit($id = 1){
            $data['pages'] = $this->mymodel->select_one('*', array('page_id'=>$id), 'pages_seo');
            $this->load->view('main/pages_edit', $data);
        }
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
            $this->form_validation->set_rules('title', 'title', 'required|max_length[150]');
            $this->form_validation->set_rules('meta_tags', 'metags', 'required');
            if($this->form_validation->run()){
                $data = array(
                    'title' => $formdata['title'],
                    'meta_tags' => $formdata['meta_tags']
                );
                
                $sql = $this->mymodel->update('pages_seo', array('page_id'=>$formdata['edtid']), $data);
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
        
        public function banners(){
            $data['pages'] = $this->mymodel->selcet_all_where('page_name,page_id', 'pages_seo', array('1'=>1));
            $data['banner'] = $this->mymodel->join1('banners.*, pages_seo.page_name', array('1'=>1), 0, 100, 'id', 'desc', 'banners', 'pages_seo', "banners.page_id=pages_seo.page_id", 'left');
            $this->load->view('main/pages_banners', $data);
        }
        
        public function add_banner(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'blog Title', 'required|max_length[200]');
            $this->form_validation->set_rules('page_id', 'page', 'required|max_length[2]|is_natural');
            $this->form_validation->set_rules('r_url', 'Redirecting Url', 'required|valid_url|max_length[200]');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('type', 'banner type', 'required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $error['message']['image'] = '<p>Please upload imagsse</p>';
                }else{
                    $config = array(
                        'upload_path' => './assets/images/banners/',
                        'max_filename' => 5,
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        
                        $imgcon = array(
                           'source_image' =>  'GD2',
                           'source_image' =>  './assets/images/banners/'.$formdata['image'],
                           'wm_text' =>  'Mann Travel',
                           'wm_font_color' =>  '#ced2d694',
                           'wm_type' =>  'text',
                           'wm_vrt_alignment' =>  'bottom',
                           'wm_hor_alignment' =>  'right',
                           'wm_padding' =>  '1'
                        );
                        
                        $this->load->library('image_lib', $imgcon);
                        $this->image_lib->resize();
                        $this->image_lib->watermark();
                        
                        $data = array(
                           'page_id' =>  $formdata['page_id'],
                           'banner_type' => $formdata['type'],
                           'banner_link' => $formdata['image'],
                           'banner_title' => $formdata['title'],
                           'redirect_url' => $formdata['r_url'],
                           'status' => $formdata['status']
                        );
                        
                        $sql = $this->mymodel->insert('banners', $data);
                        if($sql){
                            $error['success'] = true;
                        }
                        
                    }else{
                        $error['message']['image'] = $this->upload->display_errors('<p>', '</p>');
                    }    
                }
            }else{
                foreach($_POST as $key =>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function edit_banner($id = 1){
            $data['pages'] = $this->mymodel->selcet_all_where('page_name,page_id', 'pages_seo', array('1'=>1));
            $data['banner'] = $this->mymodel->select_one('*', array('id'=>$id), 'banners');
            $this->load->view('main/pages_banner_edit', $data);
        }
        
        public function update_ban(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('title', 'blog Title', 'required|max_length[200]');
            $this->form_validation->set_rules('page_id', 'page', 'required|max_length[2]|is_natural');
            $this->form_validation->set_rules('r_url', 'Redirecting Url', 'required|valid_url|max_length[200]');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('type', 'banner type', 'required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['image'] = $formdata['image1'];
                }else{
                    $config = array(
                        'upload_path' => './assets/images/banners/',
                        'max_filename' => 5,
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        
                        $imgcon = array(
                           'source_image' =>  'GD2',
                           'source_image' =>  './assets/images/banners/'.$formdata['image'],
                           'wm_text' =>  'Mann Travel',
                           'wm_font_color' =>  '#ced2d694',
                           'wm_type' =>  'text',
                           'wm_vrt_alignment' =>  'bottom',
                           'wm_hor_alignment' =>  'right',
                           'wm_padding' =>  '1'
                        );
                        
                        $this->load->library('image_lib', $imgcon);
                        $this->image_lib->resize();
                        $this->image_lib->watermark();                        
                    }
                }
                
                $data = array(
                   'page_id' =>  $formdata['page_id'],
                   'banner_type' => $formdata['type'],
                   'banner_link' => $formdata['image'],
                   'banner_title' => $formdata['title'],
                   'redirect_url' => $formdata['r_url'],
                   'status' => $formdata['status']
                );

                $sql = $this->mymodel->update('banners', array('id'=>$formdata['edtid']), $data);
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
        
        public function __construct(){
            parent:: __construct();
            if(!$this->session->userdata('mann_admin')){
                redirect(base_url('login'));
            }
        }
    }
?>