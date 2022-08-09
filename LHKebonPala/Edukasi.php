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

/* Isi */
.pik1{
    border-radius: 40px;
    text-align: center;
    width: 30%;
    background: #dbffa2;
    margin-top: 2vh;
    margin-bottom: 5vh;
}
.pik2{
    font-weight: bold;
    font-size: 37px;
}

/* Footer */
#footerBar{
    margin-top: 10px;
    background-color:black;
    background-image: linear-gradient(#20845d,rgba(22, 53, 32, 0.5));
    display: flex;
    justify-content: space-between;
}

#txtCopy{
    margin-left: 50px;
    display: flex;
    color: white;
    float: left;
    padding: 30px;
    font-family: 'Monserat';
}

#sosmedImg{
    font-family: 'Monserat';
    display: flex;
    width: 30%;
    float: right;
    padding: 20px;
    margin-top: 10px;
    
}
.a10{
    color: white;
    margin-left: 200px;
}
.pkkmart1{
    border-radius: 40px;
    text-align: center;
    width: 40%;
    background:#E2F516;
}
        
.pkkmart2{
  font-weight: bold;
  font-size: 28px;
}
  </style>
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
                <img src="assets/LH/logo2.jpeg" width="15%vh" alt="Lambang">
              </center>

            </v-toolbar>

            <v-navigation-drawer
              style="background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d); background-color: black; padding-bottom: 15vh;"
              v-model="drawer" app>
              <img src="assets/LH/logo2.jpeg" width="40%vh" alt="Lambang">
              <hr>
              <v-btn text color="white"><a style="color: white;" href="LH.php">Home</a></v-btn><br>
              <v-btn text color="white"><a style="color: white;" href="ProductLH.php">Product</a></v-btn><br>
              <v-btn text color="white"><a style="color: white;" href="Edukasi.php">Edukasi</a></v-btn><br>
              <v-btn text color="white"><a style="color: white;" href="ContactUslh.php">Contact Us</a></v-btn><br>
              <v-btn text color="white"><a style="color: white;" href="StrukturOrganisasiLH.php">Struktur Organisasi LH</a></v-btn><br>
              <v-btn text color="#32CD32"><a style="color: #32CD32;" href="Login.php">Login</a></v-btn><br>

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

    <center> <div class="pkkmart1">
            <p class="pkkmart2"><?php echo $fetch['judul']?></p>
        </div></center>

    <center>
        <v-btn onclick="location='<?= 'SMEdukasi.php?id=' .$fetch['id'] ?>'" x-large style="font-size:20px; margin-top: 2vh;" depressed color="#f0ad4e" dark>
            
            Baca

           <!-- / <button onclick="location='SMEdukasi.php'">Baca</button> -->
        </v-btn>
    </center>

    <br>
    <br>
    
    <?php
					}
				?>
</div>

<br>



<!-- Footer -->
<footer id="footerBar">
          <div id="txtCopy">
            &#169 2022 - Lingkungan Hidup Kebon Pala
          </div>
          <div id="sosmedImg">
            <p class="a10"></p>
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