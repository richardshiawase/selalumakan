<?php
	$this->load->view("v_cjquery_head",$judulapp);
	$this->load->view($dview."_event",$judulapp);
	$this->load->view("v_cjquery_judul");
	$this->load->view("v_cjquery_menu");
	$this->load->view($dview,$judulapp);
	$this->load->view("v_cjquery_footer");
?>