<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
        <script src="ckeditor/ckeditor.js"></script>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand">RPTRA</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Pusat Informasi Keluarga Homepage RPTRA Kebon Pala Berseri</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Tambah berita dengan poster/gambar</button>
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
					<td><img src="<?php echo $row['photo']?>" height="80" width="100"/></td>
					<td><?php echo $row['judul']?></td>	
					<td><?php echo $row['content']?></td>			
					<td><a href="<?= 'updateberitaposter_pusatinf.php?id=' .$row['id'] ?>">Update</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br /><br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal2"><span class="glyphicon glyphicon-plus"></span> Tambah berita hanya tulisan</button>
		
		<h3 class="text-primary">Edit Berita</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Judul Berita</th>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `pusatinformasi` WHERE tipe_informasi = 'no text'") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['judul']?></td>	
					<td><?php echo $row['content']?></td>			
					<td><a href="<?= 'updateberita_pusatinf.php?id=' .$row['id'] ?>">Update</a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	</div>
 

	
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
							<input type="file" class="form-control" name="photo"/>
						</div>
						<div class="form-group">
							<label>Judul Berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<input type="text" class="form-control" name="judul" required="required"/>
						</div>

						<div class="form-group">
							<label>Isi berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<textarea class="ckeditor" name="content" required="required"></textarea>
							
						</div>

						<div class="form-group">
						<input type="hidden" type="text" value="poster" class="form-control" name="tipe_informasi"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
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
							<input type="text" class="form-control" name="judul" required="required"/>
						</div>

						<div class="form-group">
							<label>Isi berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<textarea class="ckeditor" name="content" required="required"></textarea>
							
						</div>

						<div class="form-group">
						<input type="hidden" type="text" value="no text" class="form-control" name="tipe_informasi"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="editor"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

 
<script src="js1/jquery-3.2.1.min.js"></script>	
<script src="js1/bootstrap.js"></script>	
</body>	

<script>
                        CKEDITOR.replace( 'savejudul' );
                        CKEDITOR.replace( 'editjudul' );
                        CKEDITOR.replace( 'savedeskripsi' );
                        CKEDITOR.replace( 'editdeskripsi' );
                </script>

</html>

