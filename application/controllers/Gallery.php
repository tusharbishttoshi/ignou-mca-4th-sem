<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
        $data['gallery_img'] = $this->mymodel->select_all_limit('*', array('1'=>1), 'images_gallery', 'id', 'desc', 100, 0);
        $data['gallery_video'] = $this->mymodel->select_all_limit('*', array('1'=>1), 'video_gallery', 'id', 'desc', 120, 0);
		$this->load->view('main/gallery', $data);
	}
    
    public function detail($id){
        if(!$id){redirect('Portfolio');}
        $prd = $this->mymodel->get_1('*', 'portfolio', array('id'=>$id));
        if(!$prd){redirect(base_url('portfolio')); }
        $related = $this->mymodel->select_all_limit('*', array('status'=>'SHOW', 'id!='=>$id), 'portfolio', 'id', 'DESC', 5, 0);
        $this->load->view('main/projects_detail', array('list'=>$prd, 'rltd'=>$related));
    }
}
