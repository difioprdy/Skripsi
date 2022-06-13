<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : program_kegiatanADMIN.php?success=0');
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Deskrispsi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="update_post_deskripsi_ProgramKegiatan.php" method="post">
        <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM halaman_utama_program_kegiatan WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['deskripsi']; ?>
        </textarea>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Update</button>
    </form>
</body>


</html>