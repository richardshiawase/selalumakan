<script>
	$(document).ready(function(){
		$("datateman").load("<?=site_url();?>/c_jquery/crudbrowse");
		$("#crudadd").click(function(){
			console.log("crudadd here");
			$("#datateman").load("<?=site_url();?>/c_jquery/crudadd");

		});

		$("#crudbrowse").click(function(){
			console.log("crudbrowse here");
			$("#datateman").load("<?=site_url();?>/c_jquery/crudbrowse");
		});
	});
</script>