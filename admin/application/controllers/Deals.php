<?php
    class Deals extends Ci_controller{
        
        public function index(){
            $data['deals'] = $this->mymodel->get_all('flight_deals');
            $this->load->view('main/flight_deals', $data);
        }
        
        public function getairport(){
            $id = $_GET['term'];
            if(strlen($id)> 0){
                $sql = $this->mymodel->selcet_all_where('*', 'mtuk_airport_code', 'airportcode like "'.$id.'%" or airportname like "'.$id.'%"');
            }else{
                $sql = $this->mymodel->selcet_all_where('*', 'mtuk_airport_code', array('1'=>1));
            }
            foreach($sql as $ap){
                $data[] = array('label'=>$ap->airportname.' - '.$ap->airportcode.' ('.$ap->country.')', 'value'=>$ap->airportcode);;
            }
            echo json_encode($data);
        }
        
        public function add(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            $this->form_validation->set_rules('destination', 'destination', 'required|callback_checkairport|callback_chackmatch['.$formdata['origin'].']');
            $this->form_validation->set_rules('origin', 'Origin', 'required|callback_checkairport');
            $this->form_validation->set_rules('fare', 'fare', 'required|max_length[9]|decimal');
            $this->form_validation->set_rules('fromdate', 'from date', 'required|max_length[11]');
            $this->form_validation->set_rules('todate', 'to date', 'required|max_length[11]');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $error['message']['image'] = '<p>Please upload imagsse</p>';
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/deals/',
                        'allowed_types' => 'jpg|jpeg|png|gif',
                        'max_width' => 350,
                        'max_height' => 200,
                        'min_height' => 200,
                        'min_width' => 350
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];
                        
                        $data = array(
                            'title' => $formdata['title'],
                            'origin_airport' => $formdata['origin'],
                            'destination_airport' => $formdata['destination'],
                            'from_date' => date('Y-m-d', strtotime($formdata['fromdate'])),
                            'to_date' => date('Y-m-d', strtotime($formdata['todate'])),
                            'image_ban' => $formdata['image'],
                            'details' => $formdata['descp'],
                            'fare' => $formdata['fare'],
                            'position' => $formdata['position'],
                            'update_time' => date('Y-m-d H:i:s'),
                            'status' => 'A'
                        );
                        $sql = $this->mymodel->insert('flight_deals', $data);
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
        
        public function delete(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('flight_deals', array('id'=>$formdata['deleteid']));
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
        
        public function checkairport($id){
            $q = $this->mymodel->select_one('airlineTB_id', array('airportcode'=>$id), 'mtuk_airport_code');
            if($q){
                return true;
            }else{
                $this->form_validation->set_message('checkairport', 'This airport dose not exist!');
                return false;
            }
        }
        
        public function chackmatch($dest, $origin){
            if($dest == $origin){
                $this->form_validation->set_message('chackmatch', 'Origin and destination can not be same!');
                return false;
            }else{
                return true;
            }
        }
        
        public function edit($id){
            $data['deal']= $this->mymodel->select_one('*', array('id'=>$id), 'flight_deals');
            $this->load->view('main/flight_deals_edit', $data);
        }
        
        public function update(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[200]');
            $this->form_validation->set_rules('destination', 'destination', 'required|callback_checkairport|callback_chackmatch['.$formdata['origin'].']');
            $this->form_validation->set_rules('origin', 'Origin', 'required|callback_checkairport');
            $this->form_validation->set_rules('fare', 'fare', 'required|max_length[9]|decimal');
            $this->form_validation->set_rules('fromdate', 'from date', 'required|max_length[11]');
            $this->form_validation->set_rules('todate', 'to date', 'required|max_length[11]');
            $this->form_validation->set_rules('editid', 'image', 'required|max_length[11]');
            if($this->form_validation->run()){
                if(empty($_FILES['image']['name'])){
                    $formdata['image'] = $formdata['image1'];
                }else{
                    $config = array(
                        'upload_path' => './../assets/images/deals/',
                        'allowed_types' => 'jpg|jpeg|png|gif'
                    );
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $imgdata = $this->upload->data();
                        $formdata['image'] = $imgdata['file_name'];

                    }else{
                        $formdata['image'] = $formdata['image1'];
                    }
                }
                $data = array(
                    'title' => $formdata['title'],
                    'origin_airport' => $formdata['origin'],
                    'destination_airport' => $formdata['destination'],
                    'from_date' => date('Y-m-d', strtotime($formdata['fromdate'])),
                    'to_date' => date('Y-m-d', strtotime($formdata['todate'])),
                    'image_ban' => $formdata['image'],
                    'details' => $formdata['descp'],
                    'fare' => $formdata['fare'],
                    'position' => $formdata['position'],
                    'update_time' => date('Y-m-d H:i:s'),
                    'status' => $formdata['status']
                );
                $sql = $this->mymodel->update('flight_deals', array('id'=>$formdata['editid']), $data);
                if($sql){
                    $error['rlink'] = site_url('deals');
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