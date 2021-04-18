<!DOCTYPE html>
<html>
   <head>
      <title>Rex Books</title>
      <link rel="icon" href="http://localhost:8080/rexBooks/favicon.png" type="image/gif" sizes="16x16">
      <!-- CSS only -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sriracha&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
      <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Montserrat:500,700&amp;display=swap">
      <!-- Font Awesome -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="styles.css">
      <style type="text/css">
         body, html {
         background-image: url("http://localhost:8080/rexBooks/images/mainwall.png");
         background-color: #ebecf0;
         }
         body, p, input, select, textarea, button {
         font-family: 'Montserrat', sans-serif;
         letter-spacing: -0.2px;
         font-size: 16px;
         }
         div, p {
         color: #babecc;
         text-shadow: 1px 1px 1px #fff;
         }
         form {
         padding: 16px;
         width: 320px;
         margin: 0 auto;
         }
         .segment {
         padding: 32px 0;
         text-align: center;
         }
         button, input {
         border: 0;
         outline: 0;
         font-size: 16px;
         border-radius: 320px;
         padding: 16px;
         background-color: #ebecf0;
         text-shadow: 1px 1px 0 #fff;
         }
         label {
         display: block;
         margin-bottom: 24px;
         width: 100%;
         }
         input {
         margin-right: 8px;
         box-shadow: inset 2px 2px 5px #babecc, inset -5px -5px 10px #fff;
         width: 100%;
         box-sizing: border-box;
         transition: all 0.2s ease-in-out;
         appearance: none;
         -webkit-appearance: none;
         }
         input:focus {
         box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
         }
         button {
         color: #61677c;
         font-weight: bold;
         box-shadow: -5px -5px 20px #fff, 5px 5px 20px #babecc;
         box-shadow: -2px -2px 5px #fff, 2px 2px 5px #babecc;
         transition: all 0.2s ease-in-out;
         cursor: pointer;
         font-weight: 600;
         }
         button:hover {
         box-shadow: -4px -4px 10px #a1623d, 4px 4px 10px #a1623d;
         }
         button:active {
         box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
         }
         button .icon {
         margin-right: 8px;
         }
         button.unit {
         border-radius: 8px;
         line-height: 0;
         width: 48px;
         height: 48px;
         display: inline-flex;
         justify-content: center;
         align-items: center;
         margin: 0 8px;
         font-size: 19.2px;
         }
         button.unit .icon {
         margin-right: 0;
         }
         button.red {
         display: block;
         width: 100%;
         color: #ae1100;
         }
         .input-group {
         display: flex;
         align-items: center;
         justify-content: flex-start;
         }
         .input-group label {
         margin: 0;
         flex: 1;
         }
         .basefooter {
	position: absolute;
	bottom: 0;
  width: 100%;
  height: 50px;
  background-color: #442727;
  color: wheat;
  font-family: "Comfortaa";
  font-size: 1rem;
  text-align: center;
}

         .navbar-custom {
         background-color: #442727;
         font-family: sans-serif;
         text-shadow: 0px 0px 0px;
         }
         /* change the brand and text color */
         .navbar-custom .navbar-brand,
         .navbar-custom .navbar-text {
         color: rgba(255,255,255,.8);
         }
         /* change the link color */
         .navbar-custom .navbar-nav .nav-link {
         color: rgba(255,255,255,.5);
         }
         /* change the color of active or hovered links */
         .navbar-custom .nav-item.active .nav-link,
         .navbar-custom .nav-item:hover .nav-link {
         color: wheat;
         font-size: 1.06rem;
         }
      </style>
   </head>
   <body>
   <?php
    //   include 'modify.php';
   //  header("Location: ./modify.php");
            $con = mysqli_connect('localhost', 'root', '', 'test');
            // get the post records
            $txtBookID = $_POST['bookid'];
            $txtTitle = $_POST['title'];
            $txtAuthor = $_POST['author'];
            $txtDescription = $_POST['description'];
            $txtGenre = $_POST['genre'];
            $txtYear = $_POST['year'];
            $txtlanguage = $_POST['language'];
            $filename = $_FILES['file1']['name'];
            move_uploaded_file($_FILES['file1']['tmp_name'], ($filename));
            
            $id = $_GET['bookid'];
            $showquery = "SELECT * FROM BookDB WHERE BookID=";
            $finalquery = $showquery . "'" . $id . "'";
            $showdata = mysqli_query($con,$finalquery);
            $arrdata = mysqli_fetch_array($showdata);

            // database insert SQL code
            // $sql = "INSERT INTO `BookDB` (`BookID`, `Title`, `Author`, `Description`, `Genre`, `Year`, `Language`)
            // VALUES ('$txtBookID', '$txtTitle', '$txtAuthor', '$txtDescription', '$txtGenre','$txtYear', '$txtlanguage')";
            $query = "UPDATE `BookDB` SET `BookID`='$txtBookID',`Title`='$txtTitle',`Author`='$txtAuthor',`Description`='$txtDescription',`Genre`='$txtGenre',`Year`='$txtYear',`Language`='$txtlanguage', `File`='$filename' WHERE BookId='$id' ";
            // insert in database
            $rs = mysqli_query($con,$query);
            // header('location:admin.php');
            ?>

      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  navbar-custom" data-aos="fade-down">
         <a class="navbar-brand" href="homepage.html" style="font-size: 2.7rem; font-family: 'Pacifico', cursive;">RexBooks</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link disabled"  href="#"><span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost:8080/rexBooks/upload.html">Upload Book</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost:8080/rexBooks/request.html" tabindex="-1" aria-disabled="true">Request Book</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/classics.html">Classics</a>
                     <a class="dropdown-item" href="#">Sci-Fi</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/magazines.html">Magazines</a>  
                     <a class="dropdown-item" href="#">Action & Adventure</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/comics.html">Comics</a>
                     <a class="dropdown-item" href="#">Mystery & Detective</a>
                     <a class="dropdown-item" href="#">Fantasy</a>
                     <a class="dropdown-item" href="#">Fiction</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/horror.html">Horror</a>
                     <a class="dropdown-item" href="#">Romance</a>
                     <a class="dropdown-item" href="#">Sci-Fi</a>
                     <a class="dropdown-item" href="#">Suspense & Thrillers</a>
                     <a class="dropdown-item" href="http://localhost:8080/rexBooks/bookPages/cat/bio.html">Biographies & Autobiographies</a>
                     <a class="dropdown-item" href="#">Self Help</a>
                     <a class="dropdown-item" href="#">True Crime</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <br><br><br><br><br>
      <div class="segment">
         <h1>Modify Book</h1>
      </div>
      
      <form method="post" name="modifyBook" action="modify.php">
              <label><input value="<?php echo $arrdata['BookID'] ?>" name="bookid" type="text"/></label>
              <label><input value="<?php echo $arrdata['Title'] ?>" name="title" type="text" placeholder="Title"/></label>
              <label><input value="<?php echo $arrdata['Author'] ?>" name="author" type="text" placeholder="Author/Publication"/></label>
              <label><input value="<?php echo $arrdata['Description'] ?>" name="description" type="text" placeholder="Description"/></label>
              <label><input value="<?php echo $arrdata['Genre'] ?>" name="genre" type="text" placeholder="Genre"/></label>
              <label><input value="<?php echo $arrdata['Year'] ?>" name="year" type="text" placeholder="Year Of Publish"/></label>
              <label><input value="<?php echo $arrdata['Language'] ?>" name="language" type="text" placeholder="Language"/></label>
              <label><input value="<?php echo $arrdata['File'] ?>" name="file1" type="file" /></label>
            
              <button class="red" type="submit" value="submit"><i class="fas fa-cloud-upload-alt"></i>Update</button> <br>
              <button class="red"><i class="fas fa-long-arrow-alt-left"></i><a style="padding:5px; color:#ae1100;"href="admin.php">Back</a></button> 
              
      </form>
      
      
     
      <br><br><br>
      <div class="basefooter" data-aos="fade-up">
         <p>RexBooks - For the Bookworms out there<br>
            All rights reserved RexBooks 2020
         </p>
      </div>
      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      
    </body>
</html>