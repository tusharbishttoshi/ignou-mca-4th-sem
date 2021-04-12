<?php
    class Gallery extends Ci_controller{
        public function index(){
            $data['gallery'] = $this->mymodel->get_all('images_gallery');
            $this->load->view('main/gallery_images', $data);
        }
        
        public function videos(){
            $data['gallery'] = $this->mymodel->get_all('video_gallery');
            $this->load->view('main/gallery_video', $data);
        }
        
        public function addimage(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $error['message']['image'] = '<p>Please upload banner image</p>';
                }else{
                    $config = array(
                        'upload_path' => './../assets/img/gallery/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image') ){
                        $imgbanner = $this->upload->data();
                        $formdata['banner'] = $imgbanner['file_name'];
                        $data = array(
                            'title' => $formdata['title'],
                            'img_path' => $formdata['banner'],
                            'create_date' => date('Y-m-d')
                        );
                        $sql = $this->mymodel->insert('images_gallery', $data);
                        if($sql){
                            $error['success'] = true;
                        }
                        
                        
                    }else{
                        $error['message']['image1'] = $this->upload->display_errors('<p>Thumbnail ', '</p>');
                    }
                }
                
            }else{
                foreach($_POST as $key =>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function addvideo(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            $this->form_validation->set_rules('v_type', 'vido type', 'required|max_length[2]|is_natural');
            if($formdata['v_type'] == 1){
                $this->form_validation->set_rules('lnk', 'Video Libk', 'required|max_length[50]');
            }
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['banner'] = $formdata['v_type'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/img/gallery/'
                    );
                    
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image') ){
                        $imgbanner = $this->upload->data();
                        $formdata['banner'] = $imgbanner['file_name'];
                    }else{
                       $formdata['banner'] = $formdata['v_type'];
                    }
                }
            
                $data = array(
                    'title' => $formdata['title'],
                    'video_type' => $formdata['v_type'],
                    'video_path' => $formdata['banner'],
                    'create_date' => date('Y-m-d')
                );
                $sql = $this->mymodel->insert('video_gallery', $data);
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
        
        
        
        public function delete_img(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('images_gallery', array('id'=>$formdata['deleteid']));
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
        
         public function delete_video(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('video_gallery', array('id'=>$formdata['deleteid']));
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
        
       
    }
?>