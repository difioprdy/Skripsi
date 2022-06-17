<?php
$mysqli = new mysqli('localhost', 'root', '', 'rptra_lh');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings_ruangserbaguna where date = ?");
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
    $stmt = $mysqli->prepare("select * from bookings_ruangserbaguna where date = ? AND timeslot=?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings_ruangserbaguna (name, timeslot, telfon, date) VALUES (?,?,?,?)");
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
                  Tempat yang dibooking : <b></b>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
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


</body>



</html>