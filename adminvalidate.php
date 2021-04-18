<?php
// header("Location: ./adminlogin.php");
$conn = "";
  
try {
    $con = mysqli_connect('localhost', 'root', '', 'loginpage');

}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$name = $_POST['adminname'];
$pass = $_POST['password'];

$sql = mysqli_query($con,"SELECT * FROM `adminlogin` WHERE name = '$name' and password ='$pass'");

$count = mysqli_num_rows($sql);

if($count > 0){
    header("Location: adminhome.html");
}
else {
   header("Location: adminlogin.php");
     } 

?>
