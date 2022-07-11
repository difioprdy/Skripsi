<?php
    require_once 'config.php';

    if(isset($_POST['deleteProduct'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_productlh WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
       echo" <script>
        alert('Selamat datang di tutorial Javascript');
    </script>";
        header('Location:ProductLH_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>
