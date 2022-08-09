<?php
include('config.php');

$sql="SELECT * FROM aktivasibookingruang";
$perintah=mysqli_query($conn, $sql);
$fetch=mysqli_fetch_array($perintah);
?>

<?php
include('config.php');

$sql="SELECT * FROM aktivasibookingfutsal";
$perintah=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($perintah);
?>

<?php  
require 'config.php';
 $query ="SELECT * FROM bookings_futsal ORDER BY id DESC";  
 $result = mysqli_query($conn, $query);  
 ?>

<?php  
require 'config.php';
 $query ="SELECT * FROM bookings_ruangserbaguna ORDER BY id DESC";  
 $hasil = mysqli_query($conn, $query);  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #btndelete {
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #F67280;
            border-radius: 5px;
            transition-duration: 0.5s;
        }

        * {
            margin: 0;
            padding: 0;
        }

        @font-face {
            font-family: 'Monserat';
            src: url(Font/montserrat/Montserrat-Light.ttf);
            font-weight: normal;
            font-style: normal;
        }

        #headerBar {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), #211063);
            height: 18vh;
            background-size: cover;
            background-position: center;
            background-color: black;
            margin-bottom: 5vh;
        }

        #navBar {
            max-width: 1200px;
            margin: auto;
        }

        #LogoImg {
            width: 200px;
            margin-top: 30px;
            height: auto;
            alt: "LogoImage";
            float: left;
        }

        #navBtn ul {
            margin-top: 50px;
            float: right;
            list-style-type: none;
        }

        #navBtn ul li {
            display: inline-block;
        }

        #navBtn ul li a {
            text-decoration: none;
            color: #ffffff;
            transition: 0.5s ease;
            padding: 5px 20px;
            font-family: Monserat;
        }

        #navBtn ul li a:hover {
            background-color: #ffffff;
            color: black;
        }

        #navBtn ul li:hover .dropDownMenu {
            display: block;
        }

        #navBtn ul li:hover a {
            color: black;
        }

        .dropDownMenu {
            display: none;
            position: absolute;
            background-color: white;
        }

        .dropDownMenu a {
            display: block;
            padding: 10px;
        }

        /* Footer */
        #footerBar {
            margin-top: 10px;
            background-color: black;
            background-image: linear-gradient(#211063, rgba(0, 0, 0, 0.5));
            display: flex;
            justify-content: space-between;
        }

        #txtCopy {
            margin-left: 50px;
            display: flex;
            color: white;
            float: left;
            padding: 30px;
            font-family: Monserat;
        }

        #sosmedImg {
            display: flex;
            width: 30%;
            float: right;
            padding: 20px;
            margin-top: 10px;

        }

        .a10 {
            color: white;
            margin-left: 200px;
            font-family: Monserat;
        }
    </style>

    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <script src="ckeditor/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

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
                    <li><a href="HomepageADMIN.html">Home &nbsp;Admin</a>
                    </li>
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div>
    </header>

    
    <center>
        <!-- <div class="col-md-3"></div> -->
        <div class="container">
            <strong><h3 class="text-primary"
                style=" text-align: center; color:black; margin-bottom: 80px; font-family: Monserat;">Atur Booking
                Tempat
                RPTRA Kebon Pala</h3> </strong>

                <h3 align="center">Lapangan Futsal</h3>

            <div id="boxBestSeller">
                <div id="box">
                    <div id="shirt">
                        <img src="assets/fasilitas2.jpg" height="350" width="370" style="border-radius:15px">
                    </div>
                    <br>
                    <div id="text">
                        
                    </div>
                    <div id="btnBuy1">
                        <form action="calendarbook_futsalADMIN.php" method="post">
                            <button type="submit" id="btnBuyB">Atur Sesuai Tanggal dan Waktu</button>
                        </form>
                    </div>
                    <!-- . -->
                    <form role="form" method="post" action="proses_aktivasi_bookingfutsal.php">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo "$row[id]"?>">
                        </div>

                        <div class="form-group">
                            <label>Status halaman booking lapangan futsal saat ini : </label>
                            <input type="text" value="<?php echo "$row[aktivasi]"?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Pengaturan aktivasi booking Lapangan Futsal</label>
                            <br><input type="radio" id="html" name="status_form" value="Nonaktif">
                            <label for="html">Nonaktif</label><br>
                            <input type="radio" name="status_form" id="html" value="Aktif" />
                            <label for="html">Aktif</label><br>
                            <!-- <select class="form-control" name="status_form" id="status_form" required="">
                            <option>Nonaktif</option>
                            <option>Aktif</option>
                        </select> -->
                        </div>
                        <button style="margin-bottom:5vh;" type="submit" class="btn btn-primary" name="simpan"
                            id="simpan">save</button>
                    </form>

                    <!-- . -->

                    <h3 align="center">Ruang Serba Guna</h3>
                    <div id="box">
                        <div id="shirt">
                            <img src="assets/fasilitas1.png" height="350" width="370" style="border-radius:15px">
                        </div>
                        <br>
                        <div id="text">
                            
                        </div>
                        <div id="btnBuy1">
                            <form action="calendarbook_ruangserbagunaADMIN.php" method="post">
                                <button type="submit" id="btnBuyB">Atur Sesuai Tanggal dan Waktu</button>
                            </form>

                            <form role="form" method="post" action="proses_aktivasi_bookingruang.php">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo "$fetch[id]"?>">
                                </div>

                                <div class="form-group">
                                    <label>Status halaman booking ruang serba guna saat ini : </label>
                                    <input type="text" value="<?php echo "$fetch[aktivasi]"?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Pengaturan aktivasi booking Ruang Serbaguna</label>
                                    <br><input type="radio" id="html" name="status_form" value="Nonaktif">
                                    <label for="html">Nonaktif</label><br>
                                    <input type="radio" id="html" name="status_form" value="Aktif">
                                    <label for="html">Aktif</label><br>
                                    <!-- <select class="form-control" name="status_form" id="status_form" required="">
                                    <option>Nonaktif</option>
                                    <option>Aktif</option>
                                </select> -->
                                </div>
                                <button type="submit" class="btn btn-primary" name="simpan" id="simpan">save</button>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </center>

    <div class="col-md-3"></div>
    <br /><br />
    <div class="container">
        <h3 align="center">Data Registrasi Lapangan Futsal</h3>
        <br />
        <div class="table-responsive">
            <table id="futsal" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Nomor Telfon</td>
                        <td>Tanggal yang dibooking</td>
                        <td>Waktu yang dibooking</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["telfon"].'</td>  
                                    <td>'.$row["date"].'</td>  
                                    <td>'.$row["timeslot"].'</td>  
                                    <td><button style="color:white" type="button" id="btndelete" data-toggle="modal"
                                data-target="#'.$row['id'].'">Delete</button></td>
                               </tr>  


                               <div class="modal fade" id='.$row["id"].' role="dialog">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           <h4 class="modal-title">Hapus Data Booking</h4>
                                       </div>
                                       <div class="modal-body">
                                           Anda akan menghapus data booking atas nama <b>'.$row["name"].'</b>,
                                           hubungi nomor telfonnya <b>('.$row["telfon"].')</b> untuk memberitahu
                                           reschedule booking tempat atau keperluan lain.
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deleteDataBooking.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Belum menghubungi.</button>
                                               <input type="hidden" name="id" value="'.$row["id"].'">
                                               <button value="DELETE" name="deleteFutsal" class="btn btn-danger" type="submit">Sudah
                                                   menghubungi, hapus
                                                   sekarang.</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>

                               ';  
                          }  
                          ?>
            </table>
        </div>
    </div>


    <br /><br />
    <div class="container">
        <h3 align="center">Data Registrasi Ruang Serba Guna</h3>
        <br />
        <div class="table-responsive">
            <table id="ruang" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Nomor Telfon</td>
                        <td>Tanggal yang dibooking</td>
                        <td>Waktu yang dibooking</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <?php  
                          while($row = mysqli_fetch_array($hasil))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["telfon"].'</td>  
                                    <td>'.$row["date"].'</td>  
                                    <td>'.$row["timeslot"].'</td>  
                                    <td><button style="color:white" type="button" id="btndelete" data-toggle="modal"
                                data-target="#'.$row['id'].'">Delete</button></td>
                               </tr>  


                               <div class="modal fade" id='.$row["id"].' role="dialog">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           <h4 class="modal-title">Hapus Data Booking</h4>
                                       </div>
                                       <div class="modal-body">
                                           Anda akan menghapus data booking atas nama <b>'.$row["name"].'</b>,
                                           hubungi nomor telfonnya <b>('.$row["telfon"].')</b> untuk memberitahu
                                           reschedule booking tempat atau keperluan lain.
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deleteDataBooking.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Belum menghubungi.</button>
                                               <input type="hidden" name="id" value="'.$row["id"].'">
                                               <button value="DELETE" name="deleteRuang" class="btn btn-danger" type="submit">Sudah
                                                   menghubungi, hapus
                                                   sekarang.</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>





                               ';  
                          }  
                          ?>
            </table>
        </div>
    </div>


    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>

    <script>
        $(document).ready(function () {
            $('#futsal').DataTable();
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#ruang').DataTable();
        });
    </script>



<footer id="footerBar">
  <div id="txtCopy">
    &#169 2022 - RPTRA Kebon Pala
  </div>
  <div id="sosmedImg">
    <p class="a10">
  </div>
</footer>

</body>

<script>
    CKEDITOR.replace('savejudul');
    CKEDITOR.replace('editjudul');
    CKEDITOR.replace('savedeskripsi');
    CKEDITOR.replace('editdeskripsi');
</script>

</html>


<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<?php

if(isset ($_POST['editor'])){
	$text = $_POST['editor'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO headline_deskripsi_homepage_rptra (content) VALUES ('$text')") or die(mysqli_error());
	if($query){
	}else{
		echo "ERROR";
	}

}

?>