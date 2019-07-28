<?php
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("No teman: ");
	if($aksi!="add"){
		echo form_hidden($noteman['name'],$noteman['value']).$noteman['value']; 
	} else {
		echo form_input($noteman);
	}
	echo br();
	echo form_label("Nama teman : ");
	echo form_input($namateman);
	echo br();
	echo form_label("No Telp: ");
	echo form_input($notelp);
	echo br();
	echo form_label("Email : ");
	echo form_input($email);
	echo br();
	echo form_submit("btnSimpan","$aksi");
	echo form_close();
?>


<script>
	$(document).ready(function(){
		$("form").submit(function(){
			console.log("submit diklik");
		vardata=$('form').serialize();
		$.ajax({
			url: '<?=site_url()."/".$scriptaksi;?>',
			type: 'POST',
			data: vardata,
			success: function(data){
				alert(data);
			}
		});
		alert("Submitted!"+vardata);
		return false;
	});
});
	</script>