<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('footer'))
{
	function footer()
	{
        $CI = get_instance();
        $CI->load->model('mymodel');
        $ftr = '';
        $fts = $CI->mymodel->select_all_limit('title', array('status'=>'ACTIVE'), 'events', 'id', 'desc', 8, 0);
        foreach($fts as $ft){
            $ftr = $ftr.'<li class="list-group-item one"><a href="'.site_url('events').'" class="hvr-forward">'.$ft->title.'</a></li>';
        }
        return $ftr;
	}
}
