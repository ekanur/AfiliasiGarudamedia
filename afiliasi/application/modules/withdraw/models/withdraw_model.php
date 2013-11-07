<?php
	class Withdraw_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}


		function insert_new_withdraw($data)
		{
			$result=null;
			$this->db->insert('aff_withdraw',$data);

			if ($this->db->affected_rows()>0) {
				$result=$this->db->affected_rows();
			}

			return $result;
		}

		function last_withdraw($userid){
			$result=null;
			$query=$this->db->query("SELECT
aff_bank.idbank,
aff_bank.namabank,
aff_bank_account.account,
aff_withdraw.total_withdraw,
aff_withdraw.isactive,
aff_withdraw.timestamp,
aff_withdraw.id_withdraw
FROM aff_withdraw
INNER JOIN aff_bank_account ON aff_bank_account.idbankacc = aff_withdraw.id_bankacc
INNER JOIN aff_bank ON aff_bank.idbank = aff_bank_account.idbank
where aff_withdraw.userid = ".$userid." and aff_withdraw.isactive=0 order by aff_withdraw.id_withdraw desc  ");

			if ($query!=null) {
				$result=$query->result();
			}

			return $result;
		}

		function withdraw_per_user($userid)
		{
			$result=null;
			$query=$this->db->query("SELECT
aff_bank.idbank,
aff_bank.namabank,
aff_bank_account.account,
aff_withdraw.total_withdraw,
aff_withdraw.isactive,
aff_withdraw.timestamp,
aff_withdraw.id_withdraw
FROM aff_withdraw
INNER JOIN aff_bank_account ON aff_bank_account.idbankacc = aff_withdraw.id_bankacc
INNER JOIN aff_bank ON aff_bank.idbank = aff_bank_account.idbank
where aff_withdraw.userid=".$userid." and aff_withdraw.isactive=1
order by aff_withdraw.id_withdraw desc");
			
			if ($query!=null) {
				$result=$query->result();
			}

			return $result;
		}

		function view_total_komisi($userid,$isactive)
		{
			$result=null;
			$query=$this->db->query("select sum(total_withdraw) as sum from aff_withdraw where userid=".$userid." and isactive=".$isactive." ");
			
			if ($query!=null) {

				$result=$query->result();
			}

			return $result;
		}
		
		}

?>