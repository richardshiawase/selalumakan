<?php
class C_randomUndian extends CI_Controller {
	function index(){
		$this->load->helper("html");
		$this->load->helper("url");
		$this->load->model("m_randomUndian");
		$data["nomor_undian"] = $this->m_randomUndian->getUndian();
		echo $data["nomor_undian"];
	}
}


?>