<?php
    class Offers extends Ci_controller{
        public function index(){
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['offers'] = $this->mymodel->selcet_limit('*', 'offers', array('1'=>1), 'offer_id', 30, 0);
            $this->load->view('main/offers', $data);
        }
        
        public function page($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['blog'] = $this->mymodel->selcet_limit('*', 'blog', array('1'=>1), 'blog_id', 30, $id);
            $this->load->view('main/blog', $data);
        }
        
        public function create(){
            $this->load->view('main/offer_create');
        }
        
        public function add(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'offer Title', 'required|max_length[200]');
            $this->form_validation->set_rules('editor1', 'offer description', 'required');
            $this->form_validation->set_rules('blog_position', 'Position', 'required|is_natural');
            $this->form_validation->set_rules('last_date', 'Last date', 'required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $error['message']['image'] = '<p>Please upload imagsse</p>';
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/offers/',
                        'allowed_types' => 'jpg|jpeg|png|gif',
                        'max_width' => 550,
                        'max_height' => 550,
                        'min_height' => 550,
                        'min_width' => 550
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        
                        $data = array(
                            'title' => $formdata['title'],
                            'description' => $formdata['editor1'],
                            'create_date' => date('Y-m-d H:i:s'),
                            'image' => $formdata['image'],
                            'last_date' => date('Y-m-d', strtotime($formdata['last_date'])),
                            'position' => $formdata['blog_position'],
                            'status' => 'ACTIVE'
                        );
                        $sql = $this->mymodel->insert('offers', $data);
                        if($sql){
                            $error['rlink'] = site_url ('offers');
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
        
        public function edit($id = 1){
            $data['ofr'] = $this->mymodel->select_one('*', array('offer_id'=>$id), 'offers');
            $this->load->view('main/offer_edit', $data);
        }
       
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
            $this->form_validation->set_rules('title', 'title', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');
            $this->form_validation->set_rules('edtid', 'name', 'required');
            $this->form_validation->set_rules('last_date', 'Last date', 'required');
            $this->form_validation->set_rules('blog_position', 'position', 'required|is_natural');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['image'] = $formdata['img1'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/offers/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                    }else{
                        $error['message']['image'] = $this->upload->display_errors('<p>', '</p>');
                    }
                }
                $data = array(
                    'title' => $formdata['title'],
                    'description' => $formdata['editor1'],
                    'image' => $formdata['image'],
                    'last_date' => date('Y-m-d', strtotime($formdata['last_date'])),
                    'position' => $formdata['blog_position'],
                    'status' => $formdata['status']
                );
                $sql = $this->mymodel->update('offers', array('offer_id'=>$formdata['edtid']), $data);
                if($sql){
                   // $error['success'] = true;
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
                'base_url' => base_url('blog/page'),
                'total_rows' => $this->mymodel->count_all('blog'),
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
            if(!$this->session->userdata('mann_admin')){
                redirect(base_url('login'));
            }
        }
    }
?>