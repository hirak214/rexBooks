<?php
header("Location: ./admin.php");
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '', 'test');
// get the post records
$txtTitle = $_POST['title'];
$txtAuthor = $_POST['author'];
$txtDescription = $_POST['description'];
$txtGenre = $_POST['genre'];
$txtYear = $_POST['year'];
$txtlanguage = $_POST['language'];
$filename = $_FILES['file1']['name'];

move_uploaded_file($_FILES['file1']['tmp_name'], ($filename));


// database insert SQL code
$sql = "INSERT INTO `BookDB` (`Title`, `Author`, `Description`, `Genre`, `Year`, `Language`, `File`)
VALUES ('$txtTitle', '$txtAuthor', '$txtDescription', '$txtGenre','$txtYear', '$txtlanguage', '$filename')";

// insert in database
$rs = mysqli_query($con, $sql);
header('location:admin.php');
?>