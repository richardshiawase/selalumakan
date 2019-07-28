<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

 <h1 style="position: center;">Laundry Bu Susan</h1>
 <p>Transaction App for Laundry</p>
 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
    Tambah
  </button>
   <button type="button" id="btnList" class="btn btn-primary btn-sm">
    Tambah
  </button>
  <br>
  <br>
<div class="row">
  <div class="col-xs-12">
    <table class="table table-striped" id="datateman">
      <thead>
        <tr>
            <th>#</th>
            <th>Transaksi</th>
            <th>Nama</th>
            <th>Status</th>
      </tr>
      </thead>
      <tbody>
        <?php
          foreach($record->result_array() as $key){
           ?><tr>
                <td><?php echo $key['nomor'];?></td>
                <td><?php echo $key['transaksi'];?></td>
                <td><?php echo $key['nama'];?></td>
                <td><?php echo $key['status'];?></td>
           </tr>

           <?php

          }
        ?>
      </tbody>
    </table>
  </div>
</div>
   <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Transaksi</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <form>
              <div class="form-group">
           
            <select class="form-control" id="sel1">
                  <option values="">Jenis Transaksi:</option>
                  <option values="laundry dibawah 5 kg">Laundry dibawah 5 Kg</option>
            </select>
            <br><br>
              <!-- <button type="button" class="btn btn-primary btn-sm">Submit</button> -->
                </div>
            
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm">Submit</button>
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </form>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>
