<?php
	
	if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Tracker extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->helper('date');
			$this->load->model('tracker_model', 'tracker_model', TRUE);
			$this->load->library('session');
		//$this->load->helper('form');
				$this->load->helper('url');
		}

		function index(){
		$datalogin=$this->session->all_userdata();
		if($datalogin['login']===TRUE && $datalogin['rolename']==='member' && isset($datalogin['userid']))
		{
				$datam['show_tracker']=$this->track($this->session->userdata('userid'));
			    $this->load->view('tracker',$datam);
			    

			    } else {
     			redirect('login');
   			}
		}

		function track($userid)
		{
			if ($userid==null) {
				redirect('main');
			}

			$data=$this->tracker_model->get_referal_by_id($userid);
			$result= null;
			// $config_pagination=array(
			// 					"base_url"=>base_url()."main",
			// 					"total_rows"=>50,
			// 					"per_page"=>10,
			// 					"uri_segment"=>3
			// 				);
			// $this->pagination->initialize($config_pagination);
			// echo $this->pagination->create_links();

			if ($data==null) {
				$result.="Link referal anda belum mendapat kunjungan";
			}
			else{
				$i=1;
		      	foreach ($data as $refdata) {
				     $result.="<tr>
					      		<td>".$i."</td>
					      		<td>".$refdata->tanggal."</td>
					      		<td>".$refdata->sumber."</td>
					      		<td>".$refdata->ipaddress."</td>
					      		<td>".$refdata->jenis."</td>
					      		<td>".$refdata->browser."</td>
					      		<td>".$refdata->platform."</td>
					      	</tr>";
				      $i++; } 
			}

			return $result;

		}
		function id($userid)
		{
			if ($userid==null) {
				redirect('home');
			}
			
			
			if ($this->agent->is_referral()==FALSE){
    			$this->agent->is_mobile()?$udata['jenis']='Mobile':$udata['jenis']='Desktop';
				$udata['sumber']   =$this->agent->referrer();
				$udata['browser']  =$this->agent->browser();
				$udata['platform'] =$this->agent->platform();
				$udata['ipaddress']=$this->input->ip_address();
				$udata['tanggal']  =date('Y-m-d H:i:s');
				$udata['userid']=	$userid;
				$res = $this->tracker_model->insert_ref_to_db($udata);
				$setcookie=$this->cookie($userid);
				
				
				 //echo "<meta http-equiv='refresh' content='0; URL=http://garudamedia.co.id/produk.php?refid=".$userid."' />";
				//header("location:http://garudamedia.co.id/produk.php?refid=".$userid."");
				redirect("http://garudamedia.co.id/produk.php?refid=".$userid."");
					// var_dump();

				}
			else
			{
			$this->agent->is_mobile()?$udata['jenis']='Mobile':$udata['jenis']='Desktop';
				$udata['sumber']   =$this->agent->referrer();
				$udata['browser']  =$this->agent->browser();
				$udata['platform'] =$this->agent->platform();
				$udata['ipaddress']=$this->input->ip_address();
				$udata['tanggal']  =date('Y-m-d H:i:s');
				$udata['userid']=	$userid;
				$res = $this->tracker_model->insert_ref_to_db($udata);
				$setcookie=$this->cookie($userid);
				
				
				 //echo "<meta http-equiv='refresh' content='0; URL=http://garudamedia.co.id/produk.php?refid=".$userid."' />";
				//header("location:http://garudamedia.co.id/produk.php?refid=".$userid."");
				redirect("http://garudamedia.co.id/produk.php?refid=".$userid."");
			}
		}

		function cookie($userid)
		{
			if ($userid==null) {
				redirect('home');
			}
			else{
				$data=array(
						'name'=>'refid',
						'value'=>$userid,
						'expire'=> 3600*24*180
					);
				$this->input->set_cookie($data);
				$this->session->set_userdata($data);
			}
		}


	}







