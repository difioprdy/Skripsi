<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="DetailProduct.css">
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
              style="background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d); background-color: black; padding-bottom: 15vh;"
              fixed flat>
              <img style="margin-left: 20vh; margin-top: 5vh;" src="assets/LH/logo2.jpeg" width="10%" alt="Lambang">

              <v-row>
                <v-col class="d-flex justify-end">
                  <div id="navBtn">
                    <ul>
                      <li><a href="Home.html">Home</a></li>
                      <li><a href="#">Menu</a>
                        <div class="dropDownMenu">
                          <a href="#">Product</a>
                          <a href="#">Contact Us</a>
                        </div>
                      </li>
                      <li><a href="Edukasi.html">Edukasi</a></li>
                      <li><a style="color:#32CD32" href="Login.html">Login</a></li>
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
              <v-btn text color="white"><a href="Home.html"></a>Home</v-btn><br>
              <v-btn text color="white"><a href="ProductLH.html"></a>Product</v-btn><br>
              <v-btn text color="white"><a href="#"></a>Edukasi</v-btn><br>
              <v-btn text color="white"><a href="ContactUs.html"></a>Contact Us</v-btn><br>
              <v-btn text color="#32CD32"><a href="Login.html"></a>Login</v-btn><br>

            </v-navigation-drawer>

          </div>
        </div>
        <p style="margin-top: 20vh; color: white;">p</p>

        <!-- Isi -->
        <section class="konten">
          <div class="container">
            <h1>Produk</h1>

            <div class="row">

              <?php require 'config.php'; $ambil = $conn->query("SELECT * FROM tbl_productlh"); ?>
              <?php while($fetch = $ambil->fetch_assoc()){ ?>
              <div class="col-md-3">
                <div class="thumbnail">
                  <img src="<?php echo $fetch['photo']?>" alt="" height="200px" width="200px">
                  <div class="caption">
                    <h3><?php echo $fetch['nama_product']?></h3>
                    <h5>Rp. <?php echo $fetch['price']?></h5>
                    <a style="color: white;" data-toggle="modal" data-target="#modal<?php echo $fetch['id']?>"
                      id="btnBuyB" class="btn btn-primary">Beli</a>



                  </div>
                  <div class="modal fade" id="modal<?php echo $fetch['id']?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                          <div class="modal-header">
                            <h3 class="modal-title"><?php echo $fetch["nama_product"]; ?></h3>
                          </div>
                          <div class="modal-body">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="form-group">
                                <img src="<?php echo $fetch['photo']?>" height="250" width="280" />
                              </div>
                              <div class="form-group">
                                <br>
                                <p><?php echo $fetch["deskripsi_product"]; ?></p>
                              </div>
                            </div>
                          </div>
                          <br style="clear:both;" />
                          <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span> Close</button>
                            <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span>
                              Buy</button>
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
        <footer id="footerBar"  style="margin-top: 50vh">
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
      data() {
        return {
          drawer: ''
        }
      }
    })
  </script>
</body>

</html>