


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
    background-image:linear-gradient(rgba(0,0,0,0.5),#211063);
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
    width: 200px;
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
    font-family: Monserat;
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
/* Footer */
#footerBar{
    margin-top: 40vh;
    background-color:black;
    background-image: linear-gradient(#211063,rgba(0,0,0,0.5));
    display: flex;
    justify-content: space-between;
}

#txtCopy{
    margin-left: 50px;
    display: flex;
    color: white;
    float: left;
    padding: 30px;
    font-family: Monserat;
}

#sosmedImg{
    display: flex;
    width: 30%;
    float: right;
    padding: 20px;
    margin-top: 10px;
    
}
.a10{
    color: white;
    margin-left: 200px;
    font-family: Monserat;
}

</style>

<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />

    <meta charset="UTF-8">
    <title>Admin RPTRA Kebon Pala</title>
</head>
<body>
<!-- NavBar     -->
<header id="headerBar">
        <div id="navBar">
            <div>
                <img style="width: 5%;" id="LogoImg" src="assets/logo1.jpeg" alt="">
                <img id="LogoImg" src="assets/Logo2.png" alt="LogoImage"> 
                <img style="width: 5%;" id="LogoImg" src="assets/logo3.jpeg" alt=""> 
            </div>
            <div id="navBtn">
                <ul>
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
<div align="center">
            <span style="font-size:40px; font-family:'Monserat'">Admin Website RPTRA Kebon Pala </span>
        </div>

        <hr />

<div align="center">
            <span style="font-size:40px; font-family:'Monserat'">Pilih Page yang ingin diedit</span>
        </div>

<div class="center" style="margin-top:5vh;">
            <div align="center">
                <div flex-parent jc-center>
                    <button onclick="location.href = 'pusatinformasi_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-users fa-2x"></span><br />
                        "Pusat Informasi Keluarga" <br>  Homepage
                    </button>

                    <button onclick="location.href = 'ProductRPTRA_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-truck-pickup fa-2x"></span><br />
                        PKK Mart
                    </button>

                    <button onclick="location.href = 'TentangKamiRPTRA_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-book fa-2x"></span><br />
                        "Tentang Kami" <br> Homepage
                    </button>

                    <button onclick="location.href = 'headlineHomepageADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        "Headline" <br> Homepage
                    </button>

                    <button onclick="location.href = 'EditPinADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7"> 
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Edit <br> PIN registrasi
                    </button>

                    <button onclick="location.href = 'booking_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Booking <br> Tempat
                    </button>

                    <button onclick="location.href = 'program_kegiatanADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Program Kegiatan <br> RPTRA
                    </button>

                    <button onclick="location.href = 'strukorg.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Gambar Struktur <br> Organisasi RPTRA
                    </button>

                    <button onclick="location.href = 'BukuTamu_ADMIN.php';" class="btn btn-primary btn-sq-lg" style="margin-right:20px; background-color:#87AFC7">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Buku Tamu
                    </button>

                </div>
            </div>
        </div>

            <!-- Footer -->
    <footer id="footerBar">
        <div id="txtCopy">
            &#169 2016 - RPTRA Kebon Pala
        </div>
        <div id="sosmedImg">
            <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
        </div>
    </footer>
</body>
</html>