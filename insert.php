<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','join_us');

// get the post records
   $email = $_REQUEST['email'];


// database insert SQL code
$sql = "INSERT INTO user VALUES ('$email')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>