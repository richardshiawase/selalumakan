<?php
class C_modal extends CI_Controller {
	function index(){
		$this->load->helper('html');
		
		$this->load->view('v_c_modal');
		// $this->load->view('v_angular.php');
	}
}


?>