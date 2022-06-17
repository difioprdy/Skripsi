<?php
include('config.php');
$perintah="SELECT * FROM aktivasibookingfutsal";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktifkan kembali";
if($data['aktivasi']==$status){
    include('calendarbook_futsal.php');
}else{
    echo"<br/><br/>booking tidak diaktifkan sementara";
}
?>
