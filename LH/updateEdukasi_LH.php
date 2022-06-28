<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : Edukasi_ADMIN.php?success=0');
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Artikel Edukasi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>


<!-- baru -->
<form method="POST" enctype="multipart/form-data" action="update_post_edukasi_LH.php">
        <?php $query = mysqli_query($conn, "SELECT * FROM edukasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
        <div class="form-group">
            <h3>Thumbnail Sekarang</h3>
            <img src="<?= $row['photo']; ?>" height="120" width="150" />
            <input type="hidden" name="previous" value="<?= $row['photo']; ?>" />
            <h3>Thumbnail Baru</h3>
            <label>(Foto harus landscape/memanjang kesamping)</label>
            <input type="file" class="form-control" name="photo" value="<?= $row['photo']; ?>" required="required" />
        </div>
        <label>Judul Artikel Edukasi</label>
        <input type="hidden" value="<?= $row['id']; ?>" name="id" />
        <input type="text" class="form-control" value="<?= $row['judul']; ?>" name="judul"
            required="required" />


        <br style="clear:both;" />
        <div class="modal-footer">
            <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
        </div>
    </form>

    <form action="update_post_edukasi_LH.php" method="post">
        <?php $query = mysqli_query($conn, "SELECT * FROM edukasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
        <div class="form-group">
            <label>Isi</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
                <textarea class="ckeditor" name="isi">
            <?= $row['isi']; ?>
            </textarea>

        </div>

        <div class="form-group">
            <label>Link Youtube</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->

            <input type="text" class="form-control" value=" <?= $row['url']; ?>" name="url"
                required="required" />

        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="edit1">Update</button>
    </form>



    


</body>


</html>