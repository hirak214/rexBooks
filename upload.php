<?php
header("Location: ./upload.html");
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '', 'website');
// get the post records
$txtTitle = $_POST['title'];
$txtAuthor = $_POST['author'];
$txtDescription = $_POST['description'];
$txtGenre = $_POST['genre'];
$txtYear = $_POST['year'];

// database insert SQL code
$sql = "INSERT INTO `uploadDB` (`Title`, `Author`, `Description`, `Genre`, `YearOfPublish`)
VALUES ('$txtTitle', '$txtAuthor', '$txtDescription', '$txtGenre','$txtYear')";

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