<?php 

//MAGIC METHODS
echo __FILE__ . "<br>";

echo __LINE__ . "<br>";

echo __DIR__ . "<br>";

if(file_exists(__DIR__)) {

	echo "yes" . "<br>";
}

if(is_file(__FILE__)) {

	echo "yes" . "<br>";
} else {
	echo "No" . "<br>";
}


if(is_dir(__FILE__)) {

	echo "yes" . "<br>";
} else {
	echo "No" . "<br>";
}

//Tinerary operators

echo file_exists(__FILE__) ? "Yes" : "No";

?>