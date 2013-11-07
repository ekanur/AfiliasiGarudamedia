<?php
	class Komisi_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function insert_komisi($data)
		{
			$query=	$this->db->insert('aff_komisi',$data);
		}	

		function show_komisi($userid, $kondisi)	
		{

			$result=null;
			$query=$this->db->query("SELECT
data_pembeli.Nama_Pembeli,
data_pembeli.Alamat,
data_pembeli.Kota,
data_pembeli.tgl_pembelian,
data_pembeli.`status`,
data_pembeli.id
FROM
data_pembeli
INNER JOIN aff_users ON aff_users.userid = data_pembeli.aff_userid
where aff_users.userid=".$userid." and data_pembeli.status=".$kondisi." order by data_pembeli.id desc");

			if ($query!=null) {
				$result=$query->result();
			}

			return $result;
		}

		function show_komisi_premium($userid,$isactive)
		{


			$result=null;
			$query=$this->db->query("select * from aff_komisi_premium where userid=".$userid." AND isactive=".$isactive." order by id_komisi_premium desc ");

			if ($query!=null) {
				$result=$query->result();
			}

			return $result;


		}

		function total_komisi_premium($userid,$isactive)
		{


			$result=null;
			$query=$this->db->query("select sum(total_komisi) tot_premium from aff_komisi_premium where userid=".$userid." AND isactive=".$isactive." ");

			if ($query!=null) {
				foreach ($query->result() as $premium) {
					$result=$premium->tot_premium;
				}
			}

			return $result;
		}		


function update_total_komisi($data_new_komisi, $userid)
		{
			$result=null;
			$this->db->where('userid',$userid);
			$this->db->update('aff_total_komisi', $data_new_komisi);

				if ($this->db->affected_rows()>0) {
					$result=$this->db->affected_rows();
				}

				return $result;	
		}

		function show_detail($userid, $idpembeli)
		{
					$result=null;
			$query=$this->db->query("SELECT
pembelian_produk.Jumlah,
produk.nama_produk,
produk.harga
FROM
pembelian_produk
INNER JOIN produk ON pembelian_produk.Kode = produk.kode_produk
where pembelian_produk.id_pembeli=".$idpembeli." and pembelian_produk.aff_userid=".$userid." ");

			if ($query!=null) {
				$result=$query->result();
			}

			return $result;

		}

		function show_total_komisi($userid, $idpembeli)
		{
			
			$result=null;
			$query=$this->db->query("SELECT
Sum(aff_komisi.total_komisi) AS total
FROM aff_komisi
INNER JOIN data_pembeli ON data_pembeli.id = aff_komisi.idpembeli
WHERE aff_komisi.userid=".$userid." and data_pembeli.id=".$idpembeli." ");

			if ($query!=null) {
				
				foreach ($query->result() as $total) {
					$result=$total->total;
				}
			}

			return $result;

		}

		function show_all_komisi($userid)
		{

			$result=null;
			$query=$this->db->query("select aff_total_komisi.total_komisi AS `total_komisi`,`aff_total_komisi`.`userid` AS `userid`
from aff_total_komisi WHERE aff_total_komisi.userid = ".$userid." ");

			if ($query!=null) {
				
				foreach ($query->result() as $total) {
					$result=$total->total_komisi;
				}
			}

			return $result;

		}

		

		function add_new_total_komisi($data)
		{
			$this->db->insert('aff_total_komisi', $data); 
		}

		function view_income_komisi($userid,$isactive)
		{
			$result=null;
			$query=$this->db->query("SELECT
Sum(aff_komisi.total_komisi) AS total
FROM
aff_komisi
INNER JOIN data_pembeli ON data_pembeli.id = aff_komisi.idpembeli
WHERE aff_komisi.userid=".$userid." and data_pembeli.`status`=".$isactive." ");
			
			if ($query!=null) {

				$result=$query->result();
			}

			return $result;
		}

	}	

?>