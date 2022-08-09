<?php
    require_once 'config.php';

    if(isset($_POST['deleteID'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_productlh WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=ProductLH_ADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>
