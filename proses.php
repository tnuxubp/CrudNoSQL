<?php
    include('konek.php');
	$nama=$_POST["nama"];
	$alamat=$_POST["alamat"];
	$nim=$_POST["nim"];
	$id=$_POST["id"];
	$nama_kampus=$_POST["nama_kampus"];
	$document = array( "nama" => "$nama","alamat" => "$alamat", "nim" => "$nim" );
	$collection->insert($document);
	
	$host2   = $_ENV["OPENSHIFT_MYSQL_DB_HOST"];
    $user2   = $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"];
    $passwd2 = $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"];
    $database2   = $_ENV["OPENSHIFT_GEAR_NAME"];
	 
	$koneksi=mysqli_connect($host2,$user2,$passwd2);
	mysqli_select_db($koneksi,$database2);
	 
	$sql="INSERT INTO kampus (id,nama, nama_kampus) VALUES('$id', '$nama', '$nama_kampus')";
	 
	 if (!mysqli_query($koneksi,$sql)){
	  die('Error COK COK: ' . mysqli_error($koneksi));
	 }else{
	header('location:index.php') ;
	}
?>