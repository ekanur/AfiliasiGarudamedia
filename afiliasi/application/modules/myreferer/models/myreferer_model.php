<?php


if(!defined('BASEPATH'))
		exit('No direct script access allowed');


class myreferer_model extends CI_Model{
	
	function __construct(){
		parent::__construct();

	}

      function get_referer_data($userid)
      {
            $query=$this->db->query('select `aff_users`.`userid` AS `userid`,`aff_role_user`.`parent` AS `parent`,
                  `aff_role`.`rolename` AS `rolename`,`aff_users`.`isactive` AS `isactive`,
                  `aff_users`.`username` AS `username`,`aff_users`.`firstname` AS `firstname`,`aff_users`.`lastname` AS `lastname`,
                  `aff_users`.`email` AS `email`,`aff_role_user`.`timestamp` AS `timestamp` 
                  from ((`aff_users` join `aff_role_user` on((`aff_users`.`userid` = `aff_role_user`.`userid`)))
                        join `aff_role` on((`aff_role`.`roleid` = `aff_role_user`.`roleid`))) 
                  where ((`aff_role_user`.`parent` = '.$userid.'))');

            if ($query->num_rows()==null) {
                  return null;
            }
            else{
                  return $query;
            }
      }

      function coba()
      {
            echo 'hello world';
      }

}

/*EOF blog.php*/
/*Location: ./application/controllers/blog.php*/
