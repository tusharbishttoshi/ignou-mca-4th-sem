<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {
	public function index()
	{
		$this->load->view('main/donation');
	}
    
}