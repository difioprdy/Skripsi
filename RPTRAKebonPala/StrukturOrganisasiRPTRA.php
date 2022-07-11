<!DOCTYPE html>
<html>

<head>

    <!-- <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" /> -->

    <!-- alert -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </link>

    <!-- slider -->
    <script src="Home.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="Home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <style>
        .test {
            background-color: whitesmoke;
            width: 100%;
            border-radius: 20px;
        }

        .a5 {
            /* padding-top: 50px; */
            color: white;
            /* width: 150vh; */
            text-align: justify;
            font-family: Monserat;
        }
    </style>
</head>

<body>
    <div id="app">
        <v-app>
            <v-main>

                <!-- Navbar -->
                <div>
                    <div class="hidden-md-and-down">
                        <v-app-bar
                            style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;"
                            fixed flat>
                            <img style="margin-left: 10vh; margin-top: 5vh;" src="assets/logo1.jpeg" width="4%"
                                alt="Lambang">
                            <img style="margin-top: 5vh;" src="assets/Logo2.png" width="10%" alt="Lambang">
                            <img style="margin-top: 5vh;" src="assets/logo3.jpeg" width="4%" alt="Lambang">

                            <v-row>
                                <v-col class="d-flex justify-end">
                                    <div id="navBtn">
                                    <ul>
                                            <li><a href="Home.php">Home</a></li>
                                            <li><a href="#">Menu</a>
                                                <div class="dropDownMenu">
                                                    <a href="BookFacillites.html">Booking Fasilitas</a>
                                                    <a href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a>
                                                    <a href="Partner.php">Program Kegiatan</a>
                                                    <a href="PusatInformasi.php">Pusat Pemberdayaan dan Kesejahteraan Keluarga</a>
                                                    <a href="ContactUs.php">Contact Us</a>
                                                </div>
                                            </li>
                                            <li><a href="PKKmart_control.php">PKK Mart</a></li>
                                            <li><a style="color:#32CD32" href="Login.php">Login</a></li>
                                        </ul>
                                    </div>
                                </v-col>
                            </v-row>

                        </v-app-bar>
                    </div>


                    <div class="hidden-md-and-up">
                        <v-toolbar flat dense>
                            <v-app-bar-nav-icon id="carousels" @click="drawer = !drawer"></v-app-bar-nav-icon>

                            <center>
                                <img src="assets/logo1.jpeg" width="5%" alt="Lambang">
                                <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
                                <img src="assets/logo3.jpeg" width="5%vh" alt="Lambang">
                            </center>

                        </v-toolbar>

                        <v-navigation-drawer id="carousels" v-model="drawer" app>
                            <img src="assets/logo1.jpeg" width="10%" alt="Lambang">
                            <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
                            <img src="assets/logo3.jpeg" width="10%vh" alt="Lambang">
                            <hr>
                            <v-btn text color="#00AFF2"><a href="Home.html">Home</a></v-btn><br>
                            <v-btn text color="#00AFF2"><a href="#">Booking Fasilitas</a></v-btn><br>
                            <v-btn text color="#00AFF2"><a href="Partner.html">Program Kegiatan</a></v-btn><br>
                            <v-btn text color="#00AFF2"><a href="Product.html">PKK Mart</a></v-btn><br>
                            <v-btn text color="#00AFF2"><a href="#">Struktur Organisasi</a></v-btn><br>
                            <v-btn text color="#00AFF2"><a href="ContactUs.html"></a>Contact Us</v-btn><br>
                            <v-btn text color="#32CD32"><a href="Login.html">Login</a></v-btn><br>

                        </v-navigation-drawer>

                    </div>
                </div>

                <!-- Landing Page -->
                <p style="margin-top: 20vh; color: white;">p</p>
    

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
        $query = mysqli_query($conn, "SELECT * FROM `struktur_organisasi_rptra`") or die(mysqli_error());
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

    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>


    <script>
        new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data() {
                return {
                    drawer: ''
                }
            }
        })
    </script>
</body>

</html>