<?php  
require 'config.php';
 $query ="SELECT * FROM bukutamu ORDER BY id DESC";  
 $result = mysqli_query($conn, $query);  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
*{
    margin: 0;
    padding: 0;
}
@font-face{
    font-family: 'Monserat';
    src: url(Font/montserrat/Montserrat-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

#headerBar{
    background-image:linear-gradient(rgba(0,0,0,0.5),#211063);
    height: 18vh ;
    background-size: cover;
    background-position: center;
    background-color: black;
    margin-bottom:5vh;
}

#navBar{
    max-width: 1200px;
    margin: auto;
}

#LogoImg{
    width: 200px;
    margin-top: 30px;
    height: auto;
    alt: "LogoImage";
    float: left;
}

#navBtn ul{
    margin-top: 50px;
    float: right;
    list-style-type: none;
}
#navBtn ul li{
    display: inline-block; 
}
#navBtn ul li a{
    text-decoration: none;
    color: #ffffff;
    transition: 0.5s ease;
    padding: 5px 20px;
    font-family: Monserat;
}
#navBtn ul li a:hover{
    background-color: #ffffff;
    color: black;
}
#navBtn ul li:hover .dropDownMenu{
    display: block;
}
#navBtn ul li:hover a{
    color: black;
}

.dropDownMenu{
    display: none;
    position: absolute;
    background-color: white;
}
.dropDownMenu a{
    display: block;
    padding: 10px;
}	
/* Footer */
#footerBar{
    margin-top: 5vh;
    background-color:black;
    background-image: linear-gradient(#211063,rgba(0,0,0,0.5));
    display: flex;
    justify-content: space-between;
}

#txtCopy{
    margin-left: 50px;
    display: flex;
    color: white;
    float: left;
    padding: 30px;
    font-family: Monserat;
}

#sosmedImg{
    display: flex;
    width: 30%;
    float: right;
    padding: 20px;
    margin-top: 10px;
    
}
.a10{
    color: white;
    margin-left: 200px;
    font-family: Monserat;
}
</style>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <!-- alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </link>
    <!-- - -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    
    <!-- alert -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

    
</head>
<?php session_start(); ?>

<body>
    <!-- NavBar     -->
    <header id="headerBar">
        <div id="navBar">
            <div>
                <img style="width: 5%;" id="LogoImg" src="assets/logo1.jpeg" alt="">
                <img id="LogoImg" src="assets/Logo2.png" alt="LogoImage"> 
                <img style="width: 5%;" id="LogoImg" src="assets/logo3.jpeg" alt=""> 
            </div>
            <div id="navBtn">
                <ul>
                <li><a href="HomepageADMIN.php">Home &nbsp;Admin</a>
                    </li>
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
    <nav class="navbar navbar-default">
    </nav>
    <div class="container">
        <div style="font-family:'Monserat'">
        <h3 class="text-primary">Data Buku Tamu dan Isi Buku Tamu</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <h3 class="text-primary">Isi Buku Tamu</h3>
        </div>



        <form method="POST" action="bukutamu_save_admin.php" enctype="multipart/form-data">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Hari dan Tanggal</label> <br>
                    <input id="currentDate" type="date" name="tanggal" required="required" />
                    <input id="currentDate" type="time" name="waktu" required="required" />
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" required="required" />
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp" required="required" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required="required" />
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" class="form-control" name="instansi" required="required" />
                </div>
                <div class="form-group">
                    <label>Peserta</label>
                    <input type="text" class="form-control" name="peserta" />
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan" />
                </div>
                <div class="form-group">
                    <label>Kesan dan Pesan</label>
                    <input type="text" class="form-control" name="kesandanpesan" />
                </div>
            </div>

            <br style="clear:both;" />
            <center>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save"></span>
                Save</button></center>
        </form>

    </div>



    <br /><br />
    <div class="container">
        <h3 align="center">Data Buku Tamu</h3>
        <br />
        <div class="table-responsive">
            <table id="employee_data" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Tanggal dan Waktu <br> (Tahun-Bulan-Tanggal-Jam)</td>
                        <td>Nama</td>
                        <td>Nomor HP</td>
                        <td>Email</td>
                        <td>Instansi</td>
                        <td>Peserta</td>
                        <td>Tujuan</td>
                        <td>Kesan dan Pesan</td>
                    </tr>
                </thead>
                <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["tanggal"].'  '.$row["waktu"].'</td>  
                                    <td>'.$row["nama"].'</td>  
                                    <td>'.$row["no_hp"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["instansi"].'</td>  
                                    <td>'.$row["peserta"].'</td>  
                                    <td>'.$row["tujuan"].'</td>  
                                    <td>'.$row["kesandanpesan"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>
            </table>
        </div>
    </div>

    <script>
    $(document).ready(function () {
        $('#employee_data').DataTable();
    });
</script>

<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
    </div>
</footer>
</body>


</html>
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<?php if(@$_SESSION['sukses1']){ ?>
<script>
    swal("Terima kasih!", "<?php echo $_SESSION['sukses1']; ?>", "success");
</script>
<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses1']); } ?>