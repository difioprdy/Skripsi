<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM usersrptra WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin RPTRA Kebon Pala</title>
</head>
<body>

<div align="center">
            <span style="font-size:40px;">Admin Website RPTRA Kebon Pala </span>
        </div>

        <hr />

<div align="center">
            <span style="font-size:40px;">Pilih Page yang ingin diedit</span>
        </div>

<div class="center">
            <div align="center">
                <div flex-parent jc-center>
                    <button class="btn btn-primary btn-sq-lg" style='margin-right:20px'>
                        <span class="fa fa-users fa-2x"></span><br />
                        Edit <br> Pengumuman
                    </button>

                    <button class="btn btn-primary btn-sq-lg" style='margin-right:20px'>
                        <span class="fa fa-truck-pickup fa-2x"></span><br />
                        Edit Halaman <br> Product
                    </button>

                    <button class="btn btn-primary btn-sq-lg" style='margin-right:20px'>
                        <span class="fa fa-book fa-2x"></span><br />
                        Edit <br> "Tentang Kami"
                    </button>

                    <button class="btn btn-primary btn-sq-lg">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Edit <br> Headline Menu Utama
                    </button>

                    <button class="btn btn-primary btn-sq-lg">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Edit <br> PIN registrasi
                    </button>

                    <button class="btn btn-primary btn-sq-lg">
                        <span class="fa fa-user-circle fa-2x"></span><br />
                        Edit dan Melihat <br> Reservasi
                    </button>

                </div>
            </div>
        </div>
</body>
</html>