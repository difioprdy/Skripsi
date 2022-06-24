<?php
	require_once 'config.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$nama_product = $_POST['nama_product'];
		$price = $_POST['price'];
		$nama_foto_hidden = $_POST['nama_foto_hidden'];
		$kategori = $_POST['kategori'];
		$deskripsi_product = $_POST['deskripsi_product'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `tbl_product` VALUES('', '$nama_product','$deskripsi_product' ,'$path', '$price', '$kategori', '$nama_foto_hidden')") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: ProductRPTRA_ADMIN.php");
			}
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>