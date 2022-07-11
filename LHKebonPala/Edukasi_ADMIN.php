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
		padding: 10px 15px;
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



	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Edit dan Tambah Artikel Edukasi LH Kebon Pala</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<!-- <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span
				class="glyphicon glyphicon-plus"></span> Post Foto dan Judul</button> -->
		<td><a href="postEdukasi_LH.php">Tambah Artikel Edukasi</a></td>
		<br /><br />
		<h3 class="text-primary">Artikel Edukasi</h3>
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Nomor Artikel</th>
					<th>Thumbnail Artikel Edukasi</th>
					<th>Judul Edukasi</th>
					<th>Isi</th>
					<th>Video Youtube</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'config.php';
					$query = mysqli_query($conn, "SELECT * FROM `edukasi`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['id']?></td>
					<td><img src="<?php echo $fetch['photo']?>" height="80" width="100" /></td>
					<td><?php echo $fetch['judul']?></td>
					<td><?php echo $fetch['isi']?></td>
					<td> <?php 

                $data = $fetch['url'];
                $final = str_replace('watch?v=', 'embed/', $data);
                echo "
                    <iframe
                        src='$final'
                        frameborder='0'
                        allow='autoplay; encrypted-media'
                        allowfullscreen>
                    </iframe>
                ";
           // }
        ?>
		</td>
					<td><a href="<?= 'updateEdukasi_LH.php?id=' .$fetch['id'] ?>">Update</a>
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
                                           <h4 class="modal-title">Hapus Artikel</h4>
                                       </div>
                                       <div class="modal-body">
                                           Apakah anda yakin untuk menghapus artikel edukasi ?
                                       </div>
           
                                       <div class="modal-footer">
                                           <form action="deleteArtikelEdukasi.php" method="post">
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
