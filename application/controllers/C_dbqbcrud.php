<?php
class C_dbqbcrud extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbqbcrud","tabel");
	}
	function showallrecord(){
		$data["hslquery"] = $this->tabel->getallrecord();
		$data["judulapp"] = "Show All With Query Builder";
		$this->load->view("v_cdbqbcrud_allrec",$data);
	}

	function showrecto($aksi="update") {
		$data["noteman"]=$this->input->post("")
	}

	function showgrid(){
		$data=$this->tabel->readfilter();
		$data["hslquery"] = $this->tabel->getfilteredrec($data);
		$data["judulapp"] = "Filter Data Dan Grid!";
		$data["scriptaksi"]="c_dbqbcrud/showgrid";
		$data["scriptupdate"] = "c_dbqbcrud/showrecto/update";
		$data["scriptdelete"]="c_dbqbcrud/showrecto/delete";
		$this->load->view("v_cdbqbcrud_grid",$data);
	}
}


?>