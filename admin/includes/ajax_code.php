<?php include("init.php"); ?>

<?php  

$user = new User();


if(isset($_POST['image_name'])) {

	$user->user_save_user_image($_POST['image_name'], $_POST['user_id']);

	// echo "Data from the server";
}

if(isset($_POST['photo_id'])) {

	Photo::display_sidebar_data($_POST['photo_id']);
}


?>