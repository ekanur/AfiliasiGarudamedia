<?php
	if(!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Pengaturan_model extends CI_Model{
		function __construct(){
			parent::__construct();
	}

	function get_all_bank(){
		$query=$this->db->query("SELECT * FROM aff_bank where isactive=1");
		return $query->result();
	}

	function get_rekening_by_id($id){
		$query=$this->db->query("SELECT
aff_users.userid AS userid,
aff_users.username AS username,
aff_bank.namabank AS namabank,
aff_bank.idbank AS idbank,
aff_bank_account.account AS account,
aff_bank_account.idbankacc
from ((aff_bank join aff_bank_account on((aff_bank.idbank = aff_bank_account.idbank))) 
join aff_users on((aff_users.userid = aff_bank_account.userid)))
 where (aff_users.userid = '$id')");

		return $query->result();
	}

	function update_data_bank($data,$id){
		$result=null;
			$this->db->where('userid',$id);
			$this->db->update('aff_bank_account', $data);

				if ($this->db->affected_rows()>0) {
					$result=$this->db->affected_rows();
				}

				return $result;
	}

	public function insert_data_bank($data){
		return $this->db->insert('aff_bank_account',$data);
	}

	// function cek_akun_bank($userid)
	// {
	// 	$result=null;
	// 	$query=$this->db->query("select idbank from bank_account where userid=".$userid." and isactive=1");
	// 	if ($query!=null) {
	// 		$result=$query->result();
	// 	}

	// 	return $result;
	// }

	function get_userinfo($userid)
	{
		$result=null;
		$query=$this->db->query("select * from aff_users where userid=".$userid." ");

		if ($query->result()!=null) {
			$result=$query->result();
		}

		return $result;
	}

	function update_info($data,$userid)
	{
		$result=null;
			$this->db->where('userid',$userid);
			$this->db->update('aff_users', $data);

				if ($this->db->affected_rows()>0) {
					$result=$this->db->affected_rows();
				}

				return $result;

	}

	function insert_bank_account($data)
	{
			$result=null;
			$this->db->insert('aff_bank_account',$data);
			if ($this->db->affected_rows()>0) {
				$result=$this->db->affected_rows();
			}

			return $result;
	}
}

