<?php 

include 'config.php';

if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nama = $_POST['nama_mahasiswa'];
    $matkul = $_POST['nama_matkul'];
    
    // buat query
    $sql = "INSERT INTO mahasiswa (nama, nama_matkul) VALUE ('$nama', '$matkul')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: halaman_mahasiswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} 
?>
