<?php
	class Member_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function get_members(){
			//$query=$this->db->query("SELECT * FROM users ORDER BY id ASC");
			$query=$this->db->get('users');
			return $query->result();
		}

		function get_member_by_id($id){
			$query=$this->db->query("SELECT * FROM users WHERE id='$id'");
			//$query=$this->db->select(*)->where('userid',$id);
			return $query->result();
		}
		

		function insert_users_to_db($data){
			return $this->db->insert('users',$data);
		}

		public function update_info($data,$id){
			$this->db->where('users.userid',$id);
			return $this->db->update('users', $data);
		}

		public function delete_a_user($id){
			$this->db->where('users.userid',$id);
			return $this->db->delete('users');
		}
	}
