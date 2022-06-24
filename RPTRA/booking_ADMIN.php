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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand">RPTRA</a>
        </div>
    </nav>


    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary"
            style=" text-align: center; color:#727272; margin-bottom: 80px; font-family: Monserat;">Atur Booking Tempat
            RPTRA Kebon Pala</h3>
        <div id="boxBestSeller">
            <div id="box">
                <div id="shirt">
                    <img src="assets/fasilitas.jpg" id="shirt1">
                </div>
                <div id="text">
                    <span id="textBox">Lapangan Futsal</span><br>
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
                        <select class="form-control" name="status_form" id="status_form" required="">
                            <option>Nonaktif</option>
                            <option>Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan" id="simpan">save</button>
                </form>

                <!-- . -->
                <div id="box">
                    <div id="shirt">
                        <img src="assets/fasilitas.jpg" id="shirt1">
                    </div>
                    <div id="text">
                        <span id="textBox">Ruang Serba Guna</span><br>
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
                                <select class="form-control" name="status_form" id="status_form" required="">
                                    <option>Nonaktif</option>
                                    <option>Aktif</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan" id="simpan">save</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">Atur Data Booking RPTRA Kebon Pala</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <h3 class="text-primary">Daftar Booking Lapangan Futsal</h3>
        <table class="table table-bordered">
            <thead class="alert-info">
                <tr>
                    <th>Nama</th>
                    <th>Nomor telfon</th>
                    <th>Tanggal yang dibooking</th>
                    <th>Waktu yang dibooking</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `bookings_futsal`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
                <tr>
                    <td><?php echo $fetch['name']?></td>
                    <td><?php echo $fetch['telfon']?></td>
                    <td><?php echo $fetch['date']?> (Tahun-Bulan-Tanggal)</td>
                    <td><?php echo $fetch['timeslot']?></td>
                    <td><button type="button" data-toggle="modal"
                            data-target="#<?php echo $fetch['id'];?>">Delete</button></td>
                </tr>

                <div class="modal fade" id="<?php echo $fetch['id'];?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Hapus Data Booking</h4>
                            </div>
                            <div class="modal-body">
                                Anda akan menghapus data booking atas nama <b><?php echo $fetch['name']?></b>,
                                hubungi nomor telfonnya <b>(<?php echo $fetch['telfon']?>)</b> untuk memberitahu
                                reschedule booking tempat atau keperluan lain.
                            </div>

                            <div class="modal-footer">
                                <form action="deleteDataBooking.php" method="post">
                                    <button class="btn btn-default" data-dismiss="modal">Belum menghubungi.</button>
                                    <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                                    <button value="DELETE" name="deleteFutsal" class="btn btn-danger"
                                        type="submit">Sudah
                                        menghubungi, hapus
                                        sekarang.</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
            </tbody>
        </table>
        <!-- alert -->

        <!-- - -->
        <br />
        <!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->
        <h3 class="text-primary">Daftar Booking Ruang Serbaguna</h3>
        <table class="table table-bordered">
            <thead class="alert-info">
                <tr>
                    <th>Nama</th>
                    <th>Nomor telfon</th>
                    <th>Tanggal yang dibooking</th>
                    <th>Waktu yang dibooking</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `bookings_ruangserbaguna`") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['telfon']?></td>
                    <td><?php echo $row['date']?> (Tahun-Bulan-Tanggal)</td>
                    <td><?php echo $row['timeslot']?></td>
                    <td><button type="button" data-toggle="modal"
                            data-target="#<?php echo $row['id'];?>">Delete</button></td>
                </tr>

                <div class="modal fade" id="<?php echo $row['id'];?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">Hapus Data Booking</h4>
                            </div>
                            <div class="modal-body">
                                Anda akan menghapus data booking atas nama <b><?php echo $row['name']?></b>,
                                hubungi nomor telfonnya <b>(<?php echo $row['telfon']?>)</b> untuk memberitahu
                                reschedule booking tempat atau keperluan lain.
                            </div>

                            <div class="modal-footer">
                                <form action="deleteDataBooking.php" method="post">
                                    <button class="btn btn-default" data-dismiss="modal">Belum menghubungi.</button>
                                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                    <button value="DELETE" name="deleteRuang" class="btn btn-danger" type="submit">Sudah
                                        menghubungi, hapus
                                        sekarang.</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
</body>

<script>
    CKEDITOR.replace('savejudul');
    CKEDITOR.replace('editjudul');
    CKEDITOR.replace('savedeskripsi');
    CKEDITOR.replace('editdeskripsi');
</script>

</html>

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