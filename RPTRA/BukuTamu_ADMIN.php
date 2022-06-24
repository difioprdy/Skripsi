<?php  
require 'config.php';
 $query ="SELECT * FROM bukutamu ORDER BY id DESC";  
 $result = mysqli_query($conn, $query);  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand">RPTRA</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">Data Buku Tamu dan Isi Buku Tamu</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <h3 class="text-primary">Isi Buku Tamu</h3>



        <form method="POST" action="bukutamu_save_admin.php" enctype="multipart/form-data">
            <div class="modal-header">
            </div>
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
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save"></span>
                Save</button>
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