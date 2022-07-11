
<?php include('config.php'); ?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    header('Location : Edukasi.php?success=0');
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>


    <style>
	.boxed{
    margin-bottom: 10px;
    background: #dbffa2;
    border-radius: 40px;
    width: 500px;
    height: 90px;
}
.boxed1{
    padding-top: 30px;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    font-family: Monserat;
}
   
</style>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
        <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
        <link rel="stylesheet" href="Edukasi.css">
        <title>WebsiteLH</title>
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
                    <li><a  style="font-family: Monserat;" href="LH.html">Home</a>
                        <div class="dropDownMenu">
                            <a  style="font-family: Monserat;" href="Productlh.html">Product</a>
                            <a  style="font-family: Monserat;" href="ContactUslh.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a  style="font-family: Monserat;" href="Edukasi.html">Edukasi</a></li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.html">Login</a></li>
                </ul>
            </div> 
    </header>


<!-- Isi --><?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `edukasi` WHERE id= '$id'") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
<div class="b1">



<!-- JUDUL ARTIKEL -->
<p class="boxed1">
                    <?php echo $fetch['judul']?>
                </p>
    <center><img  class="b5" src=<?php echo $fetch['photo']?> alt="" height="450" width="470"></center>
    <center>
        <div class="b6">
            <!-- ISI ARTIKEL -->
            <p><?php echo $fetch['isi']?>
            </p>
        </div>
    </center>
</div>

<!-- VIDEO YOUTUBE -->
<center>
    <strong style="font-size: 50px;">Video Youtube</strong>
<br>
    <?php 

$data = $fetch['url'];
$final = str_replace('watch?v=', 'embed/', $data);
echo "<center>
    <iframe
        src='$final'
        frameborder='0'
        allow='autoplay; encrypted-media'
        allowfullscreen height='600' width='1000'>
        
    </iframe>
    </center>   
";
// }
?>

</center>




<?php
					}
				?>
<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Anwar <br> 0821-1157-0918</p>
    </div>
</footer>

</body>
</html>