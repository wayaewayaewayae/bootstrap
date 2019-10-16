<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
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
        foreach($siswa->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $agama = $data['agama'];
            $umur = $data['umur'];

        }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
        
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" required><?php echo $tgl_lahir; ?></td>
                </tr>
                <tr>
                <label for="">Jenis Kelamin :</label><br>
                    <input type="radio" name="jenis_kelamin" value="LAKI-LAKI">
                        LAKI-LAKI<br></input>
                   <input type="radio" name="jenis_kelamin" value="PEREMPUAN">
                        PEREMPUAN<br><br></input>
                </tr>
                <tr>
                AGAMA :<br><select name = "AGAMA">
                <option value="ISLAM">ISLAM</option> 
                <option  value="KRISTEN">KRISTEN</option>
                 </select><br><br>
                </tr>
                <tr>
                    <th>umur</th>
                    <td><input type="number" name="umur" required><?php echo $umur; ?></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
    <script src="/assets/js/jequary.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>