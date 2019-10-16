<?php
    class Database {
        // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
        public $host = "localhost", $user = "root", $pass = 123, $db="Biodata";
        Public $koneksi;
        public function __construct()
        {
            $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if($this->koneksi)
            {
                //echo "berhasil";
            }else{
            return "Koneksi Database Gagal";
        }
    }
}

    class formulir extends Database{
        //Menampilkan Semua Data
        public function index()
        {
        
            $datasiswa = mysqli_query($this->koneksi,"select * from siswa");
            // var_dump($datasiswa);
            return $datasiswa;
    }
     // Menambah Data
     public function create( $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur)
     {
         
         mysqli_query($this->koneksi,"insert into siswa values(','$nama', '$alamat', '$tgl_lahir', '$jenis_kelamin', $agama', '$umur
         )");
     }
     // Menampilkan Data Berdasarkan ID
     public function show($id)
     {
         $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
         return $datasiswa;
     }
         // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update siswa set nama='$nama', alamat='$alamat', tanggal lahir='$tgl_lahir', jenis kelamin='$jenis_kelamin', agama='$agama', 'umur='$umur where id='$id'");
    }
       // menghapus data berdasarkan id
       public function delete($id)
       {
           mysqli_query($this->koneksi,"delete from siswa where id='$id'");
       }
   }
   // koneksi DB
   $db = new Database();
   ?>

