<!-- MAKANAN -->

<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");
function make_query($connect)
{
 $query = "SELECT * FROM tbl_productlh WHERE kategori = 'Alat Alat'";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show1" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show1" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '<center>
   <img src="'.$row["photo"].'" alt="'.$row["nama_product"].'" height="550"
   width="900"/>
   </center>
   <div class="carousel-caption">

    
   </div>

   <center>
                            <div class="pkkmart1">
                                <p class="pkkmart2">'.$row["nama_product"].'</p>
                            </div>
                        </center>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

<!-- MINUMAN -->

<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");
function make_query2($connect)
{
 $query = "SELECT * FROM tbl_productlh WHERE kategori = 'Tanaman'";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators2($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query2($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides2($connect)
{
 $output = '';
 $count = 0;
 $result = make_query2($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '<center>
   <img src="'.$row["photo"].'" alt="'.$row["nama_product"].'" height="550"
   width="900"/>
   </center>
   <div class="carousel-caption">

    <center>
                            

    
    </div>
    <center>
    <div class="pkkmart1">
        <p class="pkkmart2">'.$row["nama_product"].'</p>
    </div>
</center>
   
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

<!-- KERAJINAN -->
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");
function make_query3($connect)
{
 $query = "SELECT * FROM tbl_productlh WHERE kategori = 'Kerajinan'";
 $result = mysqli_query($connect, $query);
 return $result;
}

function make_slide_indicators3($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query3($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show3" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show3" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides3($connect)
{
 $output = '';
 $count = 0;
 $result = make_query3($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '<center>
   <img src="'.$row["photo"].'" alt="'.$row["nama_product"].'" height="550"
   width="900"/>
   </center>
   <div class="carousel-caption">

    <center>
                            

    
    </div>
    <center>
    <div class="pkkmart1">
        <p class="pkkmart2">'.$row["nama_product"].'</p>
    </div>
</center>
   
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>


<!DOCTYPE html>
<html>

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="LH.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

  <style>
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
              style="background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d); background-color: black; padding-bottom: 15vh;"
              fixed flat>
              <img style="margin-left: 20vh; margin-top: 5vh;" src="assets/LH/logo2.jpeg" width="10%" alt="Lambang">

              <v-row>
                <v-col class="d-flex justify-end">
                  <div id="navBtn">
                  <ul>
                      <li><a href="LH.php">Home</a></li>
                      <li><a href="#">Menu</a>
                        <div class="dropDownMenu">
                          <a href="ProductLH.php">Product</a>
                          <a href="ContactUslh.php">Contact Us</a>
                          <a href="StrukturOrganisasiLH.php">Struktur Organisasi LH</a>
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
        <p style="margin-top: 12vh; color: white;">p</p>

        <!-- Isi -->
        <!-- Isi -->
        <div class="pkkmart">
        <center><div class="pik1">
        <p class="pik2">
          <!-- Edukasi -->
          Produk

        </p>
    </div></center>

    <br>

        
          <v-container>
            <center>
              <div class="pkkmart1">
                <p class="pkkmart2">Alat Alat</p>
              </div>
            </center>



            <div class="container" style="width:50%; height:25%">
              <br />
              <div id="dynamic_slide_show1" class="carousel slide" data-ride="carousel">





                <div class="carousel-inner">
                  <?php echo make_slides($connect); ?>
                </div>
                <a class="left carousel-control" href="#dynamic_slide_show1" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#dynamic_slide_show1" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>



              </div>


            </div>

          </v-container>
        


        <center class="mt-10">
              <v-btn x-large class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                <button onclick="location='DetailProductLH.php'">Kunjungi Produk Alat Alat</button>
              </v-btn>
            </center>

        
          <v-container>
            <center>
              <div class="pkkmart1">
                <p class="pkkmart2">Tanaman</p>
              </div>
            </center>



            <div class="container" style="width:50%; height:25%">
              <br />
              <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">





                <div class="carousel-inner">
                  <?php echo make_slides2($connect); ?>
                </div>
                <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>



              </div>


            </div>


          </v-container>
        



        <center class="mt-10">
              <v-btn x-large class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                <button onclick="location='DetailProductLH.php'">Kunjungi Produk Tanaman</button>
              </v-btn>
            </center>

        <div class="pkkmart">
          <v-container>
            <center>
              <div class="pkkmart1">
                <p class="pkkmart2">Kerajinan</p>
              </div>
            </center>



            <div class="container" style="width:50%; height:25%">
              <br />
              <div id="dynamic_slide_show3" class="carousel slide" data-ride="carousel">





                <div class="carousel-inner">
                  <?php echo make_slides3($connect); ?>
                </div>
                <a class="left carousel-control" href="#dynamic_slide_show3" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#dynamic_slide_show3" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>



              </div>


            </div>

          </v-container>
        </div>
        <!-- <center>
          <v-btn small class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
            <button onclick="location='DetailProductLH.php'">Lihat Lebih >>></button>
          </v-btn>
        </center> -->

        <center class="mt-10">
              <v-btn x-large class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                <button onclick="location='DetailProductLH.php'">Kunjungi Produk Kerajinan</button>
              </v-btn>
            </center>
            </div>

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
      data() {
        return {
          drawer: ''
        }
      }
    })
  </script>
</body>

</html>