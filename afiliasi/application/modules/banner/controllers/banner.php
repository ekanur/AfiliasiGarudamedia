<?php

if(!defined('BASEPATH'))
		exit('No direct script access allowed');


class Banner extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('template/template_model','template',TRUE);
		$this->load->model('banner_model');
		
	}

	function index(){
		if($this->session->userdata('login')===TRUE){
			$data['bannerimg']	=$this->banner_model->get_img_banner();
			$data['bannertxt']	=$this->banner_model->get_txt_banner();
 			$page['title']		='Manajemen Banner';
			$page['menus']		=$this->template->menu('member');
			$this->load->view('template/header_member', $page);
			$this->load->view('banner',$data);
		}else{
			redirect('login'); 
		}
	}



}
?>