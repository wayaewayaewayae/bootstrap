
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="row" style="padding:20px;">
       <div class="col-md-12">
            <div class="card">
    
            <div class="card-header"><center>FORM 2</center></div>
            <div class="card-body">
            </head>
            <body>
            <?php
              if (isset($_POST['proses'])) {
             $jml_form = $_POST['ni'];
              $Judul = $_POST['jdb'];
              $KodeBuku = $_POST['kode'];
              $Pengarang = $_POST['prng'];
              $JenisBuku = $_POST['jns'];
              for ($a=1; $a <= $jml_form; $a++) {
              ?>
                <form action="Proform2.php" method="post">
                    <div class="form-group">
                        <label for="">Judul Buku :</label>
                        <input type="text" name="jdb[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for"">Kode Buku :</label>
                    <input type="number" name="kode[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang :</label>
                        <input type="text" name="prng[]" class="form-control" required>
                    </div>
                    <div class="form-group">
                    Jenis Buku :<br><select name = "jns">
                    <option value="Novel">Novel</option> 
                    <option  value="Fiksi">Fiksi</option>
                    <option  value="Horror">Horror</option>
                    <option  value="Cergam">Cergam</option>
                    <option  value="Komik">Komik</option>
                    </input></select><br><br>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Buku :</label>
                        <input type="number" name="hr" class="form-control" required>
                    </div>
                    <hr><b></b></hr>
                    
              <?php }
              ?>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
              <?php } ?>