<?php
    class Blog extends Ci_controller{
        public function index(){
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['blog'] = $this->mymodel->join1('*', array('1'=>1), 0, 30, 'blog.status', 'asc', 'blog', 'blogcategory', "blog.blog_category = blogcategory.id", 'left');
            $this->load->view('main/blog', $data);
        }
        
        public function page($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['blog'] = $this->mymodel->join1('*', array('1'=>1), 0, 30, 'blog_position', 'asc', 'blog', 'blogcategory', "blog.blog_category = blogcategory.id", 'left');
            $this->load->view('main/blog', $data);
        }       
        
        public function create(){
            $data['tags'] = $this->mymodel->get_all('mtuk_blogtag');
            $data['category'] = $this->mymodel->get_all('mtuk_blogcategory');
            $this->load->view('main/blog_create', $data);
        }
        
        public function create_new(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'blog Title', 'required|max_length[200]');
            $this->form_validation->set_rules('bg_category', 'blog Category', 'required|max_length[200]');
            $this->form_validation->set_rules('meta_title', 'Meta title', 'required|max_length[80]');
            $this->form_validation->set_rules('blog_url', 'Blog url', 'required|max_length[200]|alpha_numeric_spaces|is_unique[blog.blog_url]');
            $this->form_validation->set_rules('editor1', 'blog description', 'required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name']) or empty($_FILES['image1']['name'])){
                    if(empty($_FILES['image']['name'])){
                        $error['message']['image'] = '<p>Please upload banner image</p>';
                    }
                    if(empty($_FILES['image1']['name'])){
                        $error['message']['image1'] = '<p>Please upload thumbnail image</p>';
                    }
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/blog/',
                        'allowed_types' => 'jpg|jpeg|png|gif',
                        'max_width' => 2100,
                        'max_height' => 700,
                        'min_height' => 700,
                        'min_width' => 2100
                    );
                    
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image') ){
                        $imgbanner = $this->upload->data();
                        $formdata['banner'] = $imgbanner['file_name'];
                        $config1 = array(
                            'upload_path' => './../assets/images/blog/',
                            'allowed_types' => 'jpg|jpeg|png|gif',
                            'max_width' => 300,
                            'max_height' => 300,
                            'min_height' => 300,
                            'min_width' => 300
                        );
                        $this->upload->initialize($config1);
                        if($this->upload->do_upload('image1') ){
                            $imgthumb = $this->upload->data();
                            $formdata['thumb'] = $imgthumb['file_name'];
                            if(isset($formdata['tag'])){
                                $tags = implode(', ', $formdata['tag']);
                            }else{$tags = ""; }
                            $data = array(
                                'blog_category' => $formdata['bg_category'],
                                'blog_title' => $formdata['title'],
                                'description' => $formdata['editor1'],
                                'create_date' => date('Y-m-d H:i:s'),
                                'meta_title' => $formdata['meta_title'],
                                'blog_url' => strtolower($formdata['blog_url']),
                                'blog_metadata' => $formdata['matadata'],
                                'banner' => $formdata['banner'],
                                'thumbnail' => $formdata['thumb'],
                                'blog_position' => $formdata['blog_position'],
                                'blog_tag' => $tags,
                                'status' => 'ACTIVE'
                            );
                            $sql = $this->mymodel->insert('blog', $data);
                            if($sql){
                                $error['rlink'] = site_url ('blog');
                                $error['success'] = true;
                            }
                        }else{
                            $error['message']['image1'] = $this->upload->display_errors('<p>Thumbnail ', '</p>');
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
        
        public function tags(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('tags', 'tag name', 'required|is_unique[blogtag.tag_name]|max_length[60]');
            if($this->form_validation->run()){
                $data = array(
                    'tag_name' => $formdata['tags']
                );
                $sql = $this->mymodel->insert('blogtag', $data);
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
        
        public function category(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('category', 'category name', 'required|is_unique[blogcategory.category_name]|max_length[100]');
            if($this->form_validation->run()){
                $data = array(
                    'category_name' => $formdata['category']
                );
                $sql = $this->mymodel->insert('blogcategory', $data);
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
        
        public function delete_cate($id){
            $this->mymodel->delete('mtuk_blogcategory', array('id'=>$id));
        }
        
        public function delete_tag($id){
            $this->mymodel->delete('mtuk_blogtag', array('id'=>$id));
        }
        
        public function edit($id = 1){
            $data['blog'] = $this->mymodel->select_one('*', array('blog_id'=>$id), 'blog');
            $data['tags'] = $this->mymodel->get_all('blogtag');
            $data['category'] = $this->mymodel->get_all('blogcategory');
            $data['comments'] = $this->mymodel->selcet_limit('*', 'blog_comments', array('comment_for' => 'BLOG', 'comment_for_id' => $id), 'id', 100, 0, 'desc');
            if(!$data['blog']){redirect(base_url('blog'));}
            $this->load->view('main/blog_edit', $data);
        }
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('title', 'blog Title', 'required|max_length[200]');
            $this->form_validation->set_rules('bg_category', 'blog Category', 'required|max_length[200]');
            $this->form_validation->set_rules('editor1', 'blog description', 'required');
            $this->form_validation->set_rules('blgid', 'blog description', 'required');
            $this->form_validation->set_rules('meta_title', 'Meta title', 'required|max_length[80]');
            $this->form_validation->set_rules('blog_url', 'blog url', 'required|max_length[200]|alpha_numeric_spaces');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['banner'] = $formdata['img_banner'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/blog/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['banner'] = $imgdata['file_name'];
                    }
                }
                
                if(empty($_FILES['image1']['name'])){
                    $formdata['thumb'] = $formdata['img_thumb'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/blog/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image1')){
                        $imgdata = $this->upload->data();
                        $formdata['thumb'] = $imgdata['file_name'];
                    }
                }
                
                if(isset($formdata['tag'])){$tags = implode(', ', $formdata['tag']); }else{$tags = ""; }
                $data = array(
                    'blog_category' => $formdata['bg_category'],
                    'blog_title' => $formdata['title'],
                    'description' => $formdata['editor1'],
                    'create_date' => date('Y-m-d H:i:s'),
                    'blog_url' => strtolower($formdata['blog_url']),
                    'meta_title' => $formdata['meta_title'],
                    'blog_metadata' => $formdata['matadata'],
                    'blog_position' => $formdata['blog_position'],
                    'banner' => $formdata['banner'],
                    'thumbnail' => $formdata['thumb'],
                    'blog_tag' => $tags,
                    'status' => $formdata['status']
                );
                
                $sql = $this->mymodel->update('blog', array('blog_id'=>$formdata['blgid']), $data);
                if($sql){
                    $error['success'] = true;
                }else{
                    $error['message']['userid'] = '<p>Failed to update. Please try again!</span>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function updatecomment(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('com_status', 'Status', 'required');
            $this->form_validation->set_rules('com_id', 'Comment', 'required|is_numeric');
            $this->form_validation->set_rules('comblog_id', 'Comment', 'required|is_numeric');
            if($this->form_validation->run()){
                
                $data = array(
                    'status' => $formdata['com_status']
                );
                
                $sql = $this->mymodel->update('blog_comments', array('id'=>$formdata['com_id']), $data);
                if($sql){
                    $error['success'] = true;
                    if(strlen($formdata['com_msg']) > 1){
                        $data1 = array(
                            'comment_for' => 'BLOG',
                            'comment_for_id' => $formdata['comblog_id'],
                            'comments' => $formdata['com_msg'],
                            'name' => 'Mann Travel',
                            'Email' => '',
                            'create_time' => date('Y-m-d H:i:s'),
                            'status' => 'SHOW'
                        );
                        $sql = $this->mymodel->insert('blog_comments', $data1);
                    }
                    
                }else{
                    $error['message']['com_id'] = '<p>Failed to update. Please try again!</span>'; 
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
                'full_tag_open' => '<ul class="pagination float-right">',
                'full_tag_close' => '</ul>',
                'num_tag_open' => '<li class="page-item">',
                'num_tag_close' => '</li>',
                'cur_tag_open' => '<li class="page-item active"><a hreff="#" class="page-link">',
                'cur_tag_close' => '</a></li>',
                'attributes' => array('class' => 'page-link')
            );
            return $config;
        }
        
        public function delete(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('blog', array('blog_id'=>$formdata['deleteid']));
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
        
        public function bulkaction(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('allids', 'Delete id', 'required|trim');
            $this->form_validation->set_rules('attn_all', 'Delete id', 'required|trim');
            if($this->form_validation->run()){
                if($formdata['attn_all'] == 'delete'){
                    $sql = $this->mymodel->delete_all('blog', 'blog_id', explode(',',$formdata['allids']));
                }else{
                    $sql = $this->mymodel->update_all('blog', 'blog_id', explode(',',$formdata['allids']), array('status'=>strtoupper($formdata['attn_all'])));
                }
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