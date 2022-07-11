<?php
    require_once 'config.php';

    if(isset($_POST['deleteBKB'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
       // header('Location:program_kegiatanADMIN.php');
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deletePIK'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deleteP2K'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deletehati'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deleteposyandu'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
        </script>";
   echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>

<?php
    require_once 'config.php';

    if(isset($_POST['deletesim'])){

    
    $id = $_POST['id'];
    $query = "DELETE FROM galeri_foto_program_kegiatan WHERE id = '$id'";
    $hasil = mysqli_query($conn,$query);

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Menghapus Data');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
  // echo "<meta http-equiv='refresh' content='1; URL=program_kegiatanADMIN.php'>";
    }else{
        echo "gagal menghapus data";
    }
}
?>
