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
    $perintah="UPDATE aktivasipkkmart SET aktivasi='$status' WHERE id='$id'";
    $query=mysqli_query($conn,$perintah);
    if(!$query){
        echo "Akses gagal<br/>";
        echo "ERROR:".mysqli_error(); 
    }else{
        echo"<script>window.open('ProductRPTRA_ADMIN.php', '_self')</script>";
    }
}




?>