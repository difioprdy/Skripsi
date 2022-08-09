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
<html lang="en">
	<head>
	<style>
*{
    margin: 0;
    padding: 0;
}
@font-face{
    font-family: 'Monserat';
    src: url(Font/montserrat/Montserrat-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

#headerBar{
    background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d);
    height: 18vh ;
    background-size: cover;
    background-position: center;
    background-color: black;
	margin-bottom:5vh;
}

#navBar{
    max-width: 1200px;
    margin: auto;
}

#LogoImg{
    width: 180px;
    margin-top: 30px;
    height: auto;
    alt: "LogoImage";
    float: left;
}

#navBtn ul{
    margin-top: 50px;
    float: right;
    list-style-type: none;
}
#navBtn ul li{
    display: inline-block; 
}
#navBtn ul li a{
    text-decoration: none;
    color: #ffffff;
    transition: 0.5s ease;
    padding: 5px 20px;
    font-family: Arial, Helvetica, sans-serif;
}
#navBtn ul li a:hover{
    background-color: #ffffff;
    color: black;
}
#navBtn ul li:hover .dropDownMenu{
    display: block;
}
#navBtn ul li:hover a{
    color: black;
}

.dropDownMenu{
    display: none;
    position: absolute;
    background-color: white;
}
.dropDownMenu a{
    display: block;
    padding: 10px;
}
		#btnadd{
		border: none;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #5cb85c;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
	#btnupdate{
		border: none;
		padding: 10px 15px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #f0ad4e;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
	</style>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
        <script src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	</head>
<body>
	<!-- NavBar     -->
    <header id="headerBar">
        <div id="navBar">
            <div>
                <img id="LogoImg" src="assets/LH/logo2.jpeg" alt="LogoImage">
            </div>
            <div id="navBtn">
                <ul>
				<li><a  style="font-family: Monserat;" href="homepageadmin.html">Home</a>
                    </li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>


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