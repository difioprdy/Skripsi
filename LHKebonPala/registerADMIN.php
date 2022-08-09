<?php 

  session_start();

  require 'config.php';
  require 'functions.php';


  if(isset($_POST['register'])) {

    $uname = clean($_POST['username']); 
    $pword = clean($_POST['password']); 
    $fname = clean($_POST['firstname']); 
    
    $query = "SELECT username FROM usersadminlh WHERE username = '$uname'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) == 0) {

      
      $result = mysqli_query($conn,$query);

      if(mysqli_num_rows($result) == 0) {

        $query = "INSERT INTO usersadminlh (username, password, firstname, date_joined)
        VALUES ('$uname', '$pword', '$fname',NOW())";

        if(mysqli_query($conn, $query)) {

          $_SESSION['prompt'] = "Account registered. You can now log in.";
          header("location:logout.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "That student number already exists.";

      }

    } else {

      $_SESSION['errprompt'] = "User ID Sudah Terdaftar.";

    }

  } 

  if(isset($_SESSION['PIN'])) {

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
    background-image:linear-gradient(rgba(22, 53, 32, 0.5),#20845d);
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

/* ContactUs */
.a1{
    font-family: Monserat;
    font-size: 40px;
    font-weight: bold;
    margin-top: 30px;
}
.a2{
    background-color: #cffcd7;
    width: 50vh;
    height: 8vh;
    text-align: center;
    border-radius: 40px;
}

body {font-family: Monserat;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
    margin-top: 30px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.a3{
    display: flex;
    margin-top: 50px;
    margin-bottom: 30px;
}
.a4{
    background-color: #cffcd7;
    border-radius: 20px;
    width: 80vh;
    height: 40vh;
    margin-left: 250px;
}

/* Footer */
#footerBar{
    margin-top: 35vh;
    background-color:black;
    background-image: linear-gradient(#20845d,rgba(22, 53, 32, 0.5));
    display: flex;
    justify-content: space-between;
}

#txtCopy{
    margin-left: 50px;
    display: flex;
    color: white;
    float: left;
    padding: 30px;
    font-family: 'Monserat';
}

#sosmedImg{
    font-family: 'Monserat';
    display: flex;
    width: 30%;
    float: right;
    padding: 20px;
    margin-top: 10px;
    
}
.a10{
    color: white;
    margin-left: 200px;
}
  </style>

  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
  <link href="main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
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
          <li><a style="color:#32CD32" href="logout.php">Login</a></li>
        </ul>
      </div>
  </header>

  <body>

    

    <section class="center-text">

      <strong>Registrasi Admin</strong>

      

        <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
    ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

          <div class="login-form box-center">

            <fieldset>
              <legend>Register</legend>

              <div class="form-group">
                <label for="firstname">Nama</label>
                <input type="text" class="form-control" name="firstname" placeholder="Nama" required>
              </div>

              <div class="form-group">
                <label for="username">User ID</label>
                <input type="number" class="form-control" name="username" placeholder="Masukan ID berupa angka"
                  required>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>

            </fieldset>



          

            <div class="social-icons">
                            <p>Sudah Punya Akun! <a href="logout.php">Login</a>.</p>
                        </div>

          <input class="btn btn-primary" type="submit" name="register" value="Register">

          </div>

        </form>
      

    </section>

    <footer id="footerBar">
      <div id="txtCopy">
        &#169 2022 - RPTRA Kebon Pala
      </div>
      <div id="sosmedImg">
        <p class="a10">
      </div>
    </footer>

    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>

</html>

<?php 

} else {
  header("location:PIN.php");
  exit;
}

  unset($_SESSION['errprompt']);
  mysqli_close($conn);

?>