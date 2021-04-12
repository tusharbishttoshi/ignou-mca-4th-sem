<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programs extends CI_Controller {
	public function index()
	{
        $data['program'] = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'programs', 'id', 'desc', 900, 0);
        $this->load->view('main/programs', $data);
	}
    
    public function category($id)
	{
        $prd = $this->mymodel->select_all_limit('*', array('status'=>'APPROVED', 'category_id'=>$id), 'products', 'id', 'DESC', 100, 0);
        $catss = $this->mymodel->select_all_limit('*', array('status'=>'ACTIVE'), 'category', 'position', 'DESC', 50, 0);
        $category = $this->mymodel->get_1('*', 'category', array('category_id'=>$id));
		$this->load->view('main/products_category', array('prd'=>$prd, 'ct'=>$catss, 'page'=>$category));
	}
    
    public function detail($id = 1){
        $prd = $this->mymodel->get_1('*', 'programs', array('id'=>$id));
        if(!$prd){redirect(base_url('programs')); }
        $this->load->view('main/program_detail', array('prd'=>$prd));
    }
}
