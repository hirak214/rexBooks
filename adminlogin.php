<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href=
         "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login Page</title>
   </head>
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
   <body>
      <form action="adminvalidate.php" method="post">
         <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
               <i class="fa fa-user" aria-hidden="true"></i>
               <input type="text" placeholder="Adminname"
                  name="adminname" value="">
            </div>
            <div class="textbox">
               <i class="fa fa-lock" aria-hidden="true"></i>
               <input type="password" placeholder="Password"
                  name="password" value="">
            </div>
            <input class="button" type="submit"
               name="login" value="Sign In">
         </div>
      </form>
   </body>
</html>