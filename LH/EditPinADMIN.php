<!DOCTYPE html>
<html>

<head>
    <title> Edit PIN Registrasi </title>
</head>

<body>

    <form method="post" action="updatepin.php">
        <label>PIN</label>

        <?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM pinadminlh where PIN") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>




        <div class="form-group" name="PIN">
            <input type="number" name="PIN" value="<?php echo $fetch['PIN'] ?>">
        </div>

        <br><br>
        <input type="hidden" name="ID_PIN" value="<?php echo $fetch['ID_PIN'] ?>">
        <input type="submit" name="update" value="Update">

        <?php
					}
				?>

    </form>

</body>

</html>