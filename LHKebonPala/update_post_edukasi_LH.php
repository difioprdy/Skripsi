<?php
if(isset($_POST['edit1'])){
    $isi = $_POST['isi'];
	$url = $_POST['url'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE edukasi SET isi = '$isi', url = '$url' WHERE id = $id") or die(mysqli_error()) ;
if($query){
	echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Artikel Edukasi');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=Edukasi_ADMIN.php?success=1'>";
    //header("Location: Edukasi_ADMIN.php?success=1");
}
else{
    header("Location: updateEdukasi_LH.php?success=0");
}

}
else{

}
?>


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
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(unlink($previous)){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `edukasi` set `judul` = '$judul', `photo` = '$path' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Update Artikel Edukasi');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=Edukasi_ADMIN.php?success=1'>";
				}
			}
		}else{
			header("Location: updateEdukasi_LH.php?success=0");
		}
	}
?>

