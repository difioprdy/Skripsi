<!DOCTYPE html>
<html>
<head>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Monserat';
}
@font-face{
    font-family: 'Monserat';
    src: url(Font/montserrat/Montserrat-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

/* navbar */
.navbar{
    background-image: linear-gradient(rgba(0,0,0,0.5),#211063);
    background-color: black;
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

#footerBar{
  margin-top: 20vh;
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
        <v-app-bar style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;" fixed flat>
          <img style="margin-left: 10vh; margin-top: 5vh;" src="assets/logo1.jpeg" width="4%" alt="Lambang">
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
  
      <v-navigation-drawer style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;" v-model="drawer" app>
        <img src="assets/logo1.jpeg" width="10%" alt="Lambang">
        <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
        <img src="assets/logo3.jpeg" width="10%vh" alt="Lambang"> <hr>
            <v-btn text color="white"><a href="Home.html"></a>Home</v-btn><br>
            <v-btn text color="white"><a href="#"></a>Booking Fasilitas</v-btn><br>
            <v-btn text color="white"><a href="Partner.html"></a>Program Kegiatan</v-btn><br>
            <v-btn text color="white"><a href="Product.html"></a>PKK Mart</v-btn><br>    
            <v-btn text color="white"><a href="#"></a>Struktur Organisasi</v-btn><br>
            <v-btn text color="white"><a href="PusatInformasi.html"></a>Pusat Informasi</v-btn><br>
            <v-btn text color="white"><a href="ContactUs.html"></a>Contact Us</v-btn><br>
            <v-btn text color="#32CD32"><a href="Login.html"></a>Login</v-btn><br>
          
    </v-navigation-drawer>
        
      </div>
</div>
<p style="color:white; margin-top: 20vh;">p</p>
    <center>
    <img width="30%" src="assets/warning.png" alt="">
    <h1 style="font-family:'Monserat'">
    <div style="margin-top:-15vh">


    <br/><br/>PKK MART TIDAK DIAKTIFKAN SEMENTARA

    </div>
    </h1>
    </center>

    <br/><br/>
<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2022 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
       <p class="a10">
    </div>
</footer>

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




