<?php
//   include 'modify.php';
// header("Location: ./admin.php");
$con = mysqli_connect('localhost', 'root', '', 'test');
$id = $_GET['bookid'];

// database insert SQL code
$query = "DELETE FROM `userUpload` WHERE BookId='$id' ";
// insert in database
$rs = mysqli_query($con, $query);

header('location:userUpload.php');

?>
