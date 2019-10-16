<?php 
// menambah / memanggil file database.php
//menghungkan database
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Santia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <center>Formulir</center>
    <a href="/formulir/create.php">Isi Formulir</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>umur</th>
        </tr>
        <?php
            $siswa = new Siswa();
            $no = 1;
            foreach($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="retrun confirm('Apakah Anda yakin mau menhapus Data Ini ?');">Delete</a></td>
        </tr>
        <?php }?>
    </table>
    <script src="/assets/js/jequary.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>