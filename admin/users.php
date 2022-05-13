<?php include("includes/header.php"); ?>

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
                    <div class="col-lg-11">                        
                        <h1 class="page-header">
                            Users 

                            <span class="text-primary" style="float: right;"><?php echo $message ?></span>

                        </h1>
                        <a href="add_user.php" class="btn btn-primary">Add User</a>

                        <div class="col-md-12">
                            <table class="table table-dark table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>                                    
                                  <th scope="col">User Image</th>
                                  <th scope="col">Functions</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Last Name</th>
                                </tr>
                              </thead>
                              <tbody>

                                    <?php  

                                    $users = new User();
                                    $users = User::find_all();
                                    foreach($users as $user) : ?>

                                    <tr>
                                    <td><?php echo $user->id ?></td>

                                    <td><img class="admin-photo-thumbnail user_image" src="<?php echo $user->image_path_and_placeholder(); ?>"></td>

                                    <td class="actions_link">
                                        <a href="delete_user.php?id=<?php echo $user->id ?>">Delete</a><br><br>
                                        <a href="edit_user.php?id=<?php echo $user->id ?>">Edit</a><br><br>
                                        <a href="#">View</a>
                                    </td>


                                    <td><?php echo $user->username ?></td>
                                    <td><?php echo $user->first_name ?></td>
                                    <td><?php echo $user->last_name ?></td>
                                    </tr>

                                    <?php endforeach; ?>                                
                              </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->            
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>