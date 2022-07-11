<?php

    //gunakan fungsi di bawah ini agar session bisa dibuat
    session_start();
    
    //koneksi ke database latihan
    require 'config.php';

    //ambil data yang diparsing dari form sebelumnya
    $tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
    $nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
	$instansi = $_POST['instansi'];
	$peserta = $_POST['peserta'];
    $tujuan = $_POST['tujuan'];
    $kesandanpesan = $_POST['kesandanpesan'];
    
    //masukkan data ke dalam tabel post
    $query = "INSERT INTO bukutamu (tanggal,waktu,nama,no_hp,email,instansi,peserta,tujuan,kesandanpesan) VALUES ('$tanggal','$waktu','$nama','$no_hp','$email','$instansi','$peserta','$tujuan','$kesandanpesan')";
    $hasil = mysqli_query($conn,$query);
    //set session sukses
    $_SESSION["sukses2"] = 'Data Buku Tamu Berhasil Disimpan';
    
    //redirect ke halaman index.php

    if($hasil){
        echo "<script language='javascript' type='text/javascript'>alert('Terima kasih!');  
      </script>";
 echo "<meta http-equiv='refresh' content='1; URL=Home.php'>";
     }else{
         echo "gagal menghapus data";
     }


    // header('Location: Home.php');   
    
?>