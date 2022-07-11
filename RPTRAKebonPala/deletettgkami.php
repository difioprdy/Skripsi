<?php
    require_once 'config.php';

    if(isset($_POST['deletettgkami'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM tentangkami_image_homepage_rptra WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=TentangKamiRPTRA_ADMIN.php'>";
       // header('Location:TentangKamiRPTRA_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>
