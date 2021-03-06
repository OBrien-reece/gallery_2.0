<?php require_once("includes/init.php"); ?>

<?php 

if($session->is_signed_in()) {

	redirect('index.php');

}

if(isset($_POST['submit'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	//Method to check the database user
	  
	$user_found = User::verify_user($username, $password);


	if($user_found) {

		$session->login($user_found);

		redirect("index.php");

	}else {

		$the_message = "Your password or username is incorrect";
	}

}else {
	$the_message = "";
	$username = "";
	$password = "";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
<div class="col-md-4 col-md-offset-3">

	<h1 class="bg-danger"><?php echo $the_message?></h1>

	<form action="" method="POST">
		<div class="form-group">
			<label for="username" style="color: white;">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username);?>">
		</div>
		<div class="form-group">
			<label for="password" style="color: white;">Password</label>
			<input type="text" class="form-control" name="password">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</div>		
	</form>
</div>