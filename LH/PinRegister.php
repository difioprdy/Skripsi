

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <title>PIN</title>
</head>
<body>
<form method="post">
        <label>PIN</label>

        <?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM pinadminlh where PIN") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>

        <input type="number" name="PIN" value="<?php echo $fetch['PIN'] ?>">
        <br><br>

        <input type="submit" id="tst" name="update" value="Update">

        <?php
					}
				?>

    </form>

    <?php
    if(isset($_POST['fmasuk'])){
        $pin = $_POST['fpin'];
        $qry = mysqli_query($conn,"SELECT * FROM pinadminlh WHERE PIN = '$pin'");
        $cek = mysqli_num_rows($qry);
        if($cek==1){
            $_SESSION['pin']=$pin;
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