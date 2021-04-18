<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>RexBooks@admin</title>
      <style>
         <?php include 'css/table.css'; ?>
      </style>
      <link rel="icon" href="http://localhost:8080/rexBooks/favicon.png" type="image/gif" sizes="16x16">
      <!-- CSS only -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- Font Awesome -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="styles.css">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Sriracha&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="http://localhost:8080/rexBooks/css/styles.css">
      <!-- Animation -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <style type="text/css">
         body {
         background-image: url("http://localhost:8080/rexBooks/images/mainwall.png");
         margin-bottom: 0px;
         color: white;
         }
         .basefooter {
         width: 100%;
         height: 50px;
         background-color: #442727;
         color: wheat;
         font-family: "Comfortaa";
         font-size: 1rem;
         text-align: center;
         position: absolute;
         bottom: 0%;
         }
         .navbar-custom {
         background-color: #442727;
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
      <br><br><br><br><br><br>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  navbar-custom" >
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
                  <a class="nav-link" href="http://localhost:8080/rexBooks/userUpload.php">Upload Book DB</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost:8080/rexBooks/userReq.php" tabindex="-1" aria-disabled="true">Request Book DB</a>
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
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form>
         </div>
      </nav>
      <h1 style="text-align: center; text-decoration: underline; color: beige; font-size: 3em;">Upload Book</h1>
      <table>
         <tr>
            <form method="post" name="registration" action="adminUpload.php" onsubmit="return validateUpload()" enctype="multipart/form-data">
               <td><input name="title" type="text" placeholder="Title"/></td>
               <td><input name="author" type="text" placeholder="Author/Publication"/></td>
               <td><input name="description" type="text" placeholder="Description" /></td>
               <td><input name="genre" type="text" placeholder="Genre"/></td>
         </tr>
         <tr>
         <td><input name="year" type="text" placeholder="Year Of Publish"/></td>
         <td><input name="language" type="text" placeholder="Language"/></td>
         <td><label><input name="file1" type="file"></label></td>
         <td><button class="red" type="submit" value="submit"><i class="fas fa-cloud-upload-alt"></i> Upload</button></td>
         </form>
         </tr>
      </table>
      <br><br><br><br>
      <h1 style="text-align: center; text-decoration: underline; color: beige; font-size: 3em;">Books Database</h1>
      <?php 
         $username = "root"; 
         $password = ""; 
         $database = "test"; 
         $mysqli = new mysqli("localhost", $username, $password, $database); 
         $query = "SELECT * FROM BookDB";
         
         
         echo '<table border="0" cellspacing="2" cellpadding="2"> 
               <tr> 
                   <td> <font face="Arial">BookID</font> </td> 
                   <td> <font face="Arial">Title</font> </td> 
                   <td> <font face="Arial">Author</font> </td> 
                   <td> <font face="Arial">Description</font> </td> 
                   <td> <font face="Arial">Genre</font> </td> 
                   <td> <font face="Arial">Year</font> </td> 
                   <td> <font face="Arial">Language</font> </td> 
                   <td> <font face="Arial">File</font> </td> 
                   <td> <font face="Arial">Modify</font> </td> 
                   <td> <font face="Arial">Delete</font> </td> 
               </tr>';
         
         if ($result = $mysqli->query($query)) {
             while ($row = $result->fetch_assoc()) {
                 $bookid = $row["BookID"];
                 $title = $row["Title"];
                 $author = $row["Author"];
                 $description = $row["Description"];
                 $genre = $row["Genre"]; 
                 $year = $row["Year"]; 
                 $language = $row["Language"]; 
                 $file = $row["File"]; 
         
                 echo '<tr> 
                           <td>'.$bookid.'</td> 
                           <td>'.$title.'</td> 
                           <td>'.$author.'</td> 
                           <td>'.$description.'</td> 
                           <td>'.$genre.'</td> 
                           <td>'.$year.'</td> 
                           <td>'.$language.'</td>
                           <td>'.$file.'</td> 
                           <td><a style="color: green;" href="modify.php?bookid='.$bookid.'" data-toggle="tooltip" data-placement="right" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                           <td><a style="color: red;" href="del.php?bookid='.$bookid.'" data-toggle="tooltip" data-placement="right" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                       </tr>';
             }
             $result->free();
         } 
         
         ?>
      <script> function submitForm() { 
         document.registration.submit(); 
         // document.serviceform.reset(); 
         } 
      </script>
      <script> 
         function validateUpload() { 
         	var title = document.forms["registration"]["name"];			 
         	var author = document.forms["registration"]["author"]; 
         	var description = document.forms["registration"]["description"]; 
         	var genre = document.forms["registration"]["genre"]; 
         	var year = document.forms["registration"]["year"]; 
         
         	if (title.value == "")								 
         	{ 
         		window.alert("Please enter a Title"); 
         		title.focus(); 
         		return false; 
         	} 
         
         	if (author.value == "")							 
         	{ 
         		window.alert("Please enter the Author's name"); 
         		author.focus(); 
         		return false; 
         	} 
         	
         	if (description.value == "")								 
         	{ 
         		window.alert("Please enter a valid description"); 
         		description.focus(); 
         		return false; 
         	} 
         
         	if (genre.value == "")						 
         	{ 
         		window.alert("Please enter the contents genre, comma seperated values"); 
         		genre.focus(); 
         		return false; 
         	} 
         
         	if (year.value == "" && year.length == 4)					 
         	{ 
         		window.alert("Please enter Year of Publication, 4 digit value only"); 
         		year.focus(); 
         		return false; 
         	} 
         
         	return true; 
         }
      </script> 
      <!-- <div class="basefooter">
         <p>RexBooks - For the Bookworms out there<br>
            All rights reserved RexBooks 2020
         </p>
      </div> -->
   </body>
</html>