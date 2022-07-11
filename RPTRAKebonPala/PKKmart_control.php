<?php
include('config.php');
$perintah="SELECT * FROM aktivasipkkmart";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktif";
if($data['aktivasi']==$status){
    include('Product.php');
}else{
    echo"<br/><br/>booking tidak diaktifkan sementara";
}
?>
