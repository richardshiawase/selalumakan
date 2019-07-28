<?php
class C_undian5 extends CI_Controller {
	var $list=array();
	function index(){
		$this->load->helper("html");
		$this->load->helper("url");
		$this->load->library("javascript");
		$this->load->library('javascript/jquery');
		$this->load->model("m_undiancrud5");
		$data["old_nomor_undian"] = $this->m_undiancrud5->hasil_pencarian;
		$data["messageQuotaHabis"] = $this->m_undiancrud5->messageQuotaHabis;
		$data["messageRecorded"] = $this->m_undiancrud5->messageRecorded;
		$data["nomorUndian"] = $this->m_undiancrud5->getUndian();
		// echo $data["nomorUndian"];
		$this->load->view("vsong",$data);
		// $this->load->view("eter2.php");
		// echo $data["messageQuotaHabis"];
		// echo $data['messageRecorded'];
	}
}


?>