<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : TentangKamiRPTRA_ADMIN.php?success=0');
}


?>

<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Monserat';
    }

    @font-face {
      font-family: 'Monserat';
      src: url(Font/montserrat/Montserrat-Light.ttf);
      font-weight: normal;
      font-style: normal;
    }

    /* navbar */
    .navbar {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), #211063);
      background-color: black;
    }

    #navBtn ul {
      margin-top: 50px;
      float: right;
      list-style-type: none;
    }

    #navBtn ul li {
      display: inline-block;
    }

    #navBtn ul li a {
      text-decoration: none;
      color: #ffffff;
      transition: 0.5s ease;
      padding: 5px 20px;
    }

    #navBtn ul li a:hover {
      background-color: #ffffff;
      color: black;
    }

    #navBtn ul li:hover .dropDownMenu {
      display: block;
    }

    #navBtn ul li:hover a {
      color: black;
    }

    .dropDownMenu {
      display: none;
      position: absolute;
      background-color: white;
    }

    .dropDownMenu a {
      display: block;
      padding: 10px;
    }

    /* Footer */
    #footerBar {
      margin-top: 5vh;
      background-color: black;
      background-image: linear-gradient(#211063, rgba(0, 0, 0, 0.5));
      display: flex;
      justify-content: space-between;
    }

    #txtCopy {
      margin-left: 50px;
      display: flex;
      color: white;
      float: left;
      padding: 30px;
      font-family: Monserat;
    }

    #sosmedImg {
      display: flex;
      width: 30%;
      float: right;
      padding: 20px;
      margin-top: 10px;

    }

    .a10 {
      color: white;
      margin-left: 200px;
      font-family: Monserat;
    }

    #btnupdate {
      border: none;
      padding: 8px 7px;
      text-align: center;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      background-color: #f0ad4e;
      border-radius: 5px;
      transition-duration: 0.5s;
    }

    #btndelete {
      border: none;
      padding: 10px 10px;
      text-align: center;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
      background-color: #C04000;
      border-radius: 5px;
      transition-duration: 0.5s;
    }
  </style>
  <script src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
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
                      <li><a href="homepageadmin.html">Home Admin</a></li>
                      <li><a style="color:red" href="Login.php">Logout</a></li>
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
              <v-btn text color="#00AFF2"><a style="color: #00AFF2;" href="Homepageadmin.html">Home Admin</a></v-btn><br>
            <v-btn text color="red"><a style="color: red;" href="Login.php">Logout</a></v-btn><br>

            </v-navigation-drawer>

          </div>
        </div>
        <p style="margin-top: 20vh; color: white;">p</p>



        <div class="container">
          <!-- baru -->
          <center>

            <h3 class="text-primary" style="font-family: Monserat;">Edit Deskripsi Tentang Kami</h3>
            <form action="update_post_deskripsi_tentangkami.php" method="post">
              <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM tentangkami_deskripsi_homepage_rptra WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
              <input type="hidden" name="id" value="<?= $id ?>">
              <br>
              <button class="btn btn-primary" id="tst" name="save"> Save</button>
            </form>


          </center>
        </div>

        <footer id="footerBar" style="margin-top: 30vh;">
  <div id="txtCopy">
    &#169 2022 - RPTRA Kebon Pala
  </div>
  <div id="sosmedImg">
    <p class="a10">
  </div>
</footer>

</body>


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


</html>