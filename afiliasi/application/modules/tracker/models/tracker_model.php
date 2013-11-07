<?php
	class Tracker_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

	
		function get_referal_by_id($id){
			$query=$this->db->query("SELECT * FROM aff_trackreferal WHERE userid=".$id." order by id desc");
			return $query->result();
		}
		function insert_ref_to_db($data){
			return $this->db->insert('aff_trackreferal',$data);
		}
		
	}	

?>