<?php
if(isset($_POST['update'])){
    $nama_product = $_POST['nama_product'];
	$price = $_POST['price'];
	$kategori = $_POST['kategori'];
	$deskripsi_product = $_POST['deskripsi_product'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE tbl_product SET deskripsi_product = '$deskripsi_product', nama_product = '$nama_product', price = '$price', kategori = '$kategori' WHERE id = $id") or die(mysqli_error()) ;
if($query){
	echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Produk');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=ProductRPTRA_ADMIN.php?success=1'>";
   // header("Location: ProductRPTRA_ADMIN.php?success=1");
}
else{
    header("Location: updateProduct_RPTRA.php?success=0");
}

}
else{

}
?>


<?php
	require_once 'config.php';
	if(ISSET($_POST['save'])){
		$id = $_POST['id'];
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$nama_foto_hidden = $_POST['nama_foto_hidden'];
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
					mysqli_query($conn, "UPDATE `tbl_product` set `nama_foto_hidden` = '$nama_foto_hidden', `photo` = '$path' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Produk');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=ProductRPTRA_ADMIN.php?success=1'>";
					//header("Location: ProductRPTRA_ADMIN.php?success=1");
				}
			}		
		}else{
			header("Location: updateProduct_RPTRA.php?success=0");
		}
	}
?>

