<?php include("includes/header.php"); ?>

<?php 

if(empty($_GET['id'])) {

    header("Location:users.php");

}

    $user = new User(); 

    $user = User::find_by_id($_GET['id']);

    if(isset($_POST['updateUserBtn'])) {

        if($user) {

           $user->username = $_POST['username'];
           $user->first_name = $_POST['first_name'];
           $user->last_name = $_POST['last_name'];
           $user->password = $_POST['password'];

           if(empty($_FILES['file_upload'])) {

            $user->save();
            $session->message("The User {$user->username} has been updated");            

           }else {

            $user->set_file($_FILES['file_upload']);

            $user->save_user_and_image();

            $user->save();

            // header("Location:edit_user.php");
            header("Location:../admin/users.php");
            $session->message("The User {$user->username} has been updated");            
           }           
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
                             Edit User
                             <span><small>Click image to select alternative</small></span>
                        </h1>

                    <div class="col-md-6 user_image_box">
                       
                        <a href="#" data-toggle='modal' data-target='#photo-library'>
                            <img class="img-responsive" src="<?php echo $user->image_path_and_placeholder() ?>" alt="">
                        </a>

                    </div>    

                    <!-- Modal for selecting alternative image in folder = (admin/includes/edit_user_photo_modal) -->


                    <?php include("includes/edit_user_photo_modal.php"); ?>


                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="col-md-6">

                                <input type="file" name="file_upload" class="form-control">

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $user->username ?>">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ?>">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name ?>">
                            </div>           
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $user->password ?>">
                            </div> 
                            <input type="submit" name="updateUserBtn" value="Update" class="btn btn-primary pull-right">

                            <a class="btn btn-danger" id="user_id" name="deleteUserBtn" href="delete_user.php?id=<?php echo $user->id ?>">Delete</a>
                            
                                                                  

                        </div> 

                    </form>
                        </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->            
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
