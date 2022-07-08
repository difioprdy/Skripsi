<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </link>
    <script src="Home.js" defer></script>
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

    <title>WebsiteRPTRA</title>
</head>
<?php session_start(); ?>

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
                </li>
                <!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
                <li><a style="font-family: Monserat;" href="Home.php">Home</a> </li>
                <li><a style="font-family: Monserat;">Menu</a>
                    <div class="dropDownMenu">
                        <a style="font-family: Monserat;" href="BookFacillites.html">Booking Fasilitas</a>
                        <a style="font-family: Monserat;" href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a>
                        <a style="font-family: Monserat;" href="ContactUs.php">Contact Us</a>
                        <a style="font-family: Monserat;" href="Partner.php">Program Kegiatan</a>
                    </div>
                </li>

                <li><a style="font-family: Monserat;" href="PKKmart_control.php">PKK Mart</a> </li>


                <li><a style="color:green; font-family: Monserat;" href="login.php">Login</a></li>
            </ul>
        </div>
</header>
    

        <!-- StrukturOrganisasi -->
        <div class="s1">
            <div class="s4">
                <center>
                    <div class="s2">
                        <p class="s3">STRUKTUR ORGANISASI</p>
                    </div>
                </center>
            </div>
            <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `struktur_organisasi_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

            <!-- <img style="margin-top: 60px;" src="assets/struktur organisasi.png" alt=""> -->
            <center><img style="margin-top: 60px;" src="<?php echo $fetch['photo']?>" /></center>
            <?php
					}
				?>
        </div>

    </div>

    <!-- Footer -->
    <footer style="margin-top:10px;" id="footerBar">
        <div id="txtCopy">
            &#169 2016 - RPTRA Kebon Pala
        </div>
        <div id="sosmedImg">
            <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
        </div>
    </footer>



    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->


    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


</body>

</html>