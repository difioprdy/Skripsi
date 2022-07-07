<html>
    <head>
        <style>
            #btnupdate{
		border: none;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #32CD32;
		border-radius: 5px;
		transition-duration: 0.5s;}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
        <link rel="stylesheet" href="ContactUs.css">
        <title>WebsiteRPTRA</title>
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
                </li>
                <!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
                <li><a style="font-family: Monserat;" href="Home.php">Home</a> </li>
                <li><a style="font-family: Monserat;">Menu</a>
                    <div class="dropDownMenu">
                        <a style="font-family: Monserat;" href="BookFacillites.html">Booking Fasilitas</a>
                        <a style="font-family: Monserat;" href="StrukturOrganisasiRPTRA.php">Struktur Organisasi</a>
                        <a style="font-family: Monserat;" href="ContactUs.php">Contact Us</a>
                        <a style="font-family: Monserat;" href="Partner.php">Program Kegiatan</a>
                    </div>
                </li>

                <li><a style="font-family: Monserat;" href="PKKmart_control.php">PKK Mart</a> </li>


                <li><a style="color:green; font-family: Monserat;" href="login.php">Login</a></li>
            </ul>
        </div>
</header>


<!-- ContactUs -->
<center><div class="a2">
    <p class="a1">Contact Us</p>
</div></center>

<div class="container">
  <!-- <form action="/action_page.php"> -->
      <form id="myForm">
    <label for="fname">Name</label>
    <input type="text" id="name" placeholder="Your Name..">

    <label for="lname">Email</label>
    <input type="text" id="email" placeholder="Your Email..">

    <label for="country">Subject</label>
    <input type="text" id="subject" placeholder="Subject..">

    <label for="subject">Message</label>
    <textarea id="body" placeholder="Write something.." style="height:200px"></textarea>

    <button type="button" id="btnupdate" onclick="contactUsMAIL()" value="Send An Email">Submit</button>
    <h4 class="sent-notification"></h4>
  </form>
</div>

<div class="a3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.017884450412!2d106.8809031!3d-6.26314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa61abb482bcce73d!2sRPTRA%20KEBON%20PALA!5e0!3m2!1sen!2sid!4v1648374795832!5m2!1sen!2sid" width="400" height="300" style="border-radius:15px; margin-left: 150px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="a4">
        <center style="padding-top: 15px;">
            <p>
                <strong style="font-size: 20px;">Lokasi RPTRA:</strong> <br> Jl. Kamboja, RT.10/RW.1, Kb. Pala, Kec. 
                Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13650 <br><br><br>
                <strong style="font-size: 20px;">Jam Operasional</strong> : <br>Senin = 7AM - 5PM <br>
                Selasa = 7AM - 5PM <br> Rabu = 7AM - 5PM <br> Kamis = 7AM - 5PM <br> Jumat = 7AM - 5PM
                <br> Sabtu = 7AM - 5PM <br> Minggu = 7AM - 5PM
            </p>
        </center>
    </div>

</div>


<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

<script type="text/javascript">
    function contactUsMAIL(){
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) &&  isNotEmpty(body)){
            $.ajax({
                url: 'contactUsMAIL.php',
                method: 'POST',
                dataType: 'json',
                data:{
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val(),
                 }, success: function(response){
                     $('#myForm')[0].reset();
                     $('.sent-notification').text("Email berhasil terkirim, terima kasih!");
                 }
            });
        }
    }
function isNotEmpty(caller){
    if(caller.val() == ""){
        caller.css('border', '1px solid red');
        return false;
    }
    else
    {
        caller.css('border', '');
        return true;
    }
}
</script> 

</body>
</html>