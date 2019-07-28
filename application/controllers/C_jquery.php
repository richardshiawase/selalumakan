<?php
class C_jquery extends CI_Controller {
	function simple(){
		$this->load->helper('html');
		$this->load->helper('url');
		$data=array();
		$data["judulapp"] = "Demo Simple jquery";
		$data["dview"]="v_cjquery_simple";
		$this->load->view("v_cjquery_layout",$data);

	}
	function simpleajax(){
		$this->load->helper('html');
		$this->load->helper('url');
		$data=array();
		$data["judulapp"]="Demo Simple AJAX Dengan JQUERY";
		$data["dview"]="v_cjquery_simpleajax";
		$this->load->view("v_cjquery_layout",$data);
	}

	function crud(){
		$data=array();
		$this->load->helper(array("html","form","url","text"));
		$data["judulapp"] = "CRUD And jQuery";
		$data["dview"] = "v_cjquery_crud";
		$this->load->view("v_cjquery_layout",$data);
	}

	function crudadd(){
		// $this->load->helper(array("html","form","url","text"));
		$aksi="add";
		$data=array();
		$this->load->model("m_dbqbcrud","tabel");
		$data = $this->tabel->defform();
		$data["judulapp"] = "$aksi Data";
		$data["aksi"] = "$aksi";
		$data["scriptaksi"] = "c_jquery/$aksi"."data";
		$this->showform($aksi,$data);
	}

	function adddata(){
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbqbcrud","tabel");
		$data["adata"] = $this->tabel->readinput();
		$data["hslquery"] = $this->tabel->addrec($data["adata"]);
		echo ($data["hslquery"]) ? "Berhasil ditambahkan!": "Gagal ditambahkan!";
	}

	function showform($aksi="add",$data=array()){
		$this->load->helper(array("html","form","url","text"));
		$viewform="v_cjquery_form";
		$this->load->view($viewform,$data);
	}

	function crudbrowse(){
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbqbcrud","tabel");
		$data=array();
		$data["hslquery"]=$this->tabel->getallrecord();
		$data["judulapp"]="List of Data Teman!";
		$data["scriptaksi"]="c_dbqbcrud/showgrid";
		$data["scriptupdate"] = "c_dbqbcrud/showrecto/update";
		$data["scriptdelete"] = "c_dbqbcrud/showrecto/delete";
		$data["dview"] = "v_cjquery_grid";
		$this->load->view($data["dview"],$data);
	}

	function simpleload(){
		// echo "Halo, cebong mana faham!!!";
		$this->load->helper('html');
		$this->load->helper('url');
		echo "Hai.. ini dari ".current_url();

	}

	function ajaxajax(){
		$this->load->helper('html');
		$this->load->helper('url');
		echo "Hai.. ini dari ".current_url();
	}
	function index(){
		$this->load->helper('html');
		$this->load->helper('url');
		$data=array();
		$data["judulapp"] = "Demo Simple jquery";
		$data["dview"]="v_cjquery_simple";
		$this->load->view("v_cjquery_layout",$data);
	}
}


?>