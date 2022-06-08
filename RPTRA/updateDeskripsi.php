<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : headlineHomepageADMIN.php?success=0');
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Deskrispsi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="update_post_deskripsi.php" method="post">
        <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM headline_deskripsi_homepage_rptra WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit">Update</button>
    </form>
</body>


</html>