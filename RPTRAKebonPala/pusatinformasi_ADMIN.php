<!DOCTYPE html>
<html>
<head>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Monserat';
}
@font-face{
    font-family: 'Monserat';
    src: url(Font/montserrat/Montserrat-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

/* navbar */
.navbar{
    background-image: linear-gradient(rgba(0,0,0,0.5),#211063);
    background-color: black;
}
#navBtn ul{
    margin-top: 50px;
    float: right;
    list-style-type: none;
}
#navBtn ul li{
    display: inline-block; 
}
#navBtn ul li a{
    text-decoration: none;
    color: #ffffff;
    transition: 0.5s ease;
    padding: 5px 20px;
}
#navBtn ul li a:hover{
    background-color: #ffffff;
    color: black;
}
#navBtn ul li:hover .dropDownMenu{
    display: block;
}
#navBtn ul li:hover a{
    color: black;
}

.dropDownMenu{
    display: none;
    position: absolute;
    background-color: white;
}
.dropDownMenu a{
    display: block;
    padding: 10px;
}

    </style>
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
        <v-app-bar style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;" fixed flat>
          <img style="margin-left: 10vh; margin-top: 5vh;" src="assets/logo1.jpeg" width="4%" alt="Lambang">
          <img style="margin-top: 5vh;" src="assets/Logo2.png" width="10%" alt="Lambang">
          <img style="margin-top: 5vh;" src="assets/logo3.jpeg" width="4%" alt="Lambang">
         
          <v-row>
            <v-col class="d-flex justify-end">
                <div id="navBtn">
                    <ul>
                      <li><a href="Home.html">Home</a></li>
                      <li><a href="#">Menu</a>
                          <div class="dropDownMenu">
                              <a href="BookFacillites.html">Booking Fasilitas</a>
                              <a href="#">Struktur Organisasi</a>
                              <a href="Partner.html">Program Kegiatan</a>
                              <a href="PusatInformasi.html">Pusat Pemberdayaan dan Kesejahteraan Keluarga</a>
                              <a href="ContactUs.html">Contact Us</a>
                          </div>
                      </li>
                      <li><a href="Product.html">PKK Mart</a></li>
                      <li><a href="#">Buku Tamu</a></li>
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
            <img src="assets/logo1.jpeg" width="5%" alt="Lambang">
            <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
            <img src="assets/logo3.jpeg" width="5%vh" alt="Lambang">
        </center>
  
      </v-toolbar>
  
      <v-navigation-drawer style="background-image: linear-gradient(rgba(0,0,0,0.5),#211063); background-color: black; padding-bottom: 15vh;" v-model="drawer" app>
        <img src="assets/logo1.jpeg" width="10%" alt="Lambang">
        <img src="assets/Logo2.png" width="20%vh" alt="Lambang">
        <img src="assets/logo3.jpeg" width="10%vh" alt="Lambang"> <hr>
            <v-btn text color="white"><a href="Home.html"></a>Home</v-btn><br>
            <v-btn text color="white"><a href="#"></a>Booking Fasilitas</v-btn><br>
            <v-btn text color="white"><a href="Partner.html"></a>Program Kegiatan</v-btn><br>
            <v-btn text color="white"><a href="Product.html"></a>PKK Mart</v-btn><br>    
            <v-btn text color="white"><a href="#"></a>Struktur Organisasi</v-btn><br>
            <v-btn text color="white"><a href="PusatInformasi.html"></a>Pusat Informasi</v-btn><br>
            <v-btn text color="white"><a href="ContactUs.html"></a>Contact Us</v-btn><br>
            <v-btn text color="#32CD32"><a href="Login.html"></a>Login</v-btn><br>
          
    </v-navigation-drawer>
        
      </div>
</div>
<p style="color:white; margin-top: 20vh;">p</p>

				<div class="col-md-3"></div>
				<div class="col-md-6 well">
					<h3 class="text-primary">Edit Pusat Informasi Keluarga Homepage RPTRA Kebon Pala Berseri</h3>
					<hr style="border-top:1px dotted #ccc;" />
					<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
							class="glyphicon glyphicon-plus"></span> Tambah berita dengan poster/gambar</button>
					<br /><br />
					<h3 class="text-primary">Edit Berita</h3>
					<table class="table table-bordered">
						<thead class="alert-info">
							<tr>
								<th>Poster/gambar</th>
								<th>Judul</th>
								<th>Isi Berita</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `pusatinformasi` WHERE tipe_informasi = 'poster'") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
							<tr>
								<td><img src="<?php echo $row['photo']?>" height="80" width="100" /></td>
								<td><?php echo $row['judul']?></td>
								<td><?php echo $row['content']?></td>
								<td><button type="button" id="btnupdate"><a
											href="<?= 'updateberitaposter_pusatinf.php?id=' .$row['id'] ?>">Update</a></button>
									<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
										data-target="#<?php echo $row['id']?>">Delete</button>
								</td>

								<div class="modal fade" id=<?php echo $row['id']?> role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												<h4 class="modal-title">Hapus</h4>
											</div>
											<div class="modal-body">
												Apakah anda yakin untuk menghapus ?
											</div>

											<div class="modal-footer">
												<form action="deletepusatinf.php" method="post">
													<button class="btn btn-default" data-dismiss="modal">Tidak</button>
													<input type="hidden" name="id" value="<?php echo $row['id']?>">
													<button value="DELETE" name="deletepusatinf" class="btn btn-danger"
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


					<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->




				</div>


				<!-- buat tambah foto dan judul di atas -->
				<div class="modal fade" id="form_modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<form method="POST" action="pusatinfposter_save.php" enctype="multipart/form-data">
								<div class="modal-header">
									<h3 class="modal-title">Tambah Post</h3>
								</div>
								<div class="modal-body">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="form-group">
											<label>Poster/foto</label>
											<input type="file" class="form-control" name="photo" />
										</div>
										<div class="form-group">
											<label>Judul Berita</label>
											<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
											<input type="text" class="form-control" name="judul" required="required" />
										</div>

										<div class="form-group">
											<label>Isi berita</label>
											<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
											<textarea class="ckeditor" name="content" required="required"></textarea>

										</div>

										<div class="form-group">
											<input type="hidden" type="text" value="poster" class="form-control"
												name="tipe_informasi" />
										</div>
									</div>
								</div>
								<br style="clear:both;" />
								<div class="modal-footer">
									<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
									<button class="btn btn-primary" name="save">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="modal fade" id="form_modal2" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<form method="POST" action="pusatinftexteditor.php" enctype="multipart/form-data">
								<div class="modal-header">
									<h3 class="modal-title">Tambah Post</h3>
								</div>
								<div class="modal-body">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="form-group">
											<label>Judul Berita</label>
											<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
											<input type="text" class="form-control" name="judul" required="required" />
										</div>

										<div class="form-group">
											<label>Isi berita</label>
											<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
											<textarea class="ckeditor" name="content" required="required"></textarea>

										</div>

										<div class="form-group">
											<input type="hidden" type="text" value="no text" class="form-control"
												name="tipe_informasi" />
										</div>
									</div>
								</div>
								<br style="clear:both;" />
								<div class="modal-footer">
									<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
									<button class="btn btn-primary" name="editor">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>


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

</body>

<script>
	CKEDITOR.replace('savejudul');
	CKEDITOR.replace('editjudul');
	CKEDITOR.replace('savedeskripsi');
	CKEDITOR.replace('editdeskripsi');
</script>

</html>