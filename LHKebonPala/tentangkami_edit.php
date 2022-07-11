<?php
	require_once 'config.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$previous = $_POST['previous'];
		$judul = $_POST['judul'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `tentangkami_image_homepage_lh` set `judul` = '$judul', `photo` = '$path' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Foto Tentang Kami');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=TentangKamiLH_ADMIN.php'>";
					//header("location: TentangKamiLH_ADMIN.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>