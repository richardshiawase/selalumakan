<?php

class M_bootstrap extends CI_Model {

		function __construct() {
			parent::__construct();
			$config['hostname'] = "localhost";
			$config['dbdriver'] = "mysqli";
			$config['database'] = "laundry";
			$config['username'] = "root";
			$config['password'] = "";
			$this->load->database($config);
		}

		function getDataBs(){
			$sqlstr="SELECT * FROM laundry";
			$result = $this->db->query($sqlstr);
			return $result;
		}
}


?>