<?php 
include '../database.php';
$siswa = new Siswa();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $umur = $_POST['umur']; 
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                    <th>Tanggal Lahir </th>
                    <td><input type="number" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" readonly></td>
                </tr>
                <tr>
                    <th>agama </th>
                    <td><input type="" name="agama" value="<?php echo $agama; ?>" readonly></td>
                </tr>
                <tr>
                    <th>umur </th>
                    <td><input type="" name="umur" value="<?php echo $umur; ?>" readonly></td>
                </tr>
        </table>
    </fieldset>
    <script src="/assets/js/jequary.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>