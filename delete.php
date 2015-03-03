<?php
    include('konek.php');
    $collection->remove( array( '_id' => new MongoID($_GET['id'])));
	
	
	 
	
	$host2   = $_ENV["OPENSHIFT_MYSQL_DB_HOST"];
    $user2   = $_ENV["OPENSHIFT_MYSQL_DB_USERNAME"];
    $passwd2 = $_ENV["OPENSHIFT_MYSQL_DB_PASSWORD"];
    $database2   = $_ENV["OPENSHIFT_GEAR_NAME"];
	 
	$koneksi=mysqli_connect($host2,$user2,$passwd2);
	mysqli_select_db($koneksi,$database2);
	
    header('location:index.php');
?>