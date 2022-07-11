<?php
	require_once 'config.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$judul = $_POST['judul'];
		$previous = $_POST['previous'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `struktur_organisasi_rptra` set `judul` = '$judul',`photo` = '$path' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=strukorg.php'>";
				//	header("location: strukorg.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>