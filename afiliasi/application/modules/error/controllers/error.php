<?php

if(!defined('BASEPATH'))
		exit('No direct script access allowed');


class Error extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('template/template_model','template',TRUE);
	}

	function index(){
		$datalogin=$this->session->all_userdata();
		$aktif_menu['title']='404 - Tidak Ditemukan';
		$aktif_menu['menus']=$this->template->menu('member');
		if($this->session->userdata('login')===TRUE && $datalogin['rolename']==='member' && isset($datalogin['userid'])){
			$this->load->view('template/header_member', $aktif_menu);
		}else{
			$this->load->view('template/header', $aktif_menu);
		}
			
			
		$this->load->view('error');
	}

	
	
}
?>