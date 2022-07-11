<?php

if(isset ($_POST['editor'])){
	$content = $_POST['content'];
	$judul = $_POST['judul'];
	$tipe_informasi = $_POST['tipe_informasi'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO pusatinformasi (content,judul,tipe_informasi) VALUES ('$content','$judul','$tipe_informasi')");
	if($query){
		header("location: pusatinformasi_ADMIN.php");
	}else{
		echo "ERROR";
	}

}

?>