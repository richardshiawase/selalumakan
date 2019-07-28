<?php
class C_bootstrap extends CI_Controller {
	function index(){
		$this->load->helper('html');
		$this->load->model('m_bootstrap');
		$data["record"] = $this->m_bootstrap->getDataBs();
		$this->load->view('v_c_laundry2',$data);
		// $this->load->view('v_angular.php');
	}

	function simpleload(){
		// echo "Halo, cebong mana faham!!!";
		$this->load->helper('html');
		$this->load->helper('url');
		echo "Hai.. ini dari ".current_url();

	}
}


?>