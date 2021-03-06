<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		#btnupdate {
			border: none;
			padding: 10px 10px;
			text-align: center;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			background-color: #f0ad4e;
			border-radius: 5px;
			transition-duration: 0.5s;
		}

		* {
			margin: 0;
			padding: 0;
		}

		@font-face {
			font-family: 'Monserat';
			src: url(Font/montserrat/Montserrat-Light.ttf);
			font-weight: normal;
			font-style: normal;
		}

		#headerBar {
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), #211063);
			height: 18vh;
			background-size: cover;
			background-position: center;
			background-color: black;
			margin-bottom: 5vh;
		}

		#navBar {
			max-width: 1200px;
			margin: auto;
		}

		#LogoImg {
			width: 200px;
			margin-top: 30px;
			height: auto;
			alt: "LogoImage";
			float: left;
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
			font-family: Monserat;
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

	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body>
	<!-- NavBar     -->
	<header id="headerBar">
		<div id="navBar">
			<div>
				<img style="width: 5%;" id="LogoImg" src="assets/logo1.jpeg" alt="">
				<img id="LogoImg" src="assets/Logo2.png" alt="LogoImage">
				<img style="width: 5%;" id="LogoImg" src="assets/logo3.jpeg" alt="">
			</div>
			<div id="navBtn">
				<ul>
					<li><a href="HomepageADMIN.php">Home &nbsp;Admin</a>
					</li>
					<li><a style="color:red" href="Login.php">Logout</a></li>
				</ul>
			</div>
	</header>

	<h3 class="text-primary"
            style=" text-align: center; color:#727272; margin-bottom: 80px; font-family: Monserat;">Atur Program Kegiatan RPTRA</h3>

	<!-- BKB PAUD -->
	
		<h3 class="text-primary">BKB Paud</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal1"><span
				class="glyphicon glyphicon-plus"></span>Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto BKB Paud</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'BKB PAUD' ") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span>
							Update</button>
						<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
					</td>
					<!-- pop up delete -->
					<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan BKB Paud?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deleteBKB" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />
											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi BKB Paud</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'BKB PAUD' ") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	

	<div class="modal fade" id="form_modal1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="BKB PAUD" class="form-control"
									name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span></span> Close</button>
						<button class="btn btn-primary" name="save"><span></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<br></br>
	<!-- PIK -->
		<h3 class="text-primary">PIK</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal2"><span
				class="glyphicon glyphicon-plus"></span> Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto PIK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'PIK'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span>
							Update</button>
						<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
					</td>
					<!-- pop up delete -->
					<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan PIK?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deletePIK" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />



											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi PIK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'PIK' ") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>



	<div class="modal fade" id="form_modal2" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="PIK" class="form-control" name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"> Close</button>
						<button class="btn btn-primary" name="save"> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<br></br>
	<!-- UP2K -->
	
		<h3 class="text-primary">UP2K</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal3"><span
				class="glyphicon glyphicon-plus"></span> Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto UP2K</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'UP2K'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span>
							Update</button>
							<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
						</td>
						<!-- pop up delete -->
						<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan UP2K?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deleteP2K" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>

						<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />
											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi UP2K</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'UP2K' ") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>



	<div class="modal fade" id="form_modal3" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="UP2K" class="form-control"
									name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span></span> Close</button>
						<button class="btn btn-primary" name="save"><span></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br></br>

	<!-- HATI PKK -->
		<h3 class="text-primary">Hati PKK</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal4"><span
				class="glyphicon glyphicon-plus"></span> Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto Hati PKK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'HATI PKK'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span></span> Update</button>
							<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
						</td>
						<!-- pop up delete -->
						<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan Hatinya PKK?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deletehati" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>

						<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />
											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi Hati PKK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'Hati PKK'") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	<div class="modal fade" id="form_modal4" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">

								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="HATI PKK" class="form-control"
									name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span></span> Close</button>
						<button class="btn btn-primary" name="save"><span></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<br></br>
	<!-- POSYANDU -->
	
		<h3 class="text-primary">Posyandu</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal5"><span
				class="glyphicon glyphicon-plus"></span> Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto Posyandu</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'POSYANDU'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span>
							Update</button>
							<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
						</td>
						<!-- pop up delete -->
						<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan posyandu?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deleteposyandu" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>

						<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />
											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi Posyandu</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'Posyandu'") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	

	<div class="modal fade" id="form_modal5" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="POSYANDU" class="form-control"
									name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span></span> Close</button>
						<button class="btn btn-primary" name="save"><span></span> Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- SIM PKK -->
	
		<h3 class="text-primary">SIM PKK</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal6"><span
				class="glyphicon glyphicon-plus"></span> Tambah Foto Program Kegiatan</button>
		<br />
		<h3 class="text-primary">Galeri Foto SIM PKK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `galeri_foto_program_kegiatan` WHERE nama_program = 'SIM PKK'") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_foto']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span>
							Update</button>
							<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
						</td>
						<!-- pop up delete -->
						<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Hapus Foto</h4>
								</div>
								<div class="modal-body">
									Apakah anda yakin untuk menghapus foto program kegiatan SIM PKK?
								</div>

								<div class="modal-footer">
									<form action="deleteProgKeg.php" method="post">
										<button class="btn btn-default" data-dismiss="modal">Tidak</button>
										<input type="hidden" name="id" value="<?php echo $fetch['id']?>">
										<button value="DELETE" name="deletesim" class="btn btn-danger"
											type="submit">Ya</button>
									</form>
								</div>
							</div>
						</div>
					</div>

						<!-- pop up form -->
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="programkegiatan_editfoto.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Nama Kegiatan Pada Foto</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['nama_foto']?>" name="nama_foto"
													required="required" />
											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span></span> Close</button>
										<button class="btn btn-warning" name="edit"><span></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->


		<h3 class="text-primary">Edit Deskripsi SIM PKK</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `halaman_utama_program_kegiatan` WHERE nama_program = 'SIM PKK' ") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['deskripsi']?></td>
					<td><button id="btnupdate"><a
								href="<?= 'updateDeskripsi_ProgramKegiatan.php?id=' .$row['id'] ?>">Update</a></td>
					</button></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	

	<div class="modal fade" id="form_modal6" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="programkegiatan_savefoto.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Kegiatan Pada Foto</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="nama_foto" required="required" />
							</div>
							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value="SIM PKK" class="form-control"
									name="nama_program" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span
								class="glyphicon glyphicon-remove"></span> Close</button>
						<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span>
							Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js1/jquery-3.2.1.min.js"></script>
	<script src="js1/bootstrap.js"></script>
</body>

<script>
	CKEDITOR.replace('savejudul');
	CKEDITOR.replace('editjudul');
	CKEDITOR.replace('savedeskripsi');
	CKEDITOR.replace('editdeskripsi');
</script>

</html>

<?php

if(isset ($_POST['editor'])){
	$text = $_POST['editor'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO tentangkami_deskripsi_homepage_rptra (content) VALUES ('$text')") or die(mysqli_error());
	if($query){
	}else{
		echo "ERROR";
	}

}

?>