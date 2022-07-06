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
<style>
#btnlihatlebih{
		border: none;
		padding: 13px 30px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: orange;
		border-radius: 5px;
		transition-duration: 0.5s;
}
    </style>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Home.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
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
        <center class="color:#272727" style="font-size:40px"><strong style=" font-family: Monserat;">PRODUCT</strong>
        </center>
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
                    </span><br>
                    <!-- <span id="textBox2">RP 10.000,-</span> -->
                    <h4 id="textBox2">Rp. <?php echo $row["price"]; ?></h4>
                </div>
                <div id="btnBuy1">
                    <button type="button" data-toggle="modal" data-target="#modal<?php echo $row['id']?>"
                        id="btnBuyB">BUY</button>
                    <!-- detail product -->

                </div>
            </div>

            <div class="modal fade" id="modal<?php echo $row['id']?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $row["nama_product"]; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <img src="<?php echo $row['photo']?>" height="250" width="280" />
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <p><?php echo $row["deskripsi_product"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <br style="clear:both;" />
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> Close</button>
                                <button class="btn btn-warning" name="edit"><span
                                        class="glyphicon glyphicon-save"></span> Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
					}
				}
			?>
        </div>
    </div>

<!-- Makanan -->
<h3 style="font-family:'Monserat'"><strong>Makanan</strong></h3>
<button type="button" id="btnlihatlebih">Lihat Lebih</button>
<div id="part1">
        <div id="boxBestSeller">
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
                    </span><br>
                    <!-- <span id="textBox2">RP 10.000,-</span> -->
                    <h4 id="textBox2">Rp. <?php echo $row["price"]; ?></h4>
                </div>
                <div id="btnBuy1">
                    <button type="button" data-toggle="modal" data-target="#modal<?php echo $row['id']?>"
                        id="btnBuyB">BUY</button>
                    <!-- detail product -->

                </div>
            </div>

            <div class="modal fade" id="modal<?php echo $row['id']?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $row["nama_product"]; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <img src="<?php echo $row['photo']?>" height="250" width="280" />
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <p><?php echo $row["deskripsi_product"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <br style="clear:both;" />
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> Close</button>
                                <button class="btn btn-warning" name="edit"><span
                                        class="glyphicon glyphicon-save"></span> Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
					}
				}
			?>
        </div>
    </div>

<!-- Minuman -->
<h3 style="font-family:'Monserat'"><strong>Minuman</strong></h3>
<button type="button" id="btnlihatlebih">Lihat Lebih</button>
<div id="part1">
        <div id="boxBestSeller">
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
                    </span><br>
                    <!-- <span id="textBox2">RP 10.000,-</span> -->
                    <h4 id="textBox2">Rp. <?php echo $row["price"]; ?></h4>
                </div>
                <div id="btnBuy1">
                    <button type="button" data-toggle="modal" data-target="#modal<?php echo $row['id']?>"
                        id="btnBuyB">BUY</button>
                    <!-- detail product -->

                </div>
            </div>

            <div class="modal fade" id="modal<?php echo $row['id']?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $row["nama_product"]; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <img src="<?php echo $row['photo']?>" height="250" width="280" />
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <p><?php echo $row["deskripsi_product"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <br style="clear:both;" />
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> Close</button>
                                <button class="btn btn-warning" name="edit"><span
                                        class="glyphicon glyphicon-save"></span> Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
					}
				}
			?>
        </div>
    </div>

<!-- Kerajinan -->
<h3 style="font-family:'Monserat'"><strong>Kerajinan</strong></h3>
<button type="button" id="btnlihatlebih">Lihat Lebih</button>
<div id="part1">
        <div id="boxBestSeller">
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
                    </span><br>
                    <!-- <span id="textBox2">RP 10.000,-</span> -->
                    <h4 id="textBox2">Rp. <?php echo $row["price"]; ?></h4>
                </div>
                <div id="btnBuy1">
                    <button type="button" data-toggle="modal" data-target="#modal<?php echo $row['id']?>"
                        id="btnBuyB">BUY</button>
                    <!-- detail product -->

                </div>
            </div>

            <div class="modal fade" id="modal<?php echo $row['id']?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" enctype="multipart/form-data" action="">
                            <div class="modal-header">
                                <h3 class="modal-title"><?php echo $row["nama_product"]; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <img src="<?php echo $row['photo']?>" height="250" width="280" />
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <p><?php echo $row["deskripsi_product"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <br style="clear:both;" />
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal"><span
                                        class="glyphicon glyphicon-remove"></span> Close</button>
                                <button class="btn btn-warning" name="edit"><span
                                        class="glyphicon glyphicon-save"></span> Buy</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
					}
				}
			?>
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

    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
</body>

</html>