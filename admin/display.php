<?php include("includes/header.php"); ?>

<?php  

$photos = User::find_by_id($_SESSION['user_id'])->photos();


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
                    <div class="col-lg-11">
                        <h1 class="page-header">
                            Display 

                            <span class="text-primary" style="float: right;"><?php echo $message ?></span>
                            
                        </h1>

                        <div class="col-md-12">
                            <table class="table table-dark table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Photo</th>
                                  <th scope="col">Functions</th>
                                  <th scope="col">ID</th>
                                  <th scope="col">File Name</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Size</th>
                                  <th scope="col">Comment</th>
                                </tr>
                              </thead>
                              <tbody>

                                    <?php  

                                    foreach($photos as $photo) : ?>

                                    <tr>
                                    <td><img class="photo-thumbnail" src="<?php echo $photo->picture_path(); ?>"></td>

                                    <td class="pictures_link">
                                        <a href="delete_photo.php?id=<?php echo $photo->id ?>">Delete</a><br><br>
                                        <a href="edit_photo.php?id=<?php echo $photo->id ?>">Edit</a><br><br>
                                        <a href="../photo.php?id=<?php echo $photo->id ?>">View</a>
                                    </td>


                                    <td><?php echo $photo->id ?></td>
                                    <td><?php echo $photo->filename ?></td>
                                    <td><?php echo $photo->title ?></td>
                                    <td><?php echo $photo->size ?></td>
                                    <td>
                                        <?php 

                                        $comments = Comment::find_the_comment($photo->id);

                                        $count =count($comments);

                                        ?>

                                        <a href="comment_photo.php?id=<?php echo $photo->id ?>"><?php echo $count ?></a>
                                            
                                        </td>
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