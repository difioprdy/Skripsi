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
    <link rel="stylesheet" href="Productlh.css">
    <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
    <title>Product</title>
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
                    <li><a style="font-family: Monserat;" href="LH.html">Home</a>
                        <div class="dropDownMenu">
                            <a style="font-family: Monserat;" href="Productlh.html">Product</a>
                            <a style="font-family: Monserat;" href="ContactUs.html">Contact Us</a>
                        </div>
                    </li>
                    <li><a style="font-family: Monserat;" href="Edukasi.html">Edukasi</a></li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.html">Login</a></li>
                </ul>
            </div>
    </header>


    <!-- Product -->
    <div id="part1">
        <center class="color:#272727" style="font-size:40px; font-family: Monserat;"><strong>PRODUCT</strong></center>
        <center style="color:#727272; margin-bottom: 80px; font-family: Monserat;">UMKM RPTRA Kebon Pala</center>
        <div id="boxBestSeller">

            <div class="z4">
                <header id="z1">
                    <div id="z2">
                        <div id="z3">
                            <ul>
                                <li><a href="Prouctlh.html">Kategori</a>
                                    <div class="dropDownMenu">
                                        <a href="Productkerajinan.html">Kerajinan</a>
                                        <a href="Productpupuk.html">Pupuk</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </header>
            </div>

            <?php
            $query = "SELECT * FROM tbl_productlh ORDER BY id ASC";
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
            <p class="a10"><strong>Contact Person</strong> <br> Anwar <br> 0821-1157-0918</p>
        </div>
    </footer>
    <script src="js1/jquery-3.2.1.min.js"></script>
    <script src="js1/bootstrap.js"></script>
</body>

</html>