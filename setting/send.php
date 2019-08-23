<?php

include("database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
      
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nokk = $_POST['nokk'];
        $jenislembaga = $_POST['jenislembaga'];
        $kabkota = $_POST['kabkota'];
        $problem = $_POST['problem'];
        $hp = $_POST['hp'];
    
       
        
       
 $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM datadiri WHERE nik='$nik'"));
 if ($cek > 0){
    echo "<script>window.alert(' Keluhan Anda Sudah terdaftar')
    window.location='../laporan.php'</script>";
    }else {
        // buat query

        // $sql = "INSERT INTO `member`(`nama_lengkap`, `alamat`,`username`, `password`, `asal_sekolah`, `hp`, `tglahir`, `agama`, `email`) 
        // VALUES ('$nama_lengkap','$alamat','$username','$password','$asal_sekolah','$hp','$tglahir','$agama','$email')";
        // $query = mysqli_query($link, $sql);


       $sql = "INSERT INTO `datadiri`(`id`,`nik`, `nama_lengkap`,`nokk`, `jenislembaga`, `kabkota`,`problem`, `hp`, `status`) VALUES (NULL,'$nik', '$nama_lengkap', '$nokk','$jenislembaga','$kabkota','$problem','$hp','Proses')";
 $query = mysqli_query($koneksi, $sql);





        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Mendaftar!");
                            window.location = "../index.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../register.php"
                            </script>';
                    }
    }
}
?>