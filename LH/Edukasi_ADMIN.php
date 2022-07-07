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
			<a class="navbar-brand">LH</a>
		</div>
	</nav>



	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit dan Tambah Artikel Edukasi LH Kebon Pala</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
				class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
		<td><a href="postEdukasi_LH.php">Tambah Artikel Edukasi</a></td>
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
					<td><a href="<?= 'updateEdukasi_LH.php?id=' .$fetch['id'] ?>">Update</a></td>

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

<script>
	CKEDITOR.replace('savejudul');
	CKEDITOR.replace('editjudul');
	CKEDITOR.replace('savedeskripsi');
	CKEDITOR.replace('editdeskripsi');
</script>

</html>
