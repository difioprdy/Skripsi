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
		background-color: orange;
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
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Pusat Informasi Keluarga Homepage RPTRA Kebon Pala Berseri</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Tambah berita dengan poster/gambar</button>
		<br /><br />
		<h3 class="text-primary">Edit Berita</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Poster/gambar</th>
					<th>Judul</th>
					<th>Isi Berita</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `pusatinformasi` WHERE tipe_informasi = 'poster'") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $row['photo']?>" height="80" width="100"/></td>
					<td><?php echo $row['judul']?></td>	
					<td><?php echo $row['content']?></td>			
					<td><button type="button" id="btnupdate"><a href="<?= 'updateberitaposter_pusatinf.php?id=' .$row['id'] ?>">Update</a></button>
					<button class="btn btn-danger" type="button" id="btndelete" data-toggle="modal"
							data-target="#<?php echo $row['id']?>">Delete</button>
				</td>

				<div class="modal fade" id=<?php echo $row['id']?> role="dialog">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                           <h4 class="modal-title">Hapus</h4>
                                       </div>
                                       <div class="modal-body">
                                           Apakah anda yakin untuk menghapus  ?
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deletepusatinf.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                               <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                               <button value="DELETE" name="deletepusatinf" class="btn btn-danger" type="submit">Ya</button>
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

		
		<!-- <button class="btn btn-success" type="button" action="testheadline.php" ><span class="glyphicon glyphicon-plus"></span> Post</button> -->
		
 

	
</div>


<!-- buat tambah foto dan judul di atas -->
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="pusatinfposter_save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Tambah Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Poster/foto</label>
							<input type="file" class="form-control" name="photo"/>
						</div>
						<div class="form-group">
							<label>Judul Berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<input type="text" class="form-control" name="judul" required="required"/>
						</div>

						<div class="form-group">
							<label>Isi berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<textarea class="ckeditor" name="content" required="required"></textarea>
							
						</div>

						<div class="form-group">
						<input type="hidden" type="text" value="poster" class="form-control" name="tipe_informasi"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" name="save">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="form_modal2" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="pusatinftexteditor.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Tambah Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Judul Berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<input type="text" class="form-control" name="judul" required="required"/>
						</div>

						<div class="form-group">
							<label>Isi berita</label>
                            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
							<textarea class="ckeditor" name="content" required="required"></textarea>
							
						</div>

						<div class="form-group">
						<input type="hidden" type="text" value="no text" class="form-control" name="tipe_informasi"/>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
					<button class="btn btn-primary" name="editor">Save</button>
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

