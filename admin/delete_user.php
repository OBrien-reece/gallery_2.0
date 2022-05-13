<?php include("includes/header.php"); ?>

<?php  

if(empty($_GET['id'])) {

	header("Location:users.php");

}else {

	$user = User::find_by_id($_GET['id']);
	$user->delete_photo();
	$session->message("The User {$user->username} has been deleted"); 
	header("Location:users.php");
}

?>