<?php
$timeslot = $_POST['timeslot'];
$email = $_POST['email'];
$name = $_POST['name'];

echo "
Nama Anda Adalah <b>$timeslot</b>
<br> 
Nama Anda Adalah <b>$email</b>
<br>
Nama Anda Adalah <b>$name</b>";


?>

<?php
					$timeslot = $_POST['timeslot'];
          $telfon = $_POST['telfon'];
          $name = $_POST['name'];
				?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Example 1</title>
  <link rel="stylesheet" href="style.css" media="all" />
</head>

<body>
  <header class="clearfix">
    <div id="logo">
      <img src="logo.png">
    </div>
    <h1>Invoice Booking RPTRA Kebon Pala Berseri</h1>
    <div id="company" class="clearfix">
      <div>RPTRA Kebon Pala Berseri</div>
      <div>Jl. Kamboja No.10,<br /> RT.10/RW.1, Kb. Pala, Kec. Makasar,
        <br />Kota Jakarta Timur</div>
      <div>(021) 5043301</div>
    </div>
    <div id="project">
      <div><span>NAMA</span></div>
    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th class="desc">NAMA</th>
          <th>Tanggal dan Waktu Booking</th>
          <th>Nomor Telfon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="service"></td>
          <td class="desc"></td>
          <td class="unit"></td>
        </tr>
        <tr>
          <td class="service"></td>
          <td class="desc"></td>
          <td class="unit"></td>
        </tr>
        <tr>
          <td class="service"></td>
          <td class="desc"></td>
          <td class="unit"></td>
        </tr>
        <tr>
          <td class="service"></td>
          <td class="desc"></td>
          <td class="unit"></td>
        </tr>
      </tbody>
    </table>
  </main>
  <footer>
  </footer>
</body>




</html>