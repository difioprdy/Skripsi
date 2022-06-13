<?php
function build_calendar($month, $year){

    //nama hari dalam seminggu
    $daysOfWeek = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');

    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    //mengambil jumlah hari pada bulan
    $numberDays = date('t', $firstDayOfMonth);

    //Mengambil sejumlah informasi pada hari pertama pada bulan
    $dateComponents = getdate($firstDayOfMonth);

    //Mengambil nama bulan saat ini
    $monthName = $dateComponents['month'];

    //Mengambil index value 0-6 pada hari pertama pada bulan
    $dayOfWeek = $dateComponents['wday'];

    //Mengambil tanggal sekarang
    $dateToday = date('Y-m-d');

    //Membuat tabel HTML
    $calendar = "<table class='table table-bordered'>";
    $calendar.="<center><h2>$monthName $year</h2></center>";

    $calendar.= "<tr>";
    
    //Membuat header calendar
    foreach($daysOfWeek as $day){
        $calendar.="<th class='header'>$day</th>";
    }

    $calendar.= "</tr><tr>";

    //pada variabel $dayOfWeek akan memastikan harus mempunyai 7 column pada tabel
    if($dayOfWeek >0){
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar.="<td></td>";
        }
    }
//menginisialkan hari yang didapat
$currentDay = 1;

//mengambil jumlah bulan
$month = str_pad($month, 2, "0", STR_PAD_LEFT);

while($currentDay <= $numberDays){


    //jika keutujuh column (sabtu) dicapai, maka buat row baru
    if($dayOfWeek == 7){
        $dayOfWeek = 0;
        $calendar.="</tr><tr>";
    }

    $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
    $date = "-$year-$month-$currentDayRel";

    if($dateToday==$date){
        $calendar.="<td class='today'><h4>$currentDay</h4>";
    }else{
        $calendar.="<td><h4>$currentDay</h4>";
    }

    $calendar.="</td>";

    //Incrementing the counters
    $currentDay++;
    $dayOfWeek++;
}

//menyelesaikan row minggu terakhir pada bulan jika diperlukan
if($dayOfWeek != 7){
$remainingDays = 7-$dayOfWeek;
for($i=0;$i<$remainingDays;$i++){
    $calendar.="<td></td>";
}
}
$calendar.="</tr>";
$calendar.="</table>";

echo $calendar;


}
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <style>
        table{
        table-layout: fixed;
        }

        td{
            width: 33%;
        }

        .today{
            background: yellow;
        }
    </style>
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
    <?php
    $dateComponents = getdate();
    $month = $dateComponents['mon'];
    $year = $dateComponents['year'];
    echo build_calendar($month, $year);
    ?>
</div>
</div>
</body>
</html>