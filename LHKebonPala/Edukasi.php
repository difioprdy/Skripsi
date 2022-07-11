<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Edukasi.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <v-app>
      <v-main>
        
<!-- Navbar -->
<div>
    <div class="hidden-md-and-down">
        <v-app-bar style="background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d); background-color: black; padding-bottom: 15vh;" fixed flat>
            <img style="margin-left: 20vh; margin-top: 5vh;" src="assets/LH/logo2.jpeg" width="10%" alt="Lambang">
         
          <v-row>
            <v-col class="d-flex justify-end">
                <div id="navBtn">
                    <ul>
                        <li><a href="LH.php">Home</a></li>
                        <li><a href="#">Menu</a>
                            <div class="dropDownMenu">
                            <a href="ProductLH.php">Product</a>
                                                    <a href="StrukturOrganisasiLH.php">Struktur Organisasi LH</a>
                                                    <a href="ContactUslh.php">Contact Us</a>
                            </div>
                        </li>
                        <li><a href="Edukasi.php">Edukasi</a></li>
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
        <img src="assets/logo3.jpeg" width="10%vh" alt="Lambang"> <hr>
            <v-btn text color="#00AFF2"><a href="Home.html">Home</a></v-btn><br>
            <v-btn text color="#00AFF2"><a href="#">Booking Fasilitas</a></v-btn><br>
            <v-btn text color="#00AFF2"><a href="Partner.html">Program Kegiatan</a></v-btn><br>
            <v-btn text color="#00AFF2"><a href="Product.html">PKK Mart</a></v-btn><br>    
            <v-btn text color="#00AFF2"><a href="#">Struktur Organisasi</a></v-btn><br>
            <v-btn text color="#00AFF2"><a href="ContactUs.html">Contact Us</a></v-btn><br>
            <v-btn text color="#32CD32"><a href="Login.html">Login</a></v-btn><br>
          
    </v-navigation-drawer>
        
      </div>
</div>
<p style="margin-top: 20vh; color: white;">p</p>


<!-- Isi -->
<div>
    <center><div class="pik1">
        <p class="pik2">Edukasi</p>
    </div></center>
    <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `edukasi`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
    <center>
        <img src="<?php echo $fetch['photo']?>" width="50%" style="border-radius: 20px;" alt="">
        <!-- <img  class="b5" src= alt="" height="450" width="470"> -->
    </center>

    <center> <p class="b4"><?php echo $fetch['judul']?></p></center>

    <center>
        <v-btn x-large style="font-size:20px; margin-top: 5vh;" depressed color="#f0ad4e" dark>
            <a href="<?= 'SMEdukasi.php?id=' .$fetch['id'] ?>">Baca</a>
        </v-btn
    </center>
</div>

<br>


<?php
					}
				?>
<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Anwar <br> 0821-1157-0918</p>
    </div>
</footer>



      </v-main>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data(){
        return{
          drawer:''
        }
      }
    })
  </script>
</body>
</html>