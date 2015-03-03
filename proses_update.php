<?php
	include "konek.php";
    if(!empty($_POST)){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $nim=$_POST['nim'];
        $collection->update(array( '_id' => new MongoId($id)),array( '$set' => array( 'nama' => $nama,'alamat'=>$alamat, 'nim'=>$nim)));
        header('location:index.php');
    }
     
?>