<?php
    require_once 'config.php';

    if(isset($_POST['deleteFutsal'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM bookings_futsal WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        header('Location:booking_ADMIN.php');
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
        header('Location:booking_ADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>