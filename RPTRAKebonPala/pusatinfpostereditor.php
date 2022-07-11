<html>



<head>
<style>
#tst{
    border: none;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    background-color: #32CD32;
    border-radius: 5px;
    transition-duration: 0.5s;
        }
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
    </style>
        <script src="ckeditor/ckeditor.js"></script>
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
                    <li><a href="Home.html">Home</a>
                        <div class="dropDownMenu">
                            <a href="Product.html">Product</a>
                            <a href="BookFacillites.html">Booking Fasilitas</a>
                            <a href="ContactUs.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a href="Partner.html">Partner</a></li>
                    <li><a style="color:red" href="Login.html">Logout</a></li>
                </ul>
            </div> 
    </header>

        <div class="modal fade" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<div class="modal-header">
					<h3 style="font-family:'Monserat'" class="modal-title">Tambah Post Deskripsi Headline</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
						<form method="POST" action="">
							<textarea class="ckeditor" name="editor"></textarea>
							
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-primary" id="tst" name="save"> Save</button>
				</div>
			</form>
		</div>
	</div>

    </body>

        </html>



        <?php

if(isset ($_POST['editor'])){
	$text = $_POST['editor'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO tentangkami_deskripsi_homepage_rptra (content) VALUES ('$text')");
	if($query){
		echo "ADDED";
        header("location: TentangKamiRPTRA_ADMIN.php");
	}else{
		echo "ERROR";
	}

}

?>