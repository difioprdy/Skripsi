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
<style>
    	#btnupdate{
		border: none;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #32CD32;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
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
    background-image:linear-gradient(rgba(0,0,0,0.5),#211063);
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
    width: 200px;
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
    font-family: Monserat;
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
</style>
    <title>Update Deskrispsi</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <!-- NavBar     -->
    <header id="headerBar">
        <div id="navBar">
            <div>
                <img style="width: 5%;" id="LogoImg" src="assets/logo1.jpeg" alt="">
                <img id="LogoImg" src="assets/Logo2.png" alt="LogoImage"> 
                <img style="width: 5%;" id="LogoImg" src="assets/logo3.jpeg" alt=""> 
            </div>
            <div id="navBtn">
                <ul>
                    <li><a href="Home.html">Home</a>
                        <div class="dropDownMenu">
                            <a href="Product.html">Product</a>
                            <a href="BookFacillites.html">Booking Fasilitas</a>
                            <a href="ContactUs.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a style="color:red" href="Login.html">Logout</a></li>
                </ul>
            </div> 
    </header>

    <form action="update_post_isiberitaposter_pusatinf.php" method="post">
        <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
        <div class="form-group" name="judul">
            <label style="font-family:'Monserat'">Judul Berita</label>
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <input type="text" class="form-control" value=" <?= $row['judul']; ?>" name="judul" required="required" />
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button class="btn btn-primary" type="submit" id="btnupdate" name="save">Update</button>
    </form>

    <form style="margin-top:5vh;" action="update_post_isiberitaposter_pusatinf.php" method="post">
        <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM pusatinformasi WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button class="btn btn-primary" type="submit" id="btnupdate" name="save">Update</button>
    </form>

</body>


</html>