<?php
class M_dbqcrud extends CI_Model {
	function __construct() {
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysqli";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";
		$this->load->database($config);
	}
	function tambah($adata) {
		$daftarfield = "(";
		$daftarnilai= "(";
		$i=0;
		foreach($adata as $field=>$value) {
			if($i>0) {
				$daftarfield.=",";
				$daftarnilai.=",";
			}
			$daftarfield.=$field;
			$daftarnilai.="'$value'";
			$i++;
		}
		$daftarfield.=")";
		$daftarnilai.=")";
		$sqlstr="insert into tblteman ".$daftarfield." values ".$daftarnilai;
		$this->db->query($sqlstr);
		return (($this->db->affected_rows()>0) ? TRUE: FALSE);
	}

	function defform() {
		//definisi elemen form untuk data teman
		$noteman = array (
							"name" => "noteman",
							"id"=>"noteman",
							"maxlength"=>"4",
							"size"=>"3",
							"value"=>$this->input->post("noteman"),
							"style"=>"background:red;"
						);
	
	$namateman = array (
						"name"=>"namateman",
						"id"=>"namateman",
						"maxlength"=>"4",
						"size"=>"35",
						"value"=>$this->input->post("namateman"),
						"style"=>"background:cyan;"
	);
	$notelp = array (
						"name"=>"notelp",
						"id"=>"notelp",
						"maxlength"=>"15",
						"size"=>"13",
						"value"=>$this->input->post("notelp"),
						"style"=>"background:cyan;"
	);
	$email = array (
						"name"=>"email",
						"id"=>"email",
						"maxlength"=>"35",
						"size"=>"25",
						"value"=>$this->input->post("email"),
						"style"=>"background:cyan;"
					);

	//end definisi
	$atblteman=array();
	$atblteman["noteman"]=$noteman;
	$atblteman["namateman"] = $namateman;
	$atblteman["notelp"] = $notelp;
	$atblteman["email"]=$email;
	return $atblteman;
	}

	function readinput(){
		$atblteman=array();
		$atblteman["noteman"] = $this->input->post("noteman");
		$atblteman["namateman"] = $this->input->post("namateman");
		$atblteman["notelp"] = $this->input->post("notelp");
		$atblteman["email"] = $this->input->post("email");
		return $atblteman;
	}

	

}
?>