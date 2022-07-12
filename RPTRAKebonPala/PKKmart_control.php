<?php
include('config.php');
$perintah="SELECT * FROM aktivasipkkmart";
$jalankan=mysqli_query($conn, $perintah);
$data=mysqli_fetch_array($jalankan);
$status="Aktif";
if($data['aktivasi']==$status){
    include('Product.php');
}else{
    echo"<center>
    <img width='30%' src='assets/warning.png' alt=''>
    <h3 style='font-family:'Monserat''>
    <h3 ><br/><br/>PKK MART TIDAK DIAKTIFKAN SEMENTARA</h3>
    <div style='margin-top:-15vh'>
    </div>
    </h1>
    </center>";
}
?>
