<?php
if(isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE halaman_utama_program_kegiatan SET deskripsi = '$editorText' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: program_kegiatanADMIN.php?success=1");
}
else{
    header("Location: updateDeskripsi_ProgramKegiatan.php?success=0");
}

}
else{

}