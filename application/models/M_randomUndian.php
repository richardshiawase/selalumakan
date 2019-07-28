<?php
class M_randomUndian extends CI_Model {

function __construct() {
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "db_undian";
		$config['username'] = "root";
		$config['password'] = "";
		$this->load->database($config);
	}

	function getUndian(){
		$sqlstr="SELECT nomor_undian FROM ip order by rand() limit 1";
		$result = $this->db->query($sqlstr);
		$row = $result->row();
		return $row->nomor_undian;
	}



}


?>