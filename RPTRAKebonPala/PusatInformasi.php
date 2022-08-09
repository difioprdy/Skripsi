<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="PusatInformasi.css">
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
            <v-app-bar
              style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;"
              fixed flat>
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
        <p style="margin-top: 20vh; color: white;">p</p>

        <!-- Isi -->
        <section class="konten">
          <div class="container">
            <h1>Pusat Pemberdayaan dan Kesejahteraan Keluarga</h1>
            <br><br>
            <div class="row">

              <?php require 'config.php'; $ambil = $conn->query("SELECT * FROM pusatinformasi"); ?>
              <?php while($fetch = $ambil->fetch_assoc()){ ?>
              <div class="col-md-3">
                <div class="thumbnail">
                <h5><strong>Post Tanggal : <?php echo $fetch['date']?></strong></h5>
                  <img style="height:40vh; width:40vh" src="<?php echo $fetch['photo']?>" alt="" height="200px" width="200px">
                  <div class="caption">
                    <h3><?php echo $fetch['judul']?></h3>
                    <center> <a style="color: white;" data-toggle="modal" data-target="#modal<?php echo $fetch['id']?>"
                        id="btnBuyB" class="btn btn-primary">Baca</a></center>



                  </div>
                  <div class="modal fade" id="modal<?php echo $fetch['id']?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                          <div class="modal-header">
                          <center>   <h3 class="modal-title"><strong><?php echo $fetch["judul"]; ?></strong></h3></center>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                              <center> <img src="<?php echo $fetch['photo']?>" height="300" width="300" /></center>
                              </div>
                              <div class="form-group">
                                <br>
                                <p><strong><?php echo $fetch["content"]; ?></strong></p>
                              </div>
                            </div>
                          </div>
                          <br style="clear:both;" />
                          <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal"></span> Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <?php
					}
				?>




        </section>

        <!-- Footer -->
        <footer id="footerBar" style="margin-top: 30vh">
          <div id="txtCopy">
            &#169 2022 - RPTRA Kebon Pala
          </div>
          <div id="sosmedImg">
            <p class="a10">
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


<script src="js1/jquery-3.2.1.min.js"></script>
  <script src="js1/bootstrap.js"></script>

</body>

</html>