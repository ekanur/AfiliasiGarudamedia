<?php
	if(!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Login_model extends CI_Model{
		function __construct(){
			parent::__construct();
			
		}


	function cek_login($username, $password){
	$result=0;
	
		$query=$this->db->query("select * from aff_users where email='".$username."' and password='".md5($password)."'");
		if ($query->num_rows!=0) {$result=1;}
				
				return $query->num_rows;
	}

	function cek_aktif($username){
					$cek_aktif=$this->db->get_where('aff_users', array('email'=>$username,'isactive'=>'1'));
			if ($cek_aktif->num_rows()!=0)	{	return $cek_aktif->result();	}
			
	}

	function get_userdata($id){
		$query=$this->db->query("SELECT
aff_role_user.roleuserid,
aff_role.rolename,
aff_role.roledesc,
aff_role_user.isactive,
aff_users.username,
aff_users.`password`,
aff_users.email
FROM
aff_role
INNER JOIN aff_role_user ON aff_role.roleid = aff_role_user.roleid
INNER JOIN aff_users ON aff_role_user.userid = aff_users.userid
 WHERE aff_users.userid=".$id."");
		if($query->num_rows()>0){ return $query->row(); }
		else {return "null";}
		
	}
}

