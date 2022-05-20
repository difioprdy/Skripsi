<?php
$db = mysqli_connect("localhost", "root", "", "rptra_lh");
if(!$db){
    die;
}else{
    $id = $_GET['id'];
    $qry = "select * from pinadminrptra where ID_PIN = $id";
    $run = $db -> query($qry);
    if($run -> num_rows > 0){
        while($row = $run -> fetch_assoc()){
            $pin = $row['PIN'];
        }

    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title> Edit PIN Registrasi </title>
</head>
<body>

<form method="post">
<label>PIN</label>
<input type="number" name="PIN" value="<?php echo $pin; ?>">
<br><br>
<input type="submit" name="update" value="Update">
</form>

</body>
</html>

<?php

if (isset($_POST['update'])){
    $pin = $_POST['PIN'];

    $qry = "update pinadminrptra set PIN='$pin' where ID_PIN = $id";
    if(mysqli_query($db, $qry)){
        header('location: EditPinPage.php');
    }else{
        echo mysqli_error($db);
    }
}

?>
