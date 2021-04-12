<?php
    class Enquiry extends Ci_controller{
        
        public function index(){
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['enquiry'] = $this->mymodel->selcet_limit('*', 'inquiry', array('1'=>1), 'inquiry_id', 30, 0, 'desc');
            $this->load->view('main/enquiry_list', $data);
        }
        
        public function page($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $this->load->library('pagination');
            $this->pagination->initialize($this->getCong());
            $data['enquiry'] = $this->mymodel->selcet_limit('*', 'inquiry', array('1'=>1), 'inquiry_id', 30, $id, 'desc');
            $this->load->view('main/enquiry_list', $data);
        }
        
        public function delete(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('inquiry', array('inquiry_id'=>$formdata['deleteid']));
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
            $this->form_validation->set_rules('edtid', 'id', 'required');
            $this->form_validation->set_rules('remarks', 'Remarks', 'required');
            if($this->form_validation->run()){
                $data = array(
                    'remarks' => $formdata['remarks'],
                    'status' => 'VIEWED'
                );
                
                $sql = $this->mymodel->update('inquiry', array('inquiry_id'=>$formdata['edtid']), $data);
                if($sql){
                    $error['success'] = true;
                }else{
                    $error['message']['remarks'] = '<span class="form_error">Invalid user id. Please try again!</span>'; 
                }
            }else{
                foreach($_POST as $key=>$value){
                    $error['message'][$key] = form_error($key);
                }
            }
            echo json_encode($error);
        }
        
        public function newsletters($id = 1){
            if($id<1){$id = 0;}else{$id = 30*($id-1);}
            $config = array(
                'base_url' => base_url('enquiry/newsletters'),
                'total_rows' => $this->mymodel->count_all('newsletter'),
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
            $this->load->library('pagination', $config);
            $data['enquiry'] = $this->mymodel->selcet_limit('*', 'newsletter', array('1'=>1), 'id', 30, $id, 'desc');
            $this->load->view('main/newsletters', $data);
        }
        
        public function deletenewsletter(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('deleteid', 'Delete id', 'required|is_natural|max_length[4]');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete('newsletter', array('id'=>$formdata['deleteid']));
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
        
        private function getCong(){
            $config = array(
                'base_url' => base_url('enquiry/page'),
                'total_rows' => $this->mymodel->count_all('inquiry'),
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
        
        public function bulkaction(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('allids', 'Delete id', 'required|trim');
            $this->form_validation->set_rules('attn_all', 'Delete id', 'required|trim');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete_all('inquiry', 'inquiry_id', explode(',',$formdata['allids']));
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
        
        public function deletealnews(){
            $error = array('success'=>false, 'message'=>array());
            $formdata = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p>','</p>');
            $this->form_validation->set_rules('allids', 'Delete id', 'required|trim');
            $this->form_validation->set_rules('attn_all', 'Delete id', 'required|trim');
            if($this->form_validation->run()){
                $sql = $this->mymodel->delete_all('newsletter', 'id', explode(',',$formdata['allids']));
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
        
        public function createXLS() {
        // create file name
            $fileName = 'data-'.time().'.xlsx';  
        // load excel library
            $this->load->library('excel');
            $empInfo = $this->mymodel->selcet_limit('*', 'newsletter', array('1'=>1), 'id', 100, 0);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0);
            // set Header
            $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Sn.');
            $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Email');
            $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Date');
            $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'IP Address');
            $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Plateform');       
            $objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Browser');       
            $objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Status');       
            // set Row
            $rowCount = 2;
            foreach ($empInfo as $fld) {
                $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $rowCount-1);
                $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $fld->email);
                $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $fld->create_date);
                $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $fld->ip_address);
                $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $fld->plateform);
                $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $fld->browser);
                $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $fld->status);
                $rowCount++;
            }
            $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Employee Data.xlsx"');
            $objWriter->save('php://output');
            // download file
            //header("Content-Type: application/vnd.ms-excel");
            //redirect(HTTP_UPLOAD_IMPORT_PATH.$fileName);  
        }
        
    }
?>