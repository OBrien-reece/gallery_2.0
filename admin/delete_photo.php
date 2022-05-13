<?php include("includes/header.php"); ?>

<?php  

$id = $_GET['id'];

if(empty($id)) {

	header("Location:display.php");

}

$photo = Photo::find_by_id($_GET['id']);

if($photo) {

	$photo->delete_photo();

	$session->message("{$photo->title} photo has been deleted"); 

	header("Location:display.php");

}else {

	header("Location:display.php");
}

?>