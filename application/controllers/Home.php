<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $data['events'] = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'events', 'id', 'desc', 4, 0);
        $data['gallery_img'] = $this->mymodel->select_all_limit('*', array('1'=>1), 'images_gallery', 'id', 'desc', 12, 0);
        $data['gallery_video'] = $this->mymodel->select_all_limit('*', array('1'=>1), 'video_gallery', 'id', 'desc', 12, 0);
        $data['program'] = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'programs', 'id', 'desc', 9, 0);
        $this->load->view('main/index', $data);
	}
}
