<?php 
$koneksi = mysqli_connect("localhost","root","","web_krs");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>