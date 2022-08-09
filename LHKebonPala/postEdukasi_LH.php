<?php include('config.php'); ?>


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


    #footerBar {
      margin-top: 30vh;
      background-color: black;
      background-image: linear-gradient(#20845d, rgba(22, 53, 32, 0.5));
      display: flex;
      justify-content: space-between;
    }

    #txtCopy {
      margin-left: 50px;
      display: flex;
      color: white;
      float: left;
      padding: 30px;
      font-family: 'Monserat';
    }

    #sosmedImg {
      font-family: 'Monserat';
      display: flex;
      width: 30%;
      float: right;
      padding: 20px;
      margin-top: 10px;

    }

    .a10 {
      color: white;
      margin-left: 200px;
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
  </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                      <li><a href="Homepageadmin.html">Home</a></li>
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
                <img src="assets/LH/logo2.jpeg" width="15%vh" alt="Lambang">
              </center>

            </v-toolbar>

            <v-navigation-drawer
              style="background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d); background-color: black; padding-bottom: 15vh;"
              v-model="drawer" app>
              <img src="assets/LH/logo2.jpeg" width="40%vh" alt="Lambang">
              <hr>
              <v-btn text color="white"><a style="color: white;" href="Homepageadmin.php">Home</a></v-btn>
              <br>
              <v-btn text color="#32CD32"><a style="color: red;" href="Login.php">Logout</a></v-btn><br>

            </v-navigation-drawer>

          </div>
        </div>
        <p style="margin-top: 20vh; color: white;">p</p>

        <div class="container">
          <!-- baru -->
          <center>


            <form action="edukasi_save.php" enctype="multipart/form-data" method="post">
              <div class="form-group">
                <label>Thumbnail Edukasi</label>
                <input type="file" class="form-control" name="photo" required="required" />
              </div>

              <div class="form-group">
                <label>Judul Edukasi</label>
                <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
                <input type="text" class="form-control" name="judul" required="required" />
              </div>

              <div class="form-group">
                <label>Isi</label>
                <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
                <textarea class="ckeditor" class="form-control" name="isi">
            </textarea>
              </div>

              <div class="form-group">
                <label>Link Video Youtube</label>
                <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
                <input type="text" class="form-control" name="url" />
                </textarea>
              </div>

              <button class="btn btn-warning" type="submit" name="save">Post</button>
              <!-- <button class="btn btn-warning" type="submit" name="edit1">Update</button> -->
            </form>


          </center>
        </div>

        <footer id="footerBar" style="margin-top: 10vh">
          <div id="txtCopy">
            &#169 2022 - Lingkungan Hidup Kebon Pala
          </div>
          <div id="sosmedImg">
            <p class="a10"></p>
          </div>
        </footer>

</body>

<script src="js1/jquery-3.2.1.min.js"></script>
<script src="js1/bootstrap.js"></script>
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