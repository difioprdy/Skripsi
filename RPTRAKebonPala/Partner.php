<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="partner.css">

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
  
      <v-navigation-drawer
                            style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;"
                            v-model="drawer" app>
                            <img src="assets/logo1.jpeg" width="10%" alt="Lambang">
                            <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
                            <img src="assets/logo3.jpeg" width="10%vh" alt="Lambang">
                            <hr>
                            <v-btn text color="white"><a style="color: white;" href="Home.php">Home</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="BookFacillites.html">Booking Fasilitas</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="Partner.php">Program Kegiatan</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="Product.php">PKK Mart</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="PusatInformasi.php">Pusat Informasi</a></v-btn><br>
                            <v-btn text color="white"><a style="color: white;" href="ContactUs.php">Contact Us</a></v-btn><br>
                            <v-btn text color="#32CD32"><a style="color: #32CD32" href="Login.php">Login</a></v-btn><br>

                        </v-navigation-drawer>
        
      </div>
</div>

<!-- BKB PAUD -->
<p style="margin-top: 10vh; color: white;">p</p>

<center><div class="pik1">
        <p class="pik2">PIK</p>
    </div></center>
    
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <div class="carousel-inner">
    
                <div class="item active">
                  <center><img src="assets/Event/PIK.jpg" alt="Los Angeles" height="550" width="900"></center>
                  <div class="carousel-caption">
                    <h3 style="color:yellow">Sosialisasi Berita</h3>
                  </div>
                </div>
    
    
              </div>
    
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </center>
    
    <center><div class="pik3">
        <div class="pik4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
            minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
            quia.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
            maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
            recusandae exercitationem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
            magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
            cumque aliquid enim.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
            perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
        </div>
    </div></center>


<!-- PIK -->
<div class="pik">
    <p style="color:#ffe1ed ;">p</p>
    <center><div class="bkbpaud mt-10">
            <p class="bkbpaud1">BKB PAUD</p>
        </div></center>
    
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
        
                <div class="carousel-inner">
        
                    <div class="item active">
                      <center><img src="assets/Event/BKB PAUD.jpeg" alt="Los Angeles" height="550" width="900"></center>
                      <div class="carousel-caption">
                        <h3 style="color:yellow">Outing</h3>
                      </div>
                    </div>
        
                  </div>
        
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </center>
      
    
      <center><div class="boxed">
            <div class="isibox">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
                minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
                quia.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
                maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
                recusandae exercitationem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
                magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
                cumque aliquid enim.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
                perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
            </div>
      </div></center>
    <p style="color:#ffe1ed ;">p</p>
</div>


<!-- UP2K -->
<center><div class="bkbpaud mt-10">
    <p class="bkbpaud1">UP2K</p>
</div></center>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="item active">
              <center><img src="assets/Event/UP2K.jpg" alt="Los Angeles" height="550" width="900"></center>
              <div class="carousel-caption">
                <h3 style="color:yellow">Jual Beli Produk</h3>
              </div>
            </div>

          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </center>
</div>

<center><div class="boxed">
    <div class="isibox">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
        minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
        quia.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
        maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
        recusandae exercitationem!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
        magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
        cumque aliquid enim.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
        perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
    </div>
</div></center>


<!-- Hati PKK -->
<div class="pik">
    <p style="color:#ffe1ed ;">p</p>
    <center><div class="pik1">
        <p class="pik2">HATI PKK</p>
    </div></center>
    
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <div class="carousel-inner">
    
                <div class="item active">
                  <center><img src="assets/Event/event3.jpg" alt="Los Angeles" height="550" width="900"></center>
                  <div class="carousel-caption">
                    <h3 style="color:yellow">Pengajian</h3>
                  </div>
                </div>
    
              </div>
    
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </center>
    
    <center><div class="pik3">
        <div class="pik4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
            minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
            quia.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
            maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
            recusandae exercitationem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
            magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
            cumque aliquid enim.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
            perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
        </div>
    </div></center>
    <p style="color:#ffe1ed ;">p</p>
</div>

<!-- Posyandu -->
<center><div class="bkbpaud mt-10">
    <p class="bkbpaud1">POSYANDU</p>
</div></center>

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="item active">
              <center><img src="assets/Event/POSYANDU.jpeg" alt="Los Angeles" height="550" width="900"></center>
              <div class="carousel-caption">
                <h3 style="color:yellow">Blusukan Kesehatan Anak</h3>
              </div>
            </div>

          </div>

          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </center>
</div>

<center><div class="boxed">
    <div class="isibox">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
        minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
        quia.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
        maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
        recusandae exercitationem!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
        magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
        cumque aliquid enim.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
        perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
    </div>
</div></center>


<!-- Sim PKK -->
<div class="pik">
    <p style="color:#ffe1ed ;">p</p>
    <center><div class="pik1">
        <p class="pik2">SIM PKK</p>
    </div></center>
    
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
    
            <div class="carousel-inner">
    
                <div class="item active">
                  <center><img src="assets/Event/SIM PKK.jpg" alt="Los Angeles" height="550" width="900"></center>
                  <div class="carousel-caption">
                    <h3 style="color:yellow">Orientasi</h3>
                  </div>
                </div>

    
              </div>
    
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </center>
    
    <center><div class="pik3">
        <div class="pik4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
            minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
            quia.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
            maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
            recusandae exercitationem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
            magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
            cumque aliquid enim.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
            perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque.
        </div>
    </div></center>
    <p style="color:#ffe1ed ;">p</p>
</div>

<!-- Footer -->
<footer id="footerBar" style="margin-top: 10vh">
  <div id="txtCopy">
    &#169 2016 - RPTRA Kebon Pala
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