<?php include("includes/header.php"); ?>

<?php     

    if(isset($_POST['addUserBtn'])) {
        $user = new user(); 

        if($user) {

            $user->username = $_POST['username'];
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->password = $_POST['password'];
            // $_FILES['file_upload'];

            $user->set_file($_FILES['file_upload']);
            $user->save_user_and_image();
            // $user->save(); 
            $session->message("User {$user->username} has been created"); 
            header("Location:../admin/users.php") ;
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
                             Add User
                        </h1>


                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="col-md-6 col-md-offset-3">

                            <div class="form-group">
                                <input type="file" name="file_upload" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>           
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div> 
                            <input type="submit" name="addUserBtn" class="btn btn-primary pull-right">                                      

                        </div> 

                    </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->            
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
