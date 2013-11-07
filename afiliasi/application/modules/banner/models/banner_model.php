<?php
	if(!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Banner_model extends CI_Model{
		function __construct(){
			parent::__construct();
	}

	function get_all_banner(){
		$query=$this->db->query("SELECT * FROM aff_banner");
		return $query->result();
	}

	function get_img_banner(){
		$query=$this->db->query("SELECT * FROM aff_banner WHERE tipe='image'");
		return $query->result();
	}

	function get_txt_banner(){
		$query=$this->db->query("SELECT * FROM aff_banner WHERE tipe='text'");
		return $query->result();
	}
	
}

