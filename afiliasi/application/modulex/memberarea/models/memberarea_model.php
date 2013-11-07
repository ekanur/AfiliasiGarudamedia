<?php
	class Memberarea_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function get_member_by_id($id){
			$query=$this->db->query("SELECT * FROM users WHERE userid='$id'");
			return $query->result();
		}

		function get_referal_by_id($id){
			$query=$this->db->query("SELECT * FROM trackreferal WHERE userid='$id'");
			return $query->result();
		}
		
	}	

?>