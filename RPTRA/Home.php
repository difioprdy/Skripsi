<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </link>
    <script src="Home.js" defer></script>
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

    <title>WebsiteRPTRA</title>
</head>
<?php session_start(); ?>

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
                    </li>
                    <!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
                    <li><a style="font-family: Monserat;" href="Home.php">Menu</a>
                        <div class="dropDownMenu">
                            <a style="font-family: Monserat;" href="Product.php">Product</a>
                            <a style="font-family: Monserat;" href="BookFacillites.php">Booking Fasilitas</a>
                            <a style="font-family: Monserat;" href="#form_modal5" data-toggle="modal"
                                data-target="#form_modal5">Buku Tamu</a>
                            <a style="font-family: Monserat;" href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a>
                            <a style="font-family: Monserat;" href="ContactUs.php">Contact Us</a>
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
            <center>
                <div class="p3">
                    <p class="p4">PUSAT INFORMASI KELUARGA</p>
                </div>
            </center>
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
                <center>
                    <div class="a3">
                        <p class="a4">Tentang Kami</p>
                    </div>
                </center>

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


    <!-- Footer -->
    <footer id="footerBar">
        <div id="txtCopy">
            &#169 2016 - RPTRA Kebon Pala
        </div>
        <div id="sosmedImg">
            <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
        </div>
    </footer>


    <div class="modal fade" id="form_modal5" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="bukutamu_save.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">Buku Tamu</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Hari dan Tanggal</label> <br>
                                <input id="currentDate" type="date" name="tanggal" required="required" />
                                <input id="currentDate" type="time" name="waktu" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control" name="no_hp" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Instansi</label>
                                <input type="text" class="form-control" name="instansi" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Peserta</label>
                                <input type="text" class="form-control" name="peserta" />
                            </div>
                            <div class="form-group">
                                <label>Tujuan</label>
                                <input type="text" class="form-control" name="tujuan" />
                            </div>
                            <div class="form-group">
                                <label>Kesan dan Pesan</label>
                                <input type="text" class="form-control" name="kesandanpesan" />
                            </div>
                        </div>
                    </div>
                    <br style="clear:both;" />
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span> Close</button>
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save"></span>
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->


    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <script>
        var date = new Date();
        var currentDate = date.toISOString().slice(0, 10);
        var currentTime = date.getHours() + ':' + date.getMinutes();

        document.getElementById('currentDate').value = currentDate;
        document.getElementById('currentTime').value = currentTime;
    </script>



    <?php if(@$_SESSION['sukses']){ ?>
    <script>
        swal("Terima kasih!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>


</body>

</html>