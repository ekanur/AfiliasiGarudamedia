<?php
	class Registrasi_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function insert_member_db($data){
			return $this->db->insert('aff_users',$data);
		}

		function insert_role_user($data){
			return $this->db->insert('aff_role_user',$data);
		}

		function get_latest_id(){
			$query=$this->db->query("SELECT * FROM aff_users ORDER BY userid DESC LIMIT 1");
			return $query->result();
		}

		function cek_kode_user($kode){
			$query=$this->db->query("SELECT * FROM aff_users WHERE kode='$kode'");
			if($query->result())
				return TRUE;	
		}

		function aktivasi_user($kode){			
			$data['kode']=$kode;
			$data['isactive']=1;
			$this->db->where('aff_users.kode',$kode);
			return $this->db->update('aff_users', $data);
		}
	}	

?>