<?php
if(isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE headline_deskripsi_homepage_lh SET content = '$editorText' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: headlineHomepageADMIN.php?success=1");
}
else{
    header("Location: updateDeskripsi.php?success=0");
}

}
else{

}