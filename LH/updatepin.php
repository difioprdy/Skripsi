<?php
if(isset($_POST['PIN'])){
    $PIN = $_POST['PIN'];
    $ID_PIN =  $_POST['ID_PIN'];
    include('config.php');
    $query = mysqli_query($conn, "UPDATE pinadminlh SET PIN = '$PIN' WHERE ID_PIN = $ID_PIN") or die(mysqli_error()) ;
if($query){
    header("Location: EditPinADMIN.php?success=1");
}
else{
    header("Location: updatepin.php?success=0");
}

}
else{

}
?>


