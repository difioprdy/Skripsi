<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
        <link rel="stylesheet" href="Home.css">
        <title>WebsiteRPTRA</title>
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
                    <li><a style="font-family: Monserat;" href="Home.php">Home</a>
                        <div class="dropDownMenu">
                            <a style="font-family: Monserat;" href="Product.html">Product</a>
                            <a style="font-family: Monserat;" href="BookFacillites.html">Booking Fasilitas</a>
                            <a style="font-family: Monserat;" href="ContactUs.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a href="Partner.php">Program Kegiatan</a></li>
                    <li><a style="color:red; font-family: Monserat;" href="login.php">Login</a></li>
                </ul>
            </div> 
    </header>
    <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
<!-- LandingPage -->
    <div class="landingpage">
        <div class="h1">
            <div class="h2">
                <div class="boxed">

                
                    <p class="boxed1">
                        <!-- Ruang Publik 
                        Terpadu <br> Ramah Anak -->
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
                        <!-- Ruang Publik Terpadu Ramah Anak (RPTRA) merupakan ruang publik
                        berupa ruang terbuka hijau ramah anak yang dilengkapi dengan berbagai 
                        fasilitas yang mendukung perkembangan anak, kenyamanan orangtua,
                        serta tempat berinteraksi seluruh warga dari berbagai kalangan. <br> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi consectetur commodi quis ad facilis dolorum nihil voluptatum, nulla, in, ex cumque iste fuga odit enim iure! Distinctio nulla quo qui! -->

                        <?php echo $fetch['content']?>
                    </p>


                    

                </div>
            </div>
            <div class="h3">

            <?php
					}
				?>

            <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>
            <img height="500" width="700" style="border-radius: 15px;" src="<?php echo $fetch['photo']?>" alt="">
                <!-- <img style="border-radius: 15px;" src="assets/gambar1.jpg" alt=""> -->
            </div>
        </div>
    </div>
    

    <?php
					}
				?>

<!-- Pengumuman     -->
    <div class="p1">
        <div class="p2">
            <center><div class="p3">
                <p class="p4">PUSAT INFORMASI KELUARGA</p>
            </div></center>
        </div>
 
        <div class="p5">
            <img class="p6" src="assets/News/news1.jpeg" alt="">
            <img class="p7" src="assets/News/news2.jpg" alt="">
            <img class="p8" src="assets/News/news3.jpg" alt="">
        </div>

        <div class="p9">
            <div class="p10">
                <p style="text-align: center; padding-top: 5px;">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Velit laboriosam iure fuga,
                    explicabo illo quibusdam perspiciatis officia nulla
                    excepturi? Veniam quas possimus sed id nisi, c 
                    onsequatur odit pariatur corporis voluptas! 
                </p>
            </div>
            <div class="p11">
                <p style="text-align: center; padding-top: 5px;">
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Velit laboriosam iure fuga,
                    explicabo illo quibusdam perspiciatis officia nulla
                    excepturi? Veniam quas possimus sed id nisi, c 
                    onsequatur odit pariatur corporis voluptas! 
                </p>
            </div>
            <div class="p12">
                <p style="text-align: center; padding-top: 5px;">
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Velit laboriosam iure fuga,  
                    explicabo illo quibusdam perspiciatis officia nulla
                    excepturi? Veniam quas possimus sed id nisi, c 
                    onsequatur odit pariatur corporis voluptas! 
                </p>
            </div>
        </div>
    </div>
    
<!-- AboutUs-->
<div>
    <div class="a1">
        
        <div class="a2">
            <center><div class="a3">
                <p class="a4">Tentang Kami</p>
            </div></center>

            <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `tentangkami_deskripsi_homepage_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

            <center>
            <div class="a5">
                <p>
                    <!-- RPTRA Kebon Pala juga sering melakukan kegiatan-kegiatan tertentu yang bertujuan
                    untuk mendukung tumbuh kembang anak-anak yang terdapat di sekitar RPTRA Kebon Pala.
                    Selain untuk itu juga, RPTRA Kebon Pala juga menyelenggarakan beberapa kegiatan lain
                    seperti tempat untuk vaksinisasi Covid-19, pembelajaran kepada ibu-ibu PKK mengenai
                    tumbuhan dan juga merawat anak dan juga sebagai tempat pelaksanaan kegiatan pengajian.
                    Dapat dilihat di bawah contoh-contoh dari kegiatan-kegiatan yang di lakukan oleh RPTRA
                    Kebon Pala. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus autem 
                    sapiente, unde reprehenderit illo cumque fugiat ut! Inventore praesentium culpa doloribus                        voluptatum maiores ratione, fugit voluptatibus nisi laudantium porro tempora.
                 -->
                 <?php echo $fetch['content']?>
                </p>
                </div>
            </center>

            <?php
					}
				?>

            <div class="a6">
                <div class="a10">
                    <div class="a9">
                        <p class="a7">01</p>
                        <svg width="5" height="110">
                            <rect width="300" height="80" style="fill:#fbd043" />
                            test  
                        </svg>
                        <p class="a8">Penanaman Pohon</p>
                    </div>

                    <div class="a11">
                        <p class="a7">02</p>
                        <svg width="5" height="110">
                            <rect width="300" height="80" style="fill:#fbd043" />
                            test  
                        </svg>
                        <p class="a8">Kegiatan Olahraga</p>
                    </div>

                    <div class="a12">
                        <p class="a7">03</p>
                        <svg width="5" height="110">
                            <rect width="300" height="80" style="fill:#fbd043" />
                            test  
                        </svg>
                        <p class="a8">Kegiatan Pengajian</p>
                    </div>
                </div>

                <div class="a13">
                    <img class="a14" src="assets/Event/event2.jpg" alt="">
                    <img class="a15" src="assets/Event/event1.jpg" alt=""> 
                    <img class="a16" src="assets/Event/event3.jpg" alt="">                         
                </div>

            </div>

        </div>

    </div>

<!-- StrukturOrganisasi -->
<div class="s1">
        <div class="s4">
            <center><div class="s2">
                <p class="s3">STRUKTUR ORGANISASI</p>
            </div></center>
        </div>
        <?php
        require 'config.php';
        $query = mysqli_query($conn, "SELECT * FROM `struktur_organisasi_rptra`") or die(mysqli_error());
        while($fetch = mysqli_fetch_array($query)){
    ?>

<!-- <img style="margin-top: 60px;" src="assets/struktur organisasi.png" alt=""> -->
    <center><img style="margin-top: 60px;" src="<?php echo $fetch['photo']?>"/></center>
    <?php
					}
				?>
</div>

</div>

<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
    </div>
</footer>


</body>
</html>