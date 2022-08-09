<?php
include('config.php');
$perintah="SELECT * FROM aktivasibookingfutsal";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktif";
if($data['aktivasi']==$status){
    include('calendarbook_futsal.php');
}else{
    include('TidakAktifBooking.php');
}
?>