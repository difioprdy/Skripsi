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
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />
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
                    <li><a  style="font-family: Monserat;" href="homepageadmin.html">Home</a>
                    </li>
                    <li><a style="color:red; font-family: Monserat;" href="Login.php">Logout</a></li>
                </ul>
            </div> 
    </header>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit Product Lingkungan Hidup Kebon Pala</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Tambah Produk</button>
		<br /><br />
		<h3 class="text-primary">Ganti/edit Produk</h3>
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
					$query = mysqli_query($conn, "SELECT * FROM `tbl_productlh`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100"/></td>
					<td><?php echo $fetch['nama_product']?></td>
					<td><?php echo $fetch['deskripsi_product']?></td>			
					<td><?php echo $fetch['kategori']?></td>
					<td><?php echo $fetch['price']?></td>		
					
					<td><button type="button" id="btnupdate"><a style="color:white" href="<?= 'updateProduct_LH.php?id=' .$fetch['id'] ?>">Update</a></button>
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
                                           <form action="deleteProductLH.php" method="post">
                                               <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                               <input type="hidden" name="id" value="<?php echo $fetch['id']?>">
                                               <button value="DELETE" name="deleteID" class="btn btn-danger" type="submit">Ya</button>
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


	</div>
 

	
</div>


<!-- buat tambah foto dan judul di atas -->
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="ProductLH_save.php" enctype="multipart/form-data">
				<div class="modal-header">
					<h3 class="modal-title">Tambah Produk</h3>
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
            <!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
            <textarea class="ckeditor" class="form-control" name="deskripsi_product">
            </textarea>

							<div class="form-group">
								<label>Kategori Product</label>
								<input type="text" class="form-control" name="kategori" required="required" />
							</div>
							<div class="form-group">
								<label>Harga Product (Rp.)</label>
								<input type="text" class="form-control" name="price" required="required" />
							</div>

							<div class="form-group">
								<!-- <textarea class="form-control" name="judul" required="required" id="savejudul"></textarea> -->
								<input type="hidden" type="text" value=" " class="form-control"
									name="nama_foto_hidden" />
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