<!doctype html>
<html>
<head><title><?php echo $judulapp; ?></title>
	</head>
	<body>
		<div>
			<?php
				echo heading($judulapp,2);
			?>
			<table style="margin:auto;width:80%;">
				<?php
				echo "No : ".$adata["noteman"];
				echo br();
				echo "Nama : ".$adata["namateman"];
				echo br();
				echo "No Telp : ".$adata["notelp"];
				echo br();
				echo "Email : ".$adata["email"];
				echo "<hr />";



				?></table>
				<?php
					echo br();
					echo $message;
					echo br();
					echo anchor("c_dbqcrud/formadd","Tambah Data Lagi");
					echo br();
					echo anchor("c_dbmteman/baca","Tampilan Seluruh Data");
				?>
			</div>

	</body>
</html>