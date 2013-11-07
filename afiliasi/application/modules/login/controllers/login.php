<?php

if(!defined('BASEPATH'))
		exit('No direct script access allowed');


class Login extends MX_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model', 'logindb', TRUE);
		$this->load->model('template/template_model', 'template', TRUE);
	}

	function index(){
		if($this->session->userdata('login')===TRUE){
			$data=$this->session->all_userdata();
			if ($data['rolename']==='administrator'){
				redirect('admin');}
			else if ($data['rolename']==='member'){ 
				redirect('main'); 

			}
		}else{
			$page['title']='Login Affiliate';
			$page['menus']=$this->template->menu('guest');
			$data['msg_content']="";
				
			$this->load->view('template/header', $page);
			$this->load->view('login',$data);
			
		}
	}

	function signin(){
		if($this->session->userdata('login')===TRUE){
			redirect('main');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean'); 
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean'); 
		$this->form_validation->set_message('required', '%s Harus Diisi');
            
        if ($this->form_validation->run($this) == TRUE ) { 
			$username  =$this->input->post('username');
			$pwd       =$this->input->post('pwd');
			
			$userdata  =$this->logindb->cek_aktif($username);
			//echo "result is ".$this->logindb->cek_login($username, $pwd)."";
			if ($this->logindb->cek_login($username, $pwd)==1){
				if ($userdata!=null){
					foreach ($userdata as $row){
						$userid=$row->userid;
					}
					$cek_user=$this->cek_user($userid);
					$this->session->set_userdata($cek_user);
					redirect("main");//redirect login
				} else {
						$data['msg_content']="Silakan aktifkan akun anda melalui link yang dikirim ke email anda";
						$page['title']='Login Affiliate';
						$page['menus']=$this->template->menu('guest');
						$this->load->view('template/header', $page);
			
						$this->load->view('login',$data);
				}	
			} else {
				$data['msg_content']="Password dan/atau Username anda tidak sesuai.";
				$page['title']='Login Affiliate';
				$page['menus']=$this->template->menu('guest');
				$this->load->view('template/header', $page);
			
				$this->load->view('login',$data);
		}
		}else{
				$data['msg_content']="Password dan/atau Username anda tidak sesuai.";
				$page['title']='Login Affiliate';
				$page['menus']=$this->template->menu('guest');
				$this->load->view('template/header', $page);
				$this->load->view('login',$data);
			

		}
		//echo "<h4>return adalah </h4>".$this->logindb->cek_login($username, $pwd);
	}

	function cek_user($id=null){
		if ($id==null){
			redirect('login');
		} else{
		$userdata=$this->logindb->get_userdata($id);
			if($userdata!=null){
				$data=array(
						'login'=>TRUE,
						'username'=>$userdata->username,
						'rolename'=>$userdata->rolename,
						'email'=>$userdata->email,
						'userid'=>$id
				);
				return $data;
			}
		}
	}
}
?>