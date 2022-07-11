<?php
include('config.php');

$sql="SELECT * FROM aktivasipkkmart";
$perintah=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($perintah);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<style>
    	#btnupdate{
		border: none;
		padding: 10px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #f0ad4e;
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
/* Footer */
#footerBar{
    margin-top: 5vh;
    background-color:black;
    background-image: linear-gradient(#211063,rgba(0,0,0,0.5));
    display: flex;
    justify-content: space-between;
}

#txtCopy{
    margin-left: 50px;
    display: flex;
    color: white;
    float: left;
    padding: 30px;
    font-family: Monserat;
}

#sosmedImg{
    display: flex;
    width: 30%;
    float: right;
    padding: 20px;
    margin-top: 10px;
    
}
.a10{
    color: white;
    margin-left: 200px;
    font-family: Monserat;
}	
</style>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
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
				<li><a href="HomepageADMIN.php">Home &nbsp;Admin</a>
                    </li>
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>

	
        <h3 class="text-primary"
            style=" text-align: center; color:#727272; margin-bottom: 80px; font-family: Monserat;">Atur Product PKK Mart
            RPTRA Kebon Pala</h3>
        <div id="boxBestSeller">
            <div id="box">
                <!-- . -->
                <form role="form" method="post" action="proses_aktivasi_product.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo "$row[id]"?>">
                    </div>

                    <div class="form-group">
                        <label>Status halaman PKK Mart saat ini : </label>
                        <input type="text" value="<?php echo "$row[aktivasi]"?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Pengaturan halaman PKK Mart</label>
						<br><input type="radio" id="html" name="status_form" value="Nonaktif">
                        <label for="html">Nonaktif</label><br>
                        <input type="radio" id="html" name="status_form" value="Aktif">
                        <label for="html">Aktif</label><br>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan" id="simpan">save</button>
                </form>

                <!-- . -->

            </div>
        </div>
   






	
		<h3 class="text-primary">Edit Product PKK Mart RPTRA Kebon Pala Berseri</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
				class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button>
		<br /><br />
		<h3 class="text-primary">Ganti Foto dan Nama Foto</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Foto Product</th>
					<th>Nama Product</th>
					<th>Deskripsi Product</th>
					<th>Kategori Product</th>
					<th>Harga Product</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `tbl_product`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['nama_product']?></td>
					<td><?php echo $fetch['deskripsi_product']?></td>
					<td><?php echo $fetch['kategori']?></td>
					<td><?php echo $fetch['price']?></td>

					<td><button type="button" id="btnupdate"><a href="<?= 'updateProduct_RPTRA.php?id=' .$fetch['id'] ?>">Update</a></button>
					<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
                                data-target="#<?php echo $fetch['id']?>">Delete</button>
				</td>


				<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           <h4 class="modal-title">Hapus Product</h4>
                                       </div>
                                       <div class="modal-body">
									   Apakah anda yakin untuk menghapus product ?
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deletePKKMart.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                               <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                                               <button value="DELETE" name="deleteProduct" class="btn btn-danger" type="submit">Ya</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
					
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	


	<!-- buat tambah foto dan judul di atas -->
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="ProductRPTRA_save.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">

							<div class="form-group">
								<label>Foto Product</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Nama Product</label>
								<input type="text" class="form-control" name="nama_product" required="required" />
							</div>

							<div class="form-group">
								<label>Deskripsi Product</label>
								<textarea class="form-control" name="deskripsi_product" required="required"></textarea>
							</div>

							<div class="form-group">
								<label>Kategori Product</label>
								<input type="text" class="form-control" name="kategori" required="required" />
							</div>
							<div class="form-group">
								<label>Harga Product (Rp.)</label>
								<input type="text" class="form-control" name="price" required="required" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal"> Close</button>
						<button class="btn btn-primary" name="save">
							Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js1/jquery-3.2.1.min.js"></script>
	<script src="js1/bootstrap.js"></script>
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

<script>
	CKEDITOR.replace('savejudul');
	CKEDITOR.replace('editjudul');
	CKEDITOR.replace('savedeskripsi');
	CKEDITOR.replace('editdeskripsi');
</script>

</html>

<?php

if(isset ($_POST['editor'])){
	$text = $_POST['editor'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO tentangkami_deskripsi_homepage_rptra (content) VALUES ('$text')") or die(mysqli_error());
	if($query){
	}else{
		echo "ERROR";
	}

}

?>