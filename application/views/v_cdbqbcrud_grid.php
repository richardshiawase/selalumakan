
<body>
	<?php$valfilter=array(
		"name"=>"valfilter",
		"id"=>"valfilter",
		"value="=>"$valfilter",
		"maxlength"=>"50",
		"maxsize"=>"20");
	$options=array(
		"noteman"=>"Nomor Teman",
		"namateman"=>"Nama Teman");

	echo heading($judulapp,2);
	echo form_open();
	echo form_label("Filter/Cari : ");
	echo form_dropdown("namafield", $options,$namafield);
	echo form_input($valfilter);
	echo form_submit("btnFilter","Filter");
	echo form_close();
	if(!empty($hslquery)){
		?>
		<div class="row">
			<table style="margin:auto;width:80%;border:solid 1px;">
				<tr>
					<th style="border-bottom:solid 1px;">No</th>
					<th style="border-bottom:solid 1px;">Nama Temans</th>
					<th style="border-bottom:solid 1px;">No Telp</th>
					<th style="border-bottom:solid 1px;">Emasil</th>
					<th style="border-bottom:solid 1px;">&nbsp;</th>
										<th style="border-bottom:solid 1px;">&nbsp;</th>
									</tr>

		<?
		foreach($hslquery->result_array() as $row) {
			echo "<tr>";
			echo "<td>{$row["noteman"]}</td>";
			echo "<td>{$row["namateman"]}</td>";
			echo "<td>{$row["notelp"]}</td>";
			echo "<td>{$row["email"]}</td>";
			echo "<td>".br().form_open($scriptupdate).form_hidden("noteman",$row["noteman"]).form_submit("btnUpdate","Update").form_close()."</td>";
			echo "<td>".br().form_open($scriptdelete).form_hidden("noteman",$row["noteman"]).form_submit("btnDelete","Delete").form_close()."</td>";
			echo "</tr>";
		}
		?>
	</table>
	<br>
</div>
<?
}
$this->load->view('v_cdbqbcrud_menu');
?>

</div>
</body>
	