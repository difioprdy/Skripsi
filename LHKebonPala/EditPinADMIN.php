<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
	#btnadd{
		border: none;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #5cb85c;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
	#btnupdate{
		border: none;
		padding: 10px 15px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #f0ad4e;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
*{
    margin: 0;
    padding: 0;
}
@font-face{
    font-family: 'Monserat';
    src: url(Font/montserrat/Montserrat-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

#headerBar{
    background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d);
    height: 18vh ;
    background-size: cover;
    background-position: center;
    background-color: black;
	margin-bottom:5vh;
}

#navBar{
    max-width: 1200px;
    margin: auto;
}

#LogoImg{
    width: 180px;
    margin-top: 30px;
    height: auto;
    alt: "LogoImage";
    float: left;
}

#navBtn ul{
    margin-top: 50px;
    float: right;
    list-style-type: none;
}
#navBtn ul li{
    display: inline-block; 
}
#navBtn ul li a{
    text-decoration: none;
    color: #ffffff;
    transition: 0.5s ease;
    padding: 5px 20px;
    font-family: Arial, Helvetica, sans-serif;
}
#navBtn ul li a:hover{
    background-color: #ffffff;
    color: black;
}
#navBtn ul li:hover .dropDownMenu{
    display: block;
}
#navBtn ul li:hover a{
    color: black;
}

.dropDownMenu{
    display: none;
    position: absolute;
    background-color: white;
}
.dropDownMenu a{
    display: block;
    padding: 10px;
}
		</style>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
	</head>
<body>
	<!-- NavBar     -->
  <header id="headerBar">
        <div id="navBar">
            <div>
                <img id="LogoImg" src="assets/LH/logo2.jpeg" alt="LogoImage"> 
            </div>
            <div id="navBtn">
                <ul>
				<li><a  style="font-family: Monserat;" href="homepageadmin.html">Home</a>
                    </li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
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