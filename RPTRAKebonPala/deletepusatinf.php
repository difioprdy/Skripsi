<?php
    require_once 'config.php';

    if(isset($_POST['deletepusatinf'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM pusatinformasi WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=pusatinformasi_ADMIN.php'>";
        // header('Location:pusatinformasi_ADMIN.php');
        
    }else{
        echo "gagal menghapus data";
    }
}
?>
