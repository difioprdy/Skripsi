<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="SMEdukasi.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : Edukasi.php?success=0');
}
?>

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

<?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `edukasi` WHERE id= '$id'") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

<div>
    <center><div class="pik1">
        <p class="pik2">
          <!-- Edukasi -->
          <?php echo $fetch['judul']?>

        </p>
    </div></center>

    <center>
        <img src=<?php echo $fetch['photo']?> width="50%" style="border-radius: 20px;" alt="">
    </center>

    <center style="margin-bottom:5vh"><div class="boxed">
        <div class="isibox">
            <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur? Ipsum commodi fugiat odio, cum
            minus modi nostrum? Impedit distinctio ducimus, assumenda blanditiis similique beatae soluta harum quod id
            quia.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere tempore fuga laudantium pariatur. Quidem,
            maiores veritatis. Rem dolorum quasi, ducimus dolorem earum assumenda. Veritatis, fuga obcaecati nostrum eos
            recusandae exercitationem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos necessitatibus maiores nulla, odit
            magnam laborum ipsa perferendis! Similique, voluptate nulla incidunt illo quod dignissimos in maiores optio,
            cumque aliquid enim.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos soluta ex rem molestiae ea saepe dolorem
            perferendis nobis, qui eveniet tempore, unde inventore nam delectus cupiditate provident quia itaque atque. -->


            <?php echo $fetch['isi']?>

        </div>
  </div></center>


  <center>
  
  <strong style="font-size: 40px;">Video</strong><br> <br> <br>

    <?php 

$data = $fetch['url'];
$final = str_replace('watch?v=', 'embed/', $data);
echo "
    <iframe
        src='$final'
        frameborder='0'
        allow='autoplay; encrypted-media'
        allowfullscreen height='600' width='1000'>
        
    </iframe>
";
// }
?>

</center>

<br>
<br>  


<?php
					}
				?>


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