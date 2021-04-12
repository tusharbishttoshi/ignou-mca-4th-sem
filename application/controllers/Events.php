<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
        $data['events'] = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'events', 'id', 'desc', 120, 0);
		$this->load->view('main/events', $data);
	}
    public function detail($id = 1){
        $prd = $this->mymodel->get_1('*', 'events', array('id'=>$id));
        if(!$prd){redirect(base_url('events')); }
        $this->load->view('main/events_detail', array('prd'=>$prd));
    }
}
