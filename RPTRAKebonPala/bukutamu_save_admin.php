

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
    $insert = mysqli_query($conn, "INSERT INTO bukutamu (tanggal,waktu,nama,no_hp,email,instansi,peserta,tujuan,kesandanpesan) VALUES ('$tanggal','$waktu','$nama','$no_hp','$email','$instansi','$peserta','$tujuan','$kesandanpesan')");
    
    //set session sukses
    $_SESSION["sukses1"] = 'Data Buku Tamu Berhasil Disimpan';
    
    //redirect ke halaman index.php
    header('Location: BukuTamu_ADMIN.php');   
    
?>



