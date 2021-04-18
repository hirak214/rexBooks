<?php
header("Location: ./upload.html");

$con = mysqli_connect('localhost', 'root', '', 'test');

$txtTitle = $_POST['title'];
$txtAuthor = $_POST['author'];
$txtDescription = $_POST['description'];
$txtGenre = $_POST['genre'];
$txtYear = $_POST['year'];
$txtlanguage = $_POST['language'];
$filename = $_FILES['file1']['name'];
move_uploaded_file($_FILES['file1']['tmp_name'], ($filename));
$sql = "INSERT INTO `userUpload` (`Title`, `Author`, `Description`, `Genre`, `Year`, `Language`, `file`)
            VALUES ('$txtTitle', '$txtAuthor', '$txtDescription', '$txtGenre','$txtYear', '$txtlanguage', '$filename')";

mysqli_query($con, $sql);
header("Location: upload.html");

?>
