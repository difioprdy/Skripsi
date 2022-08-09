<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : pusatinformasi_ADMIN.php?success=0');
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                            <img style="margin-left: 10vh; margin-top: 5vh;" src="assets/logo1.jpeg" width="4%"
                                alt="Lambang">
                            <img style="margin-top: 5vh;" src="assets/Logo2.png" width="10%" alt="Lambang">
                            <img style="margin-top: 5vh;" src="assets/logo3.jpeg" width="4%" alt="Lambang">

                            <v-row>
                                <v-col class="d-flex justify-end">
                                    <div id="navBtn">
                                        <ul>
                                            <li><a href="Home.html">Home Admin</a></li>
                                            <li><a style="color:red" href="Login.html">Logout</a></li>
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
                            <v-btn text color="#00AFF2"><a href="Home.html"></a>Home Admin</v-btn><br>
                            <v-btn text color="red"><a href="Login.html"></a>Logout</v-btn><br>

                        </v-navigation-drawer>

                    </div>
                </div>
                <p style="margin-top: 20vh; color: white;">p</p>

                <div class="container">
                    <!-- baru -->
                    <center>

                        <form action="update_post_isiberitaposter_pusatinf.php" method="post">
                            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
                            <div class="form-group" name="judul">
                                <label style="font-family:'Monserat'">Judul Berita</label>
                                <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
                                <input type="text" class="form-control" value=" <?= $row['judul']; ?>" name="judul"
                                    required="required" />
                            </div>
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button style="color:white" class="btn btn-primary" type="submit" id="btnupdate"
                                name="save">Update</button>
                        </form>



                        <!-- baru -->
                        <form method="POST" enctype="multipart/form-data"
                            action="update_post_isiberitaposter_pusatinf.php">
                            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
                            <div class="form-group">
                                <h3 style="margin-top:5vh; font-family:'Monserat'">Post Sekarang</h3>
                                <img src="<?= $row['photo']; ?>" height="120" width="150" />
                                <input type="hidden" name="previous" value="<?= $row['photo']; ?>" />
                                <h3 style="margin-top:5vh; font-family:'Monserat'">Post Baru</h3>
                                <label>(Foto harus landscape/memanjang kesamping)</label>
                                <input type="file" class="form-control" name="photo" value="<?= $row['photo']; ?>"
                                    required="required" />
                            </div>
                            <input type="hidden" value="<?= $row['id']; ?>" name="id" />
                            <input type="hidden" type="text" class="form-control" value="hidden" name="nama_foto_hidden"
                                required="required" />

                            <button style="color:white" class="btn btn-primary" type="submit" id="btnupdate"
                                name="save"> Update</button>
                        </form>


                        <form style="margin-top:5vh;" action="update_post_isiberitaposter_pusatinf.php" method="post">
                            <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button style="color:white" class="btn btn-primary" type="submit" id="btnupdate"
                                name="save">Update</button>
                        </form>

                    </center>
                </div>


                <footer id="footerBar" style="margin-top: 20vh">
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