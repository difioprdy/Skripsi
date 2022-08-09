


<?php
include('config.php');
$perintah="SELECT * FROM aktivasibookingruang";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktif";
if($data['aktivasi']==$status){
    include('calendarbook_ruangserbaguna.php');
}else{
    include('TidakAktifBooking.php');
}
?>
