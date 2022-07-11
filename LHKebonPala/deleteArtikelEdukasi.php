<?php
    require_once 'config.php';

    if(isset($_POST['deleteProduct'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM edukasi WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Artikel Edukasi');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=Edukasi_ADMIN.php'>";
       // header('Location:Edukasi_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>
