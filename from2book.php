<!-- <!DOCTYPE html> -->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>From 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <p>From 2</p>
</center>
<fieldset>
    <legend>Pembelian Buku</legend>
    <from action ="" method="get">
        <label for"">Masukan Jumlah Buku :</label>
        <input type="number" name="jml">
        <br>
        <input type="submit" name="submit" value="simpan">
        <hr>
        </from>
        <?php
        if (isset($_GET['submit'])){
            $jml_from = $_GET['jml'];
            for ($a = 1; $a<= $jml_from; $a++){

                ?>
                <From action ="Profrom2.php"method="POST">
                    <label for="">Judul :</label>
                    <input type="text" name="judul[]"required>
                    <label for"">Kode Buku :</label>
                    <input type="number" name="kode[]"required>
                    <label for="">Pengarang :</label>
                    <input type="text" name="pengarang[]"required>
                    <label for="">Jenis Buku :</label>
                    <input type="text" name="jns[]"required>
                    <option value="Novel">Novel</option> 
                    <option  value="Fiksi">Fiksi</option>
                    <option  value="Horror">Horror</option>
                    <option  value="Cergam">Cergam</option>
                    <option  value="Komik">Komik</option>
                    </select><br><br>

                    <br>
                    <br>

            <?php } ?>
            <input  type="submit" name="sbm" value="simpan">
            <input  type="reset" value="reset">
            </From>
            <?php } ?>
        </fleidset>
</body>
</html>