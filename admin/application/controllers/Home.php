<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->view('main/index');
    }
    
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('dida_admin')){
            redirect(base_url('login'));
        }
    }
}