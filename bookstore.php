
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
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
            <center>
            <h1 style ="color : green">Assalaam Book Store </h1>  
            </center>
            <div class="card-header"><center>PEMBELIAN BUKU</center></div>
            <div class="card-body">
                <form action="form2book.php" method="post">
                    <div class="form-group">
                        <label for="">Nama :</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat :</label>
                        <textarea name="alamat" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin :</label><br>
                    <input type="radio" name="jk" value="LAKI-LAKI">
                        LAKI-LAKI<br></input>
                   <input type="radio" name="jk" value="PEREMPUAN">
                        PEREMPUAN<br><br></input>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Sekolah :</label>
                        <input type="text" name="asal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pembelian :</label>
                        <br><input type="date" name="tgl"><br><br>
                        <div class="form-group">
                        <label for="">Jumlah Buku :</label>
                        <input type="number" name="ni" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                        <button type="Reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
