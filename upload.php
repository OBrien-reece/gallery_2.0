<?php

if(isset($_POST['file_upload_submit'])) {

	// echo "<prev>";

	// print_r($_FILES['file_upload']);

	// echo "<prev>";	

	$upload_errors = array(
		UPLOAD_ERR_OK => "There is no error, the file uploaded with success.",
		UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
		UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
		UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
		UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
		UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
		UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
		UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.',
	);

	$the_filetmp_name = $_FILES['file_upload']['tmp_name'];

	$the_file = $_FILES['file_upload']['name'];

	$directory = 'uploads';	

	if(move_uploaded_file($the_filetmp_name, $directory . "/" . $the_file)) {

		$the_message = "File uploaded succesfully";

	}else {

		$the_error = $_FILES['file_upload']['error'];

	    $the_message = $upload_errors[$the_error];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    
    <h2 style="color: red;">
	<?php 

	if(!empty($upload_errors)) {

		echo $the_message;
	}


	?>
    </h2>


	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file_upload">

		<input name="file_upload_submit" type="submit" name="">
	</form>

</body>
</html>