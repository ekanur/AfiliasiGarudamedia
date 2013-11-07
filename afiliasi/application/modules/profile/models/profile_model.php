<?php


if(!defined('BASEPATH'))
		exit('No direct script access allowed');


class Profile_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		
	}

function get_data($userid)
{
	$data=$this->db->query("select * from aff_users where userid=".$userid."");

	if($data!=null)
		{ return $data; }
	else {return null;}

}

function getpwd($userid){
      $query=$this->db->query("select password from aff_users where userid='".$userid."'");
      if ($query==null) {
            return null;
      }
      else
      {
            return $query;           
      }

}

function edit_pass($pass, $userid){
      $result=$this->db->where('userid', $userid)
                  ->set('password', $pass)
                  ->update('aff_users');
            if ($result==null) {
                  return null;
            }
            else{
                  return $result;
            }
 }

      function cek_password_lama($password,$email){
            $query=$this->db->query("SELECT * FROM aff_users WHERE password='$password' and email='$email' ");
            return $query->result();
      }

      function ubah_password($email,$data){
            $this->db->where('aff_users.email',$email);
            return $this->db->update('aff_users', $data);
      }



}

/*EOF blog.php*/
/*Location: ./application/controllers/blog.php*/
