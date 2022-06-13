<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
        <link rel="stylesheet" href="LH.css">
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

    <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

<!-- LandingPage -->
<div class="landingpage">
    <div class="h1">
        <div class="h2">
            <div class="boxed">
                <p class="boxed1">
                    <!-- Lingkungan Hidup  -->
                    <?php echo $fetch['judul']?>
                </p>
            </div>
            <?php
					}
				?>
                
                <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_deskripsi_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

            <div class="boxed2">
                <p>
                    <!-- Lingkungan Hidup merupakan sebuah wadah yang diciptakan oleh
                    pemerintah DKI Jakarta yang bertujuan untuk mengedukasi masyarakat 
                    sekitar cara-cara untuk menjaga lingkungan dan juga cara pengolahan 
                    limbah masyarakat yang terdapat di sekitar lingkungan masyarakat. <br> <br>
                    Tugas dari Lingkunga Hidup setiap harinya adalah berkebun, mengumpulkan
                    limbah masyarakat disekitar Lingkungan Hidup, memproduksi produk yang
                    berasal dari limbah masyarakat maupun dari hasil kebun Lingkungan Hidup
                    itu sendiri. -->

                    <?php echo $fetch['content']?>
                </p>
            </div>
            
        </div>

        <?php
					}
				?>


<?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

        <div class="h3">
            <!-- <img width="600vh" height="40%" style="border-radius: 15px;" src="assets/LH/LH1.png" alt=""> -->
            <img height="650" width="650" style="border-radius: 15px;" src="<?php echo $fetch['photo']?>" alt="">
        </div>
    </div>
</div>

<?php
					}
				?>



<!-- AboutUs -->
<div>
    <div>
        <div class="a1">
            
            <div class="a2">
                <center><div class="a3">
                    <p class="a4">Tentang Kami</p>
                </div></center>
            </div>

            <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `tentangkami_deskripsi_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

            <center>
            <div class="a5">
                <p>
                    <!-- Lingkungan Hidup merupakan sebuah komunitas yang berada di suatu daerah RT/RW yang
                    memiliki tujuan untuk pengembangan tanaman yang terdapat pada RT/RW, tempat terakhir
                    pembuangan sampah di daerah RT/RW dan juga memberikan tempat untuk menghasilkan produk-
                    produk yang berkualitas untuk lingkungan sekitar yang dibuat dari bahan-bahan bekas.
                    Lingkungan Hidup Kebon Pala juga menghasilkan produk seperti pupuk kompos, kerajinan tangan,
                    tumbuhan-tumbuhan dan minuman dari hasil tumbuhan. Lorem ipsum dolor sit, amet consectetur 
                    adipisicing elit. Possimus autem sapiente, unde reprehenderit illo cumque fugiat ut! 
                    Inventore praesentium culpa doloribus voluptatum maiores ratione, 
                    fugit voluptatibus nisi laudantium porro tempora. -->

                    <?php echo $fetch['content']?>
                </p>
                </div>
            </center>
            <?php
					}
				?>

<?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_lh`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

            <div id="slider">
                <!-- <img id="imageSlide" src="assets/LH/LH1.png">
                <img id="imageSlide" src="assets/LH/LH2.jpg">
                <img id="imageSlide" src="assets/LH/LH3.jpg">
                <img id="imageSlide" src="assets/LH/LH4.jpg"> -->

                <img id="imageSlide" style="border-radius: 15px;" src="<?php echo $fetch['photo']?>" alt="">

            </div>
            <?php
					}
				?>
        </div>
    </div>    
</div>

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