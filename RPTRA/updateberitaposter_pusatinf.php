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
    <title>Update Deskrispsi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>


    <form action="update_post_isiberitaposter_pusatinf.php" method="post">
        <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
        <div class="form-group" name="judul">
            <label>Judul Berita</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <input type="text" class="form-control" value=" <?= $row['judul']; ?>" name="judul" required="required" />
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Update</button>
    </form>

    

<!-- baru -->
			<form method="POST" enctype="multipart/form-data" action="update_post_isiberitaposter_pusatinf.php">
            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
						<div class="form-group">
							<h3>Post Sekarang</h3>
							<img src="<?= $row['photo']; ?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?= $row['photo']; ?>" />
							<h3>Post Baru</h3>
							<label>(Foto harus landscape/memanjang kesamping)</label>
							<input type="file" class="form-control" name="photo" value="<?= $row['photo']; ?>" required="required" />
						</div>
							<label>Nama Kegiatan Pada Foto</label>
							<input type="hidden" value="<?= $row['id']; ?>" name="id" />
                            <input type="hidden" type="text" class="form-control" value="hidden" name="nama_foto_hidden" required="required" />

                            
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
				</div>
			</form>
				

    <form action="update_post_isiberitaposter_pusatinf.php" method="post">
        <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Update</button>
    </form>

</body>


</html>