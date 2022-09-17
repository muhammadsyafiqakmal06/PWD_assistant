<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dosen</title>
</head>

<body>

    <?php
    session_start();
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }
    ?>

    <h1>Halaman Dosen</h1>

    <table border="1">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
		</tr>
		<?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nama_matkul = 'Pemrograman Web Dinamis' ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama_mahasiswa']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br><br>
    <a href="logout.php">LOGOUT</a>
</body>

</html>