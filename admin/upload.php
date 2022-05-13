<?php include("includes/header.php"); ?>

<?php 

$message = "";

if(isset($_FILES['file'])) {

    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->user_id = $_SESSION['user_id'];
    $photo->caption = $_POST['caption'];
    $photo->description = $_POST['description'];
    $photo->alternate_text = $_POST['alternate_text'];
    $photo->set_file($_FILES['file']);

    if($photo->save_photo()) {

        $message = "Photo uploaded succesfully";

    }else {

        $message = join("<br>", $photo->errors);
    }
}

?>


        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            

            <?php include('includes/top_nav.php'); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            
            <?php include('includes/side_nav.php'); ?>


            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Drag and Drop Photos to Upload
                        </h1>

                        <?php echo $message; ?>

             <!--            <div class="row">
                        <div class="col-md-6">
                        <form method="POST" action="" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" name="caption" class="form-control">
                            </div>                            
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>                
                            <div class="form-group">
                                <label>Alternate Text</label>
                                <input type="text" name="alternate_text" class="form-control">
                            </div>  
                            <div class="form-group">
                                <input type="file" name="file" class="form-control">
                            </div>                                                                                                                             
                            <button class="btn btn-danger" name="submitPhoto" type="submit">SUBMIT PHOTO</button>
                        </form>
                        </div>
                    </div> --> 

                    <div class="row">
                        
                        <div class="col-lg-12">
                            <form action="upload.php" style="border: 6px dashed #0087f7;border-radius: 5px;background: #fff;margin-top: 30px;" class="dropzone"></form>
                        </div>
                    </div>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->            
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>