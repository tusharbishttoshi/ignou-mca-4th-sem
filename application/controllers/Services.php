<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function index()
	{
        $serv = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'services', 'id', 'DESC', 200, 0);
		$this->load->view('main/services', array('service'=>$serv));
	}
    
    public function detail($id){
        if(!$id){redirect('servoces');}
        $prd = $this->mymodel->get_1('*', 'services', array('id'=>$id));
        if(!$prd){redirect(base_url('services')); }
        $this->load->view('main/service_detail', array('servcs'=>$prd));
    }
}
