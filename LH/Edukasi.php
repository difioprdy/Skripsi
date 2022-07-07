<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
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


<!-- Isi -->
<div class="b1">
    <div class="b2">
        <center><div class="b3">
            <p class="b4">EDUKASI</p>
        </div></center>
    </div>
    <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `edukasi`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

    <center><img  class="b5" src=<?php echo $fetch['photo']?> alt="" height="450" width="470"></center>
    <center> <p class="b4"><?php echo $fetch['judul']?></p></center>
    <center>
        <br>
            <a href="<?= 'SMEdukasi.php?id=' .$fetch['id'] ?>"><button type="button" id="btnlihatlebih">LIHAT LEBIH</button></a>
        
    </center>
</div>


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