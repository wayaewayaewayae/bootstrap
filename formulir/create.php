

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
    <fieldset>
        <legend>Formulir</legend>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir </th>
                    <td><input type="date" name="tgl_lahir" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th>
                    <td><input type="radio" name="jenis_kelamin" value="LAKI-LAKI">LAKI-LAKI</input></td>
                    <td><input type="radio" name="jenis_kelamin" value="PEREMPUAN">PEREMPUAN</input></td>
                </tr>
                <tr>
                    <th>Agama </th>
                    <td><select name="agama" class="combox">
                    <option value="ISLAM">ISLAM</option> 
                    <option value="KRISTEN">KRISTEN</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Umur </th>
                    <td><input type="text" name="umur" required></td>
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