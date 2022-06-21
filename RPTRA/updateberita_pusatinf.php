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