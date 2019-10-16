<?php 
include '../database.php';
$siswa = new Siswa();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $umur = date('Y'). $tgl_lahir; 
}
if($aksi == "tambah")
{
    $siswa->create($nama,$alamat,$tgl_lahir,$jenis_kelamin,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $siswa->update($id,$nama,$alamat,$tgl_lahir,$jenis_kelamin,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>