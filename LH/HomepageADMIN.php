<?php
    // session_start();
    // if (!isset($_SESSION['SESSION_EMAIL'])) {
    //     header("Location: login.php");
    //     die();
    // }

    // include 'config.php';

    // $query = mysqli_query($conn, "SELECT * FROM userslh WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    // if (mysqli_num_rows($query) > 0) {
    //     $row = mysqli_fetch_assoc($query);

    //     echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
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
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <title>Admin LH Kebon Pala</title>
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
                    <li><a style="font-family: Monserat;" href="LH.html">Home</a>
                        <div class="dropDownMenu">
                            <a style="font-family: Monserat;" href="Productlh.html">Product</a>
                            <a style="font-family: Monserat;" href="ContactUs.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a  style="font-family: Monserat;" href="Edukasi.html">Edukasi</a></li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.html">Logout</a></li>
                </ul>
            </div> 
    </header>

<div align="center">
            <span style="font-size:40px; font-family:'Monserat'">Admin Website Lingkungan Hidup Kebon Pala</span>
        </div>

        <hr />

<div align="center">
            <span style="font-size:40px; font-family:'Monserat'">Pilih Page yang ingin diedit</span>
        </div>

<div class="center" style="margin-top:5vh">
            <div align="center">
                <div flex-parent jc-center>
                    <button onclick="location.href = 'Edukasi_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="'margin-right:20px'; background-color:#50C878">
                        <span class="fa fa-users fa-2x"></span><br />
                        Edukasi LH
                    </button>

                    <button onclick="location.href = 'ProductLH_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="'margin-right:20px'; background-color:#50C878">
                        <span class="fa fa-truck-pickup fa-2x"></span><br />
                        Product LH
                    </button>

                    <button onclick="location.href = 'TentangKamiLH_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="'margin-right:20px'; background-color:#50C878">
                        <span class="fa fa-book fa-2x"></span><br />
                        "Tentang Kami" <br> Homepage
                    </button>

                    <button onclick="location.href = 'headlineHomepageADMIN.php';" class="btn btn-primary btn-sq-lg" style="'margin-right:20px'; background-color:#50C878">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        "Headline" <br> Homepage
                    </button>

                    <button onclick="location.href = 'EditPinADMIN.php';" class="btn btn-primary btn-sq-lg" style="'margin-right:20px'; background-color:#50C878">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        PIN Registrasi
                    </button>

                </div>
            </div>
        </div>
</body>
</html>