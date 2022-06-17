<?php
include('config.php');
$perintah="SELECT * FROM aktivasibookingruang";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktifkan kembali";
if($data['aktivasi']==$status){
    include('calendarbook_ruangserbaguna.php');
}else{
    echo"<br/><br/>booking tidak diaktifkan sementara";
}
?>
