<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>Hello World!</h1>
  <p>Resize the browser window to see the effect.</p>
  <div class="row">
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
    <div class="col-sm-6" style="background-color:lavenderblush;">.col-sm-6</div>
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
  </div>
  <div class="row">
      <?php
       foreach($record->result_array() AS $key){
       ?>
       <div class="col-sm-3" style="background-color:lavender;"><?php echo $key['ipaddress'];?></div>
       <div class="col-sm-6" style="background-color:lavenderblush;">.col-sm-6</div>
       <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
      <?php echo br();
      }

      ?>
  </div>
</div>

</body>
</html>
