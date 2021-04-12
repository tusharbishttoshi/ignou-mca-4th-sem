<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    public function index(){
        redirect(base_url('login'));
    }
    
    public function __construct(){
        parent:: __construct();
        session_destroy();
    }
}