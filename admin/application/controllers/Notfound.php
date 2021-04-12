<?php
    class Notfound extends CI_controller{
        public function index(){
            $this->load->view('main/error_page');
        }
    }
    
?>