<?php
if (isset($_POST['simpan'])) {
    $jml_form = $_POST['jml'];
    $nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $JenisKelamin = $_POST['jk'];
    $AsalSekolah = $_POST['asal'];
    $TanggalPembelian = $_POST['tgl'];
    $JumlahBuku = $_POST['ni'];
    $Judul = $_POST['jdb'];
    $KodeBuku = $_POST['kode'];
    $Pengarang = $_POST['prng'];
    $JenisBuku = $_POST['jns'];

    foreach ($nama as $data => $val){
        echo "Nama : ".$nama[$data];
        "Alamat : ".$Alamat[$data];
        "Jenis Kelamin : ".$JenisKelamin[$data];
        "Asal Sekolah : ".$AsalSekolah[$data];
        "Tanggal Pembelian : ".$TanggalPembelian[$data];
        "Jumlah Buku : ".$JumlahBuku[$data];
        "judul Buku : " . $Judul[$data];
        "Kode Buku : " . $KodeBuku[$data];
        "Pengarang : " .$Pengarang[$data];
        "Jenis Buku : ".$JenisBuku[$data]. "<hr>";

    }
}
?>