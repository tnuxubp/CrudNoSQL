<html>
<head>
<title>Input Data Mahasiswa</title>
<?php include "css.php" ; ?>
</head>
<body>
   
	<div class="container">
		<div class="row">
			<div class="row">
			<h1>Tambah Siswa</h1>
			</div>
			<form class="form-horizontal" action="proses.php" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Alamat" required>
				</div>
				<div class="form-group">
					<input type="number" class="form-control" id="Alamat" name="nim" placeholder="nim" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="nama_kampus" name="nama_kampus" placeholder="nama kampus" required>
				</div>
					<button type="submit" class="btn btn-default">SIMPAN</button>
				
			</form>
		</div>
	</div>
</body>
</html>
