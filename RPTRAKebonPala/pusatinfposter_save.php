<?php
	require_once 'config.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$judul = $_POST['judul'];
		$content = $_POST['content'];
		$date = $_POST['date'];
		$tipe_informasi = $_POST['tipe_informasi'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `pusatinformasi` VALUES('', '$path','$content','$tipe_informasi','$judul','$nama_foto_hidden', '$date')") or die(mysqli_error());
				echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menambah Data');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=pusatinformasi_ADMIN.php'>";
				// header("location: pusatinformasi_ADMIN.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>