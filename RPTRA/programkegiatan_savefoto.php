<?php
	require_once 'config.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$nama_program = $_POST['nama_program'];
		$nama_foto = $_POST['nama_foto'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `galeri_foto_program_kegiatan` VALUES('', '$nama_program','$path','$nama_foto')") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: program_kegiatanADMIN.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>