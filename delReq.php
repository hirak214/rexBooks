<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
$id = $_GET['bookid'];

// database insert SQL code
$query = "DELETE FROM `userRequest` WHERE BookId='$id' ";
// insert in database
$rs = mysqli_query($con, $query);

header('location:userReq.php');

?>
