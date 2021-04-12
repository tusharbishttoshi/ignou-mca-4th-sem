<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourworks extends CI_Controller {
	public function index()
	{
		$this->load->view('main/works');
	}
    
    public function economy()
	{
		$this->load->view('main/works_economy');
	}
    
    public function healthandmedical()
	{
		$this->load->view('main/works_health');
	}
    public function scienceandresearch()
	{
		$this->load->view('main/works_science');
	}
    public function educationandmorality()
	{
		$this->load->view('main/works_education');
	}
    public function sociallife()
	{
		$this->load->view('main/works_sociallife');
	}
    public function deathrights()
	{
		$this->load->view('main/works_deathrate');
	}
    public function technology()
	{
		$this->load->view('main/works_technology');
	}
    public function leadership()
	{
		$this->load->view('main/works_leadership');
	}
    
    public function conflictresolution()
	{
		$this->load->view('main/works_conflict');
	}
}
