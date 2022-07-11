<?php
	require_once 'config.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$nama_product = $_POST['nama_product'];
		$price = $_POST['price'];
		$kategori = $_POST['kategori'];
		$previous = $_POST['previous'];
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
					mysqli_query($conn, "UPDATE `tbl_productlh` set `nama_product` = '$nama_product', `photo` = '$path', 'price' = '$price', 'kategori' = '$kategori' WHERE `id` = '$id'") or die(mysqli_error());
					
					//header("location: ProductLH_ADMIN.php");
				}
				echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Produk');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=ProductLH_ADMIN'>";
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>