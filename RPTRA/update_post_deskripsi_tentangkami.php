<?php
if(isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE tentangkami_deskripsi_homepage_rptra SET content = '$editorText' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: TentangKamiRPTRA_ADMIN.php?success=1");
}
else{
    header("Location: updateDeskripsi_tentangkami.php?success=0");
}

}
else{

}