<?php
if(isset($_POST['judul'])){
    $editorjudul = $_POST['judul'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE pusatinformasi SET judul = '$editorjudul' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: pusatinformasi_ADMIN.php?success=1");
}
else{
    header("Location: updateberitaposter_pusatinf.php?success=0");
}

}
else{

}
?>

<?php
if(isset($_POST['editor'])){
    $editorText = $_POST['editor'];
    $id =  $_POST['id'];
    include('config.php');

    $query = mysqli_query($conn, "UPDATE pusatinformasi SET content = '$editorText' WHERE id = $id") or die(mysqli_error()) ;
if($query){
    header("Location: pusatinformasi_ADMIN.php?success=1");
}
else{
    header("Location: updateberitaposter_pusatinf.php?success=0");
}

}
else{

}
?>