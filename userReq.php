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
            <a class="nav-link" href="http://localhost:8080/rexBooks/admin.php">Live DB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/rexBooks/userUpload.php" tabindex="-1" aria-disabled="true">Upload Book DB</a>
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

    <h1 style="text-align: center; text-decoration: underline; color: beige; font-size: 3em;">Books Database</h1>
      <?php 
         $username = "root"; 
         $password = ""; 
         $database = "test"; 
         $mysqli = new mysqli("localhost", $username, $password, $database); 
         $query = "SELECT * FROM userRequest";
         
         
         echo '<table border="0" cellspacing="2" cellpadding="2"> 
               <tr> 
                   <td> <font face="Arial">ReqID</font> </td> 
                   <td> <font face="Arial">Title</font> </td> 
                   <td> <font face="Arial">Comments</font> </td> 
                   <td> <font face="Arial">Delete</font> </td> 
               </tr>';
         
         if ($result = $mysqli->query($query)) {
             while ($row = $result->fetch_assoc()) {
                 $bookid = $row["BookID"];
                 $title = $row["Title"];
                 $comments = $row["Comments"];
         
                 echo '<tr> 
                           <td>'.$bookid.'</td> 
                           <td>'.$title.'</td> 
                           <td>'.$comments.'</td>
                           <td><a style="color: red;" href="delReq.php?bookid='.$bookid.'" data-toggle="tooltip" data-placement="right" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                       </tr>';
             }
             $result->free();
         } 
        
         ?>
      <br><br>
      <div class="basefooter">
  <p>RexBooks - For the Bookworms out there<br>
  All rights reserved RexBooks 2020</p>
</div>
   </body>
</html>