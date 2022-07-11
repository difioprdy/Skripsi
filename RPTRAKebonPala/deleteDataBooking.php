<?php
    require_once 'config.php';

    if(isset($_POST['deleteFutsal'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM bookings_futsal WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        // header('Location:booking_ADMIN.php');
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=booking_ADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deleteRuang'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM bookings_ruangserbaguna WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=booking_ADMIN.php'>";
        // header('Location:booking_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>