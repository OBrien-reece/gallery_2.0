<?php include("includes/header.php"); ?>


<?php 

if(empty($_GET['id'])) {

    header("Location:display.php");
}

$comments = Comment::find_the_comment($_GET['id']);

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
                            comments 
                            <span class="text-primary" style="float: right;"><?php echo $message ?></span>
                        </h1>

                        <div class="col-md-12">
                            <table class="table table-dark table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>                                    
                                  <th scope="col">Functionality</th>
                                  <th scope="col">Author</th>
                                  <th scope="col">Body</th>
                                </tr>
                              </thead>
                              <tbody>

                                    <?php  
                                    foreach($comments as $comment) : ?>

                                    <tr>
                                    <td><?php echo $comment->id ?></td>

                                    <td class="actions_link">
                                        <a href="delete_comment_photo.php?id=<?php echo $comment->id ?>">Delete</a><br><br>
                                        <a href="edit_comment.php?id=<?php echo $comment->id ?>">Edit</a><br><br>
                                        <a href="#">View</a>
                                    </td>


                                    <td><?php echo $comment->author ?></td>
                                    <td><?php echo $comment->body ?></td>
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