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
		<h3 class="text-primary">Edit Product PKK Mart RPTRA Kebon Pala Berseri</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button>
		<br /><br />
		<h3 class="text-primary">Ganti Foto dan Nama Foto</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Foto Product</th>
					<th>Nama Product</th>
					<th>Kategori Product</th>
					<th>Harga Product</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `tbl_product`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['nama_product']?></td>			
					<td><?php echo $fetch['kategori']?></td>
					<td><?php echo $fetch['price']?></td>		
					
					<td><a href="<?= 'updateProduct_RPTRA.php?id=' .$fetch['id'] ?>">Update</a></td>
			
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
			<form method="POST" action="ProductRPTRA_save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Tambah Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Foto Product</label>
							<input type="file" class="form-control" name="photo" required="required"/>
						</div>
						<div class="form-group">
							<label>Nama Product</label>
							<input type="text" class="form-control" name="nama_product" required="required"/>
						</div>
						<div class="form-group">
							<label>Kategori Product</label>
							<input type="text" class="form-control" name="kategori" required="required"/>
						</div>
						<div class="form-group">
							<label>Harga Product (Rp.)</label>
							<input type="number" type="text" class="form-control" name="price" required="required"/>
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