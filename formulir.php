<?php
session_start();
if (isset($_SESSION['login'])) {

    ?>
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
    <title>Belajar Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Santia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
    <div class="row" style="padding:20px;">
       <div class="col-md-12">
            <div class="card">
            <div class="card-header">Formulir</div>
            <div class="card-body">
                <form action="" method="post">
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
                        <label for="">Nilai B.Indonesia :</label>
                        <input type="number" name="ni" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Matematika :</label>
                        <input type="number" name="nb" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Ipa :</label>
                        <input type="number" name="np" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai B.Inggris :</label>
                        <input type="number" name="nr" class="form-control" required>
                    </div>
        
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <button type="Reset" class="btn btn-warning">Reset</button>
                        <button type="logout"<a hreaf="formulir.php" class="btn btn-primary">Logout</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $a = $_POST['nama'];
                    $b = $_POST['alamat'];
                    $c = $_POST['jk'];
                    $d = $_POST['asal'];
                    $e = $_POST['ni'];
                    $f = $_POST['nb'];
                    $g = $_POST['np'];
                    $h = $_POST['nr'];
                    $rt = ($e+$f+$g+$h)/4;
                    if ($rt > 75) {
                        $ket = "Diterima";
                    }elseif ($rt < 75) {
                        $ket = "Tidak Diterima";
                    }

                }
                ?>
            </div>
            </div>   
        </div><td><?php echo $d; ?></td>
    </div>    
</div>
<div class="row">
                     <div class="col-md-12" style="background:pink">;
                        <center>
                             <h2>HASIL FORMULIR</h2>
                        </center>
                        <div class="table-responsive">
                        <div class="table">
                        <table>
                        <tr>
                            <th><b>Nomor</b></th>
                            <th><b>Nama</b></th>
                            <th><b>Alamat</b></th>
                            <th><b>Jenis Kelamin</b></th>
                            <th><b>Asal Sekolah</b></th>
                            <th><b>B.Indo</b></th>
                            <th><b>MTK</b></th>
                            <th><b>IPA</b></th>
                            <th><b>B.Ing</b></th>
                            <th><b>Rata-Rata</b></th>
                            <th><b>KET</b></th>
                        </tr>
                            <tr>
                            <td>1</td>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $b; ?></td>
                            <td><?php echo $c; ?></td>
                            <td><?php echo $d; ?></td>
                            <td><?php echo $e; ?></td>
                            <td><?php echo $f; ?></td>
                            <td><?php echo $g; ?></td>
                            <td><?php echo $h; ?></td>
                            <td><?php echo $rt; ?></td>
                            <td><?php echo $ket; ?></td>

                        </tr>
                    </table>
                    <table>
                    <tr>
                            <td>2</td>
                            </table>
                    
                    </div>
                </div>
            </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jequary.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>
</html>
<?php
} else {
    // Redirect(pindah halaman)
    // ke loginsession.php
    header("location: loginformulir.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>