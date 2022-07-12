<!-- PKK MART -->
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");
function make_query($connect)
{
 $query = "SELECT * FROM tbl_product ORDER BY id ASC";
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


<!-- TENTANG KAMI -->
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");
function make_query2($connect)
{
 $query = "SELECT * FROM tentangkami_image_homepage_rptra ORDER BY id ASC";
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
   <img src="'.$row["photo"].'" alt="'.$row["judul"].'" height="550"
   width="900"/>
   </center>
   <div class="carousel-caption">

    <center>
                            

    
    </div>
    <center>
    <div class="pkkmart1">
        <p class="pkkmart2">'.$row["judul"].'</p>
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
                                            <li><a href="#form_modal5" data-toggle="modal"
                                                    data-target="#form_modal5">Buku Tamu</a></li>
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
                <v-container class="mt-10">
                    <v-row>

                        <?php
            require 'config.php';
            $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_rptra`") or die(mysqli_error());
            while($fetch = mysqli_fetch_array($query)){
        ?>

                        <v-col cols="12" sm="4" md="4">
                            <div class="boxed">
                                <p class="isibox">
                                    <!-- Ruang Publik Terpadu Ramah Anak -->
                                    <?php echo $fetch['judul']?>
                                </p>
                            </div>
                            <?php
					}
				?>

                            <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_deskripsi_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
                            <p class="isibox2">
                                <!-- Ruang Publik Terpadu Ramah Anak (RPTRA) merupakan ruang publik
                berupa ruang terbuka hijau ramah anak yang dilengkapi dengan berbagai 
                fasilitas yang mendukung perkembangan anak, kenyamanan orangtua,
                serta tempat berinteraksi seluruh warga dari berbagai kalangan. <br> <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi consectetur commodi 
                quis ad facilis dolorum nihil voluptatum, nulla, in, ex cumque iste fuga odit enim iure! 
                Distinctio nulla quo qui! -->
                                <?php echo $fetch['content']?>
                            </p>
                        </v-col>

                        <?php
					}
				?>

                        <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
                        <v-col>
                            <!-- <img class="gmbrlp" src="assets/gambar1.jpg" alt=""> -->
                            <img class="gmbrlp" src="<?php echo $fetch['photo']?>" alt="">

                        </v-col>
                    </v-row>
                </v-container>

                <?php
					}
				?>

                <!-- Pusat Informasi -->
                <div class="pi">
                    <p style="color: white">p</p>
                    <center>
                        <div class="pi1">
                            <p class="pi2">Pusat Pemberdayaan dan Kesejahteraan Keluarga</p>
                        </div>
                    </center>

                    <section class="konten">
          <div class="container">

            <div class="row">

              <?php require 'config.php'; $ambil = $conn->query("SELECT * FROM tbl_product ORDER BY id ASC LIMIT 4"); ?>
              <?php while($fetch = $ambil->fetch_assoc()){ ?>
              <div class="col-md-3">
                <div class="thumbnail">
                  <img src="<?php echo $fetch['photo']?>" alt="" height="100%" width="100%">
                  <div class="caption">
                    <h3><?php echo $fetch['nama_product']?></h3>
                    <center> <a style="color: white;" data-toggle="modal" data-target="#modal<?php echo $fetch['id']?>"
                      id="btnBuyB" class="btn btn-primary">Baca</a></center>



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
                              <center>  <img src="<?php echo $fetch['photo']?>" height="400" width="430" /> </center> 
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

                        <center>
                            <v-btn small class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                                <button onclick="location='PusatInformasi.html'">Baca Lebih >>></button>
                            </v-btn>
                        </center>

                        <!-- Tentang Kami -->
                        <div class="tentangkami">
                            <v-container>
                                <center>
                                    <div class="tittlettgkm1">
                                        <p class="tittlettgkm2">Tentang Kami</p>
                                    </div>
                                </center>

                                <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `tentangkami_deskripsi_homepage_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

                                <center>
                                    <div class="a5">
                                        <p>
                                            <!-- RPTRA Kebon Pala juga sering melakukan kegiatan-kegiatan tertentu yang bertujuan
                    untuk mendukung tumbuh kembang anak-anak yang terdapat di sekitar RPTRA Kebon Pala.
                    Selain untuk itu juga, RPTRA Kebon Pala juga menyelenggarakan beberapa kegiatan lain
                    seperti tempat untuk vaksinisasi Covid-19, pembelajaran kepada ibu-ibu PKK mengenai
                    tumbuhan dan juga merawat anak dan juga sebagai tempat pelaksanaan kegiatan pengajian.
                    Dapat dilihat di bawah contoh-contoh dari kegiatan-kegiatan yang di lakukan oleh RPTRA
                    Kebon Pala. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus autem 
                    sapiente, unde reprehenderit illo cumque fugiat ut! Inventore praesentium culpa doloribus                        
                    voluptatum maiores ratione, fugit voluptatibus nisi laudantium porro tempora. -->
                                            <?php echo $fetch['content']?>
                                        </p>
                                    </div>
                                </center>

                                <?php
					}
				?>

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
                        </div>

                        <!-- Produk PKK Mart -->
                        <div class="pkkmart">
                            <v-container>
                                <center>
                                    <div class="pkkmart1">
                                        <p class="pkkmart2">PRODUK PKK MART</p>
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

                                <center class="mt-10">
                                    <v-btn x-large class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                                        <button onclick="location='Product.html'">Kunjungi PKK Mart Kebon Pala</button>
                                    </v-btn>
                                </center>

                            </v-container>
                        </div>




                        <!-- <center>
                <v-btn small class="mb-2" style="font-size:20px" depressed color="#f0ad4e" dark>
                                <button onclick="location='Product.html'">Lihat Lebih >>></button>
                            </v-btn>
                </center> -->
                        <!-- Footer -->
                        <footer id="footerBar">
                            <div id="txtCopy">
                                &#169 2016 - RPTRA Kebon Pala
                            </div>
                            <div id="sosmedImg">
                            </div>
                        </footer>


                        <div class="modal fade" id="form_modal5" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="bukutamu_save.php" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Buku Tamu</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Hari dan Tanggal</label> <br>
                                                    <input id="currentDate" type="date" name="tanggal"
                                                        required="required" />
                                                    <input id="currentDate" type="time" name="waktu"
                                                        required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor HP</label>
                                                    <input type="text" class="form-control" name="no_hp"
                                                        required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Instansi</label>
                                                    <input type="text" class="form-control" name="instansi"
                                                        required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Peserta</label>
                                                    <input type="text" class="form-control" name="peserta" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Tujuan</label>
                                                    <input type="text" class="form-control" name="tujuan" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Kesan dan Pesan</label>
                                                    <input type="text" class="form-control" name="kesandanpesan" />
                                                </div>
                                            </div>
                                        </div>
                                        <br style="clear:both;" />
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal"><span
                                                    class="glyphicon glyphicon-remove"></span> Close</button>
                                            <button class="btn btn-primary" type="submit"><span
                                                    class="glyphicon glyphicon-save"></span>
                                                Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

            </v-main>
        </v-app>
    </div>



    <!-- <script src="js1/jquery-3.2.1.min.js"></script>
                <script src="js1/bootstrap.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->


    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js">
    </script>

    <!-- <script>
        var date = new Date();
        var currentDate = date.toISOString().slice(0, 10);
        var currentTime = date.getHours() + ':' + date.getMinutes();

        document.getElementById('currentDate').value = currentDate;
        document.getElementById('currentTime').value = currentTime;
    </script> -->



    <?php if(@$_SESSION['sukses2']){ ?>
    <script>
        swal("Terima kasih!", "<?php echo $_SESSION['sukses2']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses2']); } ?>


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
    <script src="./app.js"></script>
</body>



</html>