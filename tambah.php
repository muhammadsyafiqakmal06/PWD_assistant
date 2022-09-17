<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="judul">		
		<h1>Tambah Data</h1>
	</div>
 
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_mahasiswa"></td>					
			</tr>	
			<tr>
                <td>Mata Kuliah</td>
                <td> <select name="nama_matkul">
            <?php
            include 'config.php';
            $no = 1;
            $koneksi = mysqli_query($koneksi, "SELECT * FROM matkul");

            while ($data = mysqli_fetch_array($koneksi)) {
            ?>
              <option><?= $data['nama_matkul']?></option>
            <?php } ?>
          </select>	</td>				
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>