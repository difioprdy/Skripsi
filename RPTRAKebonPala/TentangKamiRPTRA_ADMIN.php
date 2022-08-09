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
		background-color: #32CD32;
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
		<link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
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
				<li><a href="HomepageADMIN.html">Home &nbsp;Admin</a>
                    </li>
                    <li><a style="color:red" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Tentang Kami Homepage RPTRA Kebon Pala Berseri</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Post Foto Tentang Kami</button>
		<br /><br />
		<h3 class="text-primary">Ganti Foto dan Nama Foto</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Photo</th>
					<th>Nama Kegiatan Pada Foto</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `tentangkami_image_homepage_rptra`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['judul']?></td>			
					<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fetch['id']?>"> Update</button>
					<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $fetch['id']?>">Delete</button>
				</td>
<!-- pop up delete -->
<div class="modal fade" id=<?php echo $fetch['id']?> role="dialog">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           <h4 class="modal-title">Hapus Foto</h4>
                                       </div>
                                       <div class="modal-body">
                                           Apakah anda yakin untuk menghapus foto ?
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deletettgkami.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                               <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                                               <button value="DELETE" name="deletettgkami" class="btn btn-danger" type="submit">Ya</button>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>

				<!-- pop up form -->
<div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="tentangkami_edit.php">
				<div class="modal-header">
					<h3 class="modal-title">Edit Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<h3>Post Sekarang</h3>
							<img src="<?php echo $fetch['photo']?>" height="120" width="150" />
							<input type="hidden" name="previous" value="<?php echo $fetch['photo']?>"/>
							<h3>Post Baru</h3>
							<label>(Foto harus landscape/memanjang kesamping)</label>
							<input type="file" class="form-control" name="photo" value="<?php echo $fetch['photo']?>" required="required"/>
						</div>
						<div class="form-group">
							<label>Nama Kegiatan Pada Foto</label>
							<input type="hidden" value="<?php echo $fetch['id']?>" name="id"/>
                            
                            <input type="text" class="form-control" value="<?php echo $fetch['judul']?>" name="judul" required="required"/>

                            

						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal">Close</button>
					<button class="btn btn-warning" name="edit"> Update</button>
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
		
		
		<h3 class="text-primary">Edit Deskripsi Tentang Kami</h3>
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
					$query = mysqli_query($conn, "SELECT * FROM `tentangkami_deskripsi_homepage_rptra`") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['content']?></td>			
					<td><button type="button" id="btnupdate"><a style="color:white" href="<?= 'updateDeskripsi_tentangkami.php?id=' .$row['id'] ?>">Update</a></td></button>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>


	</div>
 

	
</div>


<!-- buat tambah foto dan judul di atas -->
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="tentangkami_save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Tambah Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Photo</label>
							<input type="file" class="form-control" name="photo" required="required"/>
						</div>
						<div class="form-group">
							<label>Nama Kegiatan Pada Foto</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<input type="text" class="form-control" name="judul" required="required"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"> Close</button>
					<button class="btn btn-primary" name="save"> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>


 
<script src="js1/jquery-3.2.1.min.js"></script>	
<script src="js1/bootstrap.js"></script>	
</body>	

<script>
                        CKEDITOR.replace( 'savejudul' );
                        CKEDITOR.replace( 'editjudul' );
                        CKEDITOR.replace( 'savedeskripsi' );
                        CKEDITOR.replace( 'editdeskripsi' );
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

