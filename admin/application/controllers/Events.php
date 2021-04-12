<?php
    class Events extends Ci_controller{
        public function index(){
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['events'] = $this->mymodel->selcet_limit('*', 'events', array('1'=>1), 'id', 30, 0);
            $this->load->view('main/event_list', $data);
        }
        
        public function page($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['blog'] = $this->mymodel->join1('*', array('1'=>1), 0, 30, 'blog_position', 'asc', 'blog', 'blogcategory', "blog.blog_category = blogcategory.id", 'left');
            $this->load->view('main/blog', $data);
        }
       
        public function create_new(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Heading', 'trim|required|max_length[100]');
            $this->form_validation->set_rules('position', 'Position', 'trim|required|is_natural|max_length[3]');
            $this->form_validation->set_rules('event_date', 'Event date', 'required');
            $this->form_validation->set_rules('event_time', 'Event time', 'required|max_length[100]');
            $this->form_validation->set_rules('details', 'Details', 'trim|required');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $error['message']['image'] = '<p>Please upload image</p>';
                }
                else{
                    $config = array(
                        'upload_path' => './../assets/img/events/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        $img_width = $imgdata['image_width'];
                        
                        $data = array(
                            'title' => $formdata['title'],
                            'position' => $formdata['position'],
                            'event_date' => date('Y-m-d H:i:s', strtotime($formdata['event_date'].', '.$formdata['event_date'])),
                            'image' => $formdata['image'],
                            'details' => $formdata['details'],
                            'create_date' => date('Y-m-d H:i:s'),
                            'status' => $formdata['status']
                        );
                        $sql = $this->mymodel->insert('events', $data);
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
        
        public function edit($id = 1){
            $data['event'] = $this->mymodel->select_one('*', array('id'=>$id), 'events');
            if(!$data['event']){redirect(base_url('events'));}
            $this->load->view('main/event_edit', $data);
        }
        
        public function update(){
            $error = array('success'=>false, 'message' => array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>', '</p>');
            $this->form_validation->set_rules('title', 'Heading', 'trim|required|max_length[100]');
            $this->form_validation->set_rules('position', 'Position', 'trim|required|is_natural|max_length[3]');
            $this->form_validation->set_rules('event_date', 'Event date', 'required');
            $this->form_validation->set_rules('event_time', 'Event time', 'required|max_length[100]');
            $this->form_validation->set_rules('details', 'Details', 'trim|required');
            
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['image'] = $formdata['image1'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/img/events/',
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
                    'position' => $formdata['position'],
                    'event_date' => date('Y-m-d H:i:s', strtotime($formdata['event_date'].', '.$formdata['event_time'])),
                    'image' => $formdata['image'],
                    'details' => $formdata['details'],
                    'status' => $formdata['status']
                );
                
                $sql = $this->mymodel->update('events', array('id'=>$formdata['edtid']), $data);
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
        
        public function update_position(){
            $error = array('success'=>true, 'message'=>array());
            $formdata = $this->input->post();
            foreach($formdata['id'] as $key => $value){
                $this->mymodel->update('destinations', array('id'=>$formdata['id'][$key]), array('img_width'=>$formdata['width'][$key], 'position'=>$formdata['position'][$key]));
            }
            echo json_encode($error);
        }
        
        private function getCong(){
            $config = array(
                'base_url' => base_url('events/page'),
                'total_rows' => $this->mymodel->count_all('events'),
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
                $sql = $this->mymodel->delete('events', array('id'=>$formdata['deleteid']));
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
                    $sql = $this->mymodel->delete_all('events', 'id', explode(',',$formdata['allids']));
                }else{
                    $sql = $this->mymodel->update_all('events', 'id', explode(',',$formdata['allids']), array('status'=>strtoupper($formdata['attn_all'])));
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
            if(!$this->session->userdata('dida_admin')){
                redirect(base_url('login'));
            }
        }
    }
?>