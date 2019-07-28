<div>
	<a href="#" id="showme">Show Me</a>
	<a href="#" id="hideme">Hide Me</a>
		<div id="teks">
			Ini teks yang akan muncul, jika "Show Me" diklik.
			<br/>
			Teks iini akan disembunyikan jika teks "Hide Me" dkkk
		</div>
	</div>

<script>
	$(document).ready(function(){
		$("#teks").hide();
		$("#showme").click(function(){
			$("#teks").show("show");

		});
		$("#hideme").click(function(){
			$("#teks").hide("show");
		});
	});
</script>