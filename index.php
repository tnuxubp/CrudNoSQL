<html>
<head>
<title> Tampil Data Mahasiswa</title>
<?php include "css.php" ; ?>
</head>
<body>

<?php
	include('konek.php');
	$host2   = $_ENV["OPENSHIFT_MYSQL_DB_HOST"];
    $user2   = $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"];
    $passwd2 = $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"];
    $database2   = $_ENV["OPENSHIFT_GEAR_NAME"];
	 
	$koneksi=mysqli_connect($host2,$user2,$passwd2);
	mysqli_select_db($koneksi,$database2);
?>

<?php
	$query = mysqli_query($koneksi, "SELECT * FROM kampus order by id DESC LIMIT 1");
		while($row = mysqli_fetch_array($query)){
							echo "<center><tr>
									<td><h3>".$row['nama']." / ".$row['nama_kampus']."</h3></td>
								</tr></center>";
							}
?>
<center><a href="tambah.php">Tambah Data</a><br/></center>
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Nim</th>
		<th>Aksi</th>
	</tr>	
<?php
    $listartikel= $db->artikel->find();
	$no=1;
	foreach($listartikel as $id=>$b){
		
				echo	"<tr>
							<td>".$no++."</td>
							<td>".$b['nama']."</td>
							<td>".$b['alamat']."</td>
							<td>".$b['nim']."</td>
							<td><a href='edit.php?id=".$id."'><i class='fa fa-external-link'></i> Edit</a> | "."<a href='delete.php?id=".$id."'><i class='fa fa-trash'></i> Delete</a></td>
						</tr>";
	}
?>
</table>
</body>
</html>