<?php
session_start();
header("Location: ./theAlchemist.php");
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '', 'test');
// get the post records
$txtComments = $_POST['comment'];


// database insert SQL code
$sql = "INSERT INTO `Cooments` (`BookID`, `Comment`)
VALUES ('$_SESSION[idvar]', '$txtComments')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Contact Records Inserted";
header("Location: theAlchemist.php");
}
else {
echo "error";
}
?>