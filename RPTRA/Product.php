<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "rptra_lh");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Home.js" defer></script>
        <link rel="stylesheet" href="Product.css">
        <title>Product</title>
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
                    <li><a style="color:red" href="Login.html">Login</a></li>
                </ul>
            </div> 
    </header>


<!-- Product -->
    <div id="part1">
        <center class="color:#272727" style="font-size:40px" ><strong style=" font-family: Monserat;">PRODUCT</strong></center>
        <center style="color:#727272; margin-bottom: 80px; font-family: Monserat;">UMKM RPTRA Kebon Pala</center>
        <div id="boxBestSeller">

            <div class="z4">
                <header id="z1">
                    <div id="z2">
                        <div id="z3">
                            <ul>
                                <li><a href="Prouct.html">Kategori</a>
                                    <div class="dropDownMenu">
                                        <a href="Productmakanan.html">Makanan</a>
                                        <a href="Productminuman.html">Minuman</a>
                                        <a href="Productkerajinan.html">Kerajinan</a>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                </header>
            </div>
            

            <?php
            $query = "SELECT * FROM tbl_product ORDER BY id ASC";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
            ?>

            <div id="box">
                <div id="shirt">
                    <!-- <img src="assets/produk.png" id="shirt1"> -->
                    <img src="<?php echo $row["photo"]; ?>" height="300" width="320" /><br />
                </div>
                <div id="text">
                    <!-- <span id="textBox">Kopi Susu</span><br> -->
                    <h4 id="textBox"><?php echo $row["nama_product"]; ?></h4>
                    <span style="font-family: Monserat;">
                        Kopi susu merupakan minuman yang terdiri dari campuran kopi <br> dan susu.
                        Biasanya susu yang digunakan untuk kopi susu <br> kekinian adalah susu segar.
                    </span><br>
                    <!-- <span id="textBox2">RP 10.000,-</span> -->
                    <h4 id="textBox2">Rp. <?php echo $row["price"]; ?></h4>
                </div>
                <div id="btnBuy1">
                    <button type="button" id="btnBuyB">BUY</button>
                </div>
            </div>


            <?php
					}
				}
			?>

            <!-- <div id="box">
                <div id="shirt">
                    <img src="assets/produk.png" id="shirt1">
                </div>
                <div id="text">
                    <span id="textBox">Kopi Susu</span><br>
                    <span style="font-family: Monserat;">
                        Kopi susu merupakan minuman yang terdiri dari campuran kopi <br> dan susu.
                        Biasanya susu yang digunakan untuk kopi susu <br> kekinian adalah susu segar.
                    </span><br>
                    <span id="textBox2">RP 10.000,-</span>
                </div>
                <div id="btnBuy1">
                    <button type="button" id="btnBuyB">BUY</button>
                </div>
            </div>
            <div id="box">
                <div id="shirt">
                    <img src="assets/produk.png" id="shirt1">
                </div>
                <div id="text">
                    <span id="textBox">Kopi Susu</span><br>
                    <span style="font-family: Monserat;">
                        Kopi susu merupakan minuman yang terdiri dari campuran kopi <br> dan susu.
                        Biasanya susu yang digunakan untuk kopi susu <br> kekinian adalah susu segar.
                    </span><br>
                    <span id="textBox2">RP 10.000,-</span>
                </div>
                <div id="btnBuy1">
                    <button type="button" id="btnBuyB">BUY</button>
                </div>
            </div>
            <div id="box">
                <div id="shirt">
                    <img src="assets/produk.png" id="shirt1">
                </div>
                <div id="text">
                    <span id="textBox">Kopi Susu</span><br>
                    <span style="font-family: Monserat;">
                        Kopi susu merupakan minuman yang terdiri dari campuran kopi <br> dan susu.
                        Biasanya susu yang digunakan untuk kopi susu <br> kekinian adalah susu segar.
                    </span><br>
                    <span id="textBox2">RP 10.000,-</span>
                </div>
                <div id="btnBuy1">
                    <button type="button" id="btnBuyB">BUY</button>
                </div>
            </div> -->
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
</body>
</html>