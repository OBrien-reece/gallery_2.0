<?php include("includes/header.php"); ?>

<?php  

if(empty($_GET['id'])) {

	header("comments.php");
}else {

	$comment = Comment::find_by_id($_GET['id']);

	$comment->delete();

	$session->message("{$comment->author}'s comment has been deleted"); 
	
	header("Location:comments.php");
}


?>