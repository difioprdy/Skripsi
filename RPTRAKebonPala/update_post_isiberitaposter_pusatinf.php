<?php
if(isset($_POST['judul'])){
    $editorjudul = $_POST['judul'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE pusatinformasi SET judul = '$editorjudul' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: pusatinformasi_ADMIN.php?success=1");
}
else{
    header("Location: updateberitaposter_pusatinf.php?success=0");
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
					mysqli_query($conn, "UPDATE `pusatinformasi` set `nama_foto_hidden` = '$nama_foto_hidden', `photo` = '$path' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script>alert('User account updated!')</script>";
					header("Location: pusatinformasi_ADMIN.php?success=1");
				}
			}		
		}else{
			header("Location: updateberitaposter_pusatinf.php?success=0");
		}
	}
?>

<?php
if(isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE pusatinformasi SET content = '$editorText' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: pusatinformasi_ADMIN.php?success=1");
}
else{
    header("Location: updateberitaposter_pusatinf.php?success=0");
}

}
else{

}
?>