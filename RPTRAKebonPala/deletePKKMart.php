<?php
    require_once 'config.php';

    if(isset($_POST['deleteProduct'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_product WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=ProductRPTRA_ADMIN.php'>";
        //header('Location:ProductRPTRA_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>
