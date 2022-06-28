<?php include('config.php'); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Tambah Artikel Edukasi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>


    <form action="edukasi_save.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
            <label>Thumbnail Edukasi</label>
            <input type="file" class="form-control" name="photo"  required="required" />
        </div>

        <div class="form-group">
            <label>Judul Edukasi</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <input type="text" class="form-control" name="judul" required="required" />
        </div>

        <div class="form-group">
            <label>Isi</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <textarea class="ckeditor" class="form-control" name="isi">
            </textarea>
        </div>

        <div class="form-group">
            <label>Link Video Youtube</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <input type="text" class="form-control" name="url"/>
            </textarea>
        </div>

        <button type="submit" name="save">Post</button>
    </form>
</body>


</html>