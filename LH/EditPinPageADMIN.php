<?php 

$db = mysqli_connect("localhost", "root", "", "rptra_lh");

?>



<!DOCTYPE html>
<html>

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
    background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d);
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
    width: 180px;
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
    font-family: Arial, Helvetica, sans-serif;
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
<title> Edit PIN Registrasi </title>
</head>
<body>
<!-- NavBar     -->
<header id="headerBar">
        <div id="navBar">
            <div>
                <img id="LogoImg" src="assets/LH/logo2.jpeg" alt="LogoImage"> 
            </div>
            <div id="navBtn">
                <ul>
                    <li><a  style="font-family: Monserat;" href="LH.html">Home</a>
                        <div class="dropDownMenu">
                            <a  style="font-family: Monserat;" href="Productlh.html">Product</a>
                            <a  style="font-family: Monserat;" href="ContactUslh.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.html">Logut</a></li>
                </ul>
            </div> 
    </header>
<table style="width: 80%" border="1">

<tr>
<th>PIN</th>
<th>Edit PIN</th>
</tr>
<?php 
$i = 1;
$qry = "select * from pinadminlh";
$run = $db -> query($qry);
if($run -> num_rows > 0 ){
    while($row = $run -> fetch_assoc()){
        $id = $row['ID_PIN'];

?>
<tr>
<td><?php echo $row['PIN'] ?></td>
<td>
        <a href="EditPin.php?id=<?php echo $id; ?>">Edit</a>
</td>
</tr>
<?php 
    }
}
?>
</table>




</body>
</html>

