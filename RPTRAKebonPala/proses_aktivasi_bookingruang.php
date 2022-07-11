<?php
include('config.php');
$form=true;
if($_POST['status_form']==""){
    echo"Data masih kosong";
    $form=false;
}
$cek=($form);
if($cek==true){
    $id=$_POST['id'];
    $status=$_POST['status_form'];
    $perintah="UPDATE aktivasibookingruang SET aktivasi='$status' WHERE id='$id'";
    $query=mysqli_query($conn,$perintah);
    if(!$query){
        echo "Akses gagal<br/>";
        echo "ERROR:".mysqli_error(); 
    }else{
        echo "<script language='javascript' type='text/javascript'>alert('Anda Berhasil Mengganti Status Aktivasi');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=booking_ADMIN.php'>";
    }
}




?>