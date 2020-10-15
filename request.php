<?php
header("Location: ./request.html");
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '', 'website');
// get the post records
$txtTitle = $_POST['title'];
$txtLetus = $_POST['letus']; 

// database insert SQL code
$sql = "INSERT INTO `requestDB` (`Title`, `Comments`)
VALUES ('$txtTitle', '$txtLetus')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Contact Records Inserted";
}
else {
echo "error";
}
?>