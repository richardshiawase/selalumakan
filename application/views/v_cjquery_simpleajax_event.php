<script>
	$(document).ready(function(){
		$("#ajaxload").click(function(){
			console.log("<?= base_url();?>/c_jquery/simpleload");
			$("#text").load("<?=site_url();?>/c_jquery/simpleload");
			// $("#text").append(" bla");
		});
		
		$("#ajaxajax").click(function(){
			console.log("<?php base_url();?>/c_jquery/ajaxajax");
			$.ajax({
				url: '<?=site_url();?>/c_jquery/ajaxajax',
				success: function(data) {
					$('#text').html(data);
				}
			});
		});
	});
</script>