<div class="container">
<div class="col-xs-12">
<?php if (!empty($hslquery)){ ?>

    <table class="table table-striped " id="datateman">
    	 <thead>
        <tr>
            <th scope="col">noteman</th>
            <th scope="col">namateman</th>
            <th scope="col">notelp</th>
            <th scope="col">email</th>
      </tr>
      </thead>
      <tbody>
        <?php
          foreach($hslquery->result_array() as $row){
           		?>
           		<tr>
					<td><?php echo $row["noteman"] ?></td>
					<td><?php echo $row["namateman"] ?></td>
				 	<td><?php echo $row["notelp"] ?></td>
					<td><?php echo $row["email"] ?></td>
				</tr> 
				
			<?php	
          }
        ?>
      </tbody>
    </table>
	<?php
}
?>
</div>
</div>