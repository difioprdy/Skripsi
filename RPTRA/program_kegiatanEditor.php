<html>



<head>
        <script src="ckeditor/ckeditor.js"></script>
	</head>

    <body>

        <div class="modal fade" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
				<div class="modal-header">
					<h3 class="modal-title">Tambah Post</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
						<label>Deskripsi Headline</label>
						<form method="POST" action="">
							<textarea class="ckeditor" name="editor"></textarea>
							
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Save</button>
				</div>
			</form>
		</div>
	</div>

    </body>

        </html>



        <?php

if(isset ($_POST['editor'])){
	$text = $_POST['editor'];

	require 'config.php';

	$query = mysqli_query($conn, "INSERT INTO halaman_utama_program_kegiatan (deskripsi) VALUES ('$text')");
	if($query){
		echo "ADDED";
        header("location: program_kegiatanADMIN.php");
	}else{
		echo "ERROR";
	}

}

?>