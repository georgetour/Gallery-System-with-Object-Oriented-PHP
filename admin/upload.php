<?php include("includes/header.php"); ?>


<?php if(!$session->is_signed_in()){redirect("login.php"); }  ?>


<?php 
//Error message
$message = "";

// if(isset($_POST['submit'])){
	
// 	$photo = new Photo();
// 	$photo->title = $_POST['title'];
	
// 	//The array value must be the same with the form name file_upload
// 	$photo->set_file($_FILES['file_upload']);
	
// 	if($photo->save()){
		
// 		$message = "Photo uploaded successfully";
		
		
// 	}else{
// 		$message = join('<br>',$photo->errors);
// 	}
	
// }

if(isset($_FILES['file'])){
	
	$photo = new Photo();
	$photo->title = $_POST['title'];
	
	//The array value must be the same with the form name file_upload
	$photo->set_file($_FILES['file']);
	
	if($photo->save()){
		
		$message = "Photo uploaded successfully";
		
		
	}else{
		$message = join('<br>',$photo->errors);
	}
	
}




?>



        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!--Top navbar-->
            <?php include("includes/top_nav.php"); ?>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/sidebar.php"); ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Upload
                            
                        </h1>
						
						
						<div class="col-md-3">
							<form action="" method="post" enctype="multipart/form-data">
							
								<div class="form-group">
									<label for="title"> Picture title : </label>
									<input id="title" type="text" name="title" class="form-control">
								</div>

								<div class="form-group">
									<label for="file"> File_upload : </label>
									<input id="file" type="file" name="file" class="form-control">
								</div>
								
								<div class="form-group">
									<input type="submit" name="submit" value="Upload" class="btn btn-primary btn-lg pull-right">
								</div>
							
							</form>
							
                        </div>
						
                    </div>
                </div>
                <!-- /.row -->

                <hr>

                <div class="row">
	                <div class="col-lg-12">
	                	<form action="upload.php" class="dropzone">


	                		

	                	</form>
	                </div>
				</div>


				<div><?php echo $message; ?></div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>