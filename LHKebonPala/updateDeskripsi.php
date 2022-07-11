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
    <style>
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
        #tst{
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
    </style>
    <title>Update Deskrispsi</title>
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
                    <li><a style="font-family: Monserat;" href="LH.html">Home</a>
                    <li><a style="color:red; font-family: Monserat;" href="Login.html">Logout</a></li>
                </ul>
            </div> 
    </header>
    <h3 style="font-family:'Monserat'" class="text-primary">Edit Deskripsi Headline</h3>
		<hr style="border-top:1px dotted #ccc;" />
    <form action="update_post_deskripsi.php" method="post">
        <textarea class="ckeditor" name="editor">
            <?php $query = mysqli_query($conn, "SELECT * FROM headline_deskripsi_homepage_lh WHERE id= '$id'");
            $row = mysqli_fetch_array($query);
            ?>
            <?= $row['content']; ?>
        </textarea>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" id="tst">Update</button>
    </form>
</body>


</html>