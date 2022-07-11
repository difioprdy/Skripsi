<!DOCTYPE html>
<html lang="en">

<head>
<style>
	#btnadd{
		border: none;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #5cb85c;
		border-radius: 5px;
		transition-duration: 0.5s;
	}
	#btnupdate{
		border: none;
		padding: 10px 10px;
		text-align: center;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
		background-color: #f0ad4e;
		border-radius: 5px;
		transition-duration: 0.5s;}
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
    margin-top: 140vh;
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
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Headline Homepage RPTRA Kebon Pala</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
				class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
		<h3 class="text-primary">Ganti Foto dan Judul Headline</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Judul Headline Homepage</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `headline_image_homepage_rptra`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['judul']?></td>
					<td><button type="button" class="btn btn-warning" data-toggle="modal"
							data-target="#edit<?php echo $fetch['id']?>"><span></span>
							Update</button></td>
					<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form method="POST" enctype="multipart/form-data" action="edit_hhomepage.php">
									<div class="modal-header">
										<h3 class="modal-title">Edit Post</h3>
									</div>
									<div class="modal-body">
										<div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="form-group">
												<h3>Post Sekarang</h3>
												<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
												<input type="hidden" name="previous"
													value="<?php echo $fetch['photo']?>" />
												<h3>Post Baru</h3>
												<label>(Foto harus landscape/memanjang kesamping)</label>
												<input type="file" class="form-control" name="photo"
													value="<?php echo $fetch['photo']?>" required="required" />
											</div>
											<div class="form-group">
												<label>Judul Headline Homepage</label>
												<input type="hidden" value="<?php echo $fetch['id']?>" name="id" />

												<input type="text" class="form-control"
													value="<?php echo $fetch['judul']?>" name="judul"
													required="required" />



											</div>
										</div>
									</div>
									<br style="clear:both;" />
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal"><span
												></span> Close</button>
										<button class="btn btn-warning" name="edit"><span
												></span> Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		<br />
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->
		<!-- <button type="button" id="btnadd"><a href="headlineEditor.php"><span
				class="glyphicon glyphicon-plus"></span> Add</a></button> -->

		<h3 class="text-primary">Edit Deskripsi Headline</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `headline_deskripsi_homepage_rptra`") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['content']?></td>
					<td><button type="button" id="btnupdate"><a href="<?= 'updateDeskripsi.php?id=' .$row['id'] ?>">Update</a></button></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	</div>



	</div>

	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_hhomepage.php" enctype="multipart/form-data">
					<div class="modal-header">
						<h3 class="modal-title">Tambah Post</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Photo</label>
								<input type="file" class="form-control" name="photo" required="required" />
							</div>
							<div class="form-group">
								<label>Judul</label>
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="text" class="form-control" name="judul" required="required" />
							</div>
						</div>
					</div>
					<br style="clear:both;" />
					<div class="modal-footer">
						<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" name="save">
							Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="js1/jquery-3.2.1.min.js"></script>
	<script src="js1/bootstrap.js"></script>
	

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

	$query = mysqli_query($conn, "INSERT INTO headline_deskripsi_homepage_rptra (content) VALUES ('$text')") or die(mysqli_error());
	if($query){
	}else{
		echo "ERROR";
	}

}

?>
<!-- Footer -->
<footer id="footerBar">
    <div id="txtCopy">
        &#169 2016 - RPTRA Kebon Pala
    </div>
    <div id="sosmedImg">
        <p class="a10"><strong>Contact Person</strong> <br> Fanny <br> 0812-9306-0002</p>
    </div>
</footer>