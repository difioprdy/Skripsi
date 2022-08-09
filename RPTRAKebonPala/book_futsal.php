<?php
$mysqli = new mysqli('localhost', 'root', '', 'rptra_lh');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings_futsal where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $telfon = $_POST['telfon'];
    $timeslot = $_POST['timeslot'];
    $stmt = $mysqli->prepare("select * from bookings_futsal where date = ? AND timeslot=?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings_futsal (name, timeslot, telfon, date) VALUES (?,?,?,?)");
            $stmt->bind_param('ssss', $name, $timeslot, $telfon, $date);
            $stmt->execute();
            // tombol invoice setelah user booking tempat, akan muncul setelah selesai booking tempat
            $msg = "<div type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalLong' class='alert alert-success'>Click button untuk bukti Invoice booking!</div> 

            <!-- Modal -->
            <div class='modal fade' id='exampleModalLong' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLongTitle'>Silakan Screenshot Invoice Booking Fasilitas RPTRA Kebon Pala</h5>
                  </div>
                  <div class='modal-body'>
                  Waktu dan Tanggal Booking<br>
                  <span id='date-time'></span>
                  <br><br>
                  Tanggal yang dibooking : <b>$date </b> (Tahun-Bulan-Tanggal) 
                  <br>
                  Waktu yang dibooking : <b>$timeslot</b>
                  <br>
                  Nama : <b>$name</b>
                  <br> 
                  Nomor telfon: <b>$telfon</b>
                  <br>
                  Tempat yang dibooking : <b>Lapangan Futsal</b>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                  </div>
                </div>
              </div>
            </div>


            ";
            $bookings[] = $timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
}

$duration = 60;
$cleanup = 0;
$start = "09:00";
$end = "15:00";

function timeslots($duration, $cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();
    
    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }
        
        $slots[] = $intStart->format("H:iA")." - ". $endPeriod->format("H:iA");
        
    }
    
    return $slots;
}

?>
<!doctype html>
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
    margin-top: 55vh;
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

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
                                            <li><a href="Home.php">Home</a></li>
                                            <li><a href="#">Menu</a>
                                                <div class="dropDownMenu">
                                                    <a href="BookFacillites.html">Booking Fasilitas</a>
                                                    <a href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a>
                                                    <a href="Partner.php">Program Kegiatan</a>
                                                    <a href="ContactUs.php">Contact Us</a>
                                                </div>
                                            </li>
                                            <li><a href="PKKmart_control.php">PKK Mart</a></li>
                                            <li><a style="color:#32CD32" href="Login.php">Login</a></li>
                                        </ul>
            </div> 
    </header>
    <h3><strong><center>Booking Futsal</center></strong></h3>
    <div class="container">
        <h3 class="text-center">Booking untuk tanggal: <?php echo date('d/m/Y', strtotime($date)); ?></h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
            <!-- posisi tombol invoice setelah user booking tempat -->
            <?php echo(isset($msg))?$msg:""; ?> 
            </div>
            <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
    foreach($timeslots as $ts){
?>
            <div class="col-md-2">
                <div class="form-group">
                    <?php if(in_array($ts, $bookings)){ ?>
                    <button class="btn btn-danger"><?php echo $ts; ?></button>
                    <?php }else{ ?>
                    <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                    <?php }  ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking: <span id="slot"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="">Waktu</label>
                                    <input required type="text" readonly name="timeslot" id="timeslot"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input required type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telfon</label>
                                    <input required type="number" name="telfon" class="form-control">
                                </div>
                                <div class="form-group pull-right">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script>
        $(".book").click(function () {
            var timeslot = $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>


<script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>

<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2022 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10">
    </div>
</footer>
</body>
</body>



</html>