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
    </style>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
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
                            <img style="margin-left: 20vh; margin-top: 5vh;" src="assets/LH/logo2.jpeg" width="10%"
                                alt="Lambang">

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



                <div class="col-md-3"></div>
                <div class="col-md-6 well">
                    <h3 class="text-primary">Edit dan Tambah Artikel Edukasi LH Kebon Pala</h3>
                    <hr style="border-top:1px dotted #ccc;" />
                    <!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
				class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
                    <button class="btn btn-success" type="button"><a style="color:white"
                            href="postEdukasi_LH.php">Tambah Artikel Edukasi</a></button>
                    <br /><br />
                    <h3 class="text-primary">Artikel Edukasi</h3>
                    <table class="table table-bordered">
                        <thead class="alert-info">
                            <tr>
                                <th>Nomor Artikel</th>
                                <th>Thumbnail Artikel Edukasi</th>
                                <th>Judul Edukasi</th>
                                <th>Isi</th>
                                <th>Video Youtube</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `edukasi`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
                            <tr>
                                <td><?php echo $fetch['id']?></td>
                                <td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
                                <td><?php echo $fetch['judul']?></td>
                                <td><?php echo $fetch['isi']?></td>
                                <td> <?php 

                $data = $fetch['url'];
                $final = str_replace('watch?v=', 'embed/', $data);
                echo "
                    <iframe
                        src='$final'
                        frameborder='0'
                        allow='autoplay; encrypted-media'
                        allowfullscreen>
                    </iframe>
                ";
           // }
        ?>
                                </td>
                                <td>

                                    <a style="color:white" class="btn btn-warning"
                                        href="<?= 'updateEdukasi_LH.php?id=' .$fetch['id'] ?>">Update</a>

                                    <button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
                                        data-target="#<?php echo $fetch['id']?>">Delete</button>

                                </td>

                                <div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Hapus Artikel</h4>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin untuk menghapus artikel edukasi ?
                                            </div>

                                            <div class="modal-footer">
                                                <form action="deleteArtikelEdukasi.php" method="post">
                                                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                    <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                                                    <button value="DELETE" name="deleteProduct" class="btn btn-danger"
                                                        type="submit">Ya</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </tr>
                            <?php
					}
				?>
                        </tbody>
                    </table>

                </div>



    </div>


    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
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

<script>
    CKEDITOR.replace('savejudul');
    CKEDITOR.replace('editjudul');
    CKEDITOR.replace('savedeskripsi');
    CKEDITOR.replace('editdeskripsi');
</script>

</html>