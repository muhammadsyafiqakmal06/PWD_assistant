<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tata Usaha</title>
</head>

<body>

    <?php
    session_start();
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }
    ?>

    <h1>Halaman TU</h1>

    <table border="1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>NIM</th>
            <th>KODE MATKUL</th>
            
		</tr>
		<?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT dosen.nip, mahasiswa.nim, matkul.kode_matkul FROM dosen INNER JOIN tata_usaha ON dosen.nip = tata_usaha.nip INNER JOIN mahasiswa ON mahasiswa.nim = tata_usaha.nim INNER JOIN matkul ON matkul.kode_matkul = tata_usaha.kode_matkul");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['kode_matkul']; ?></td>

			</tr>
			<?php 
		}
		?>
	</table>

    <br><br>
    <a href="logout.php">LOGOUT</a>
</body>

</html>