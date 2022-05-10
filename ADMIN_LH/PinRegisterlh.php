<?php

session_start();
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIN</title>
</head>
<body>
    <form method="post">
        <label>PIN</label>
        <input type="password" name="fpin"><br>
        <button type="submit" name="fmasuk">Enter</button>
    </form>

    <?php
    if(isset($_POST['fmasuk'])){
        $pin = $_POST['fpin'];
        $qry = mysqli_query($conn,"SELECT * FROM pinadminlh WHERE PIN = '$pin'");
        $cek = mysqli_num_rows($qry);
        if($cek==1){
            $_SESSION['userweb']=$pin;
            header("location:register.php");
            exit;
        }
        else{
            echo "Maaf PIN Salah";
        }
    }
?>
</body>
</html>