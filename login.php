<?php include('register.php'); ?>
<html>
  <head>
      <title>Login & Registration Form</title>
      <link rel="stylesheet"  href="style.css">
 </head>
 <body>
     <div class="header">
     <h1>Login Form </h1>
     </div>
    <div class="inputdata">
    <form action="register.php" method="form">
           <label>User Name<input type="text" name="uname"></label> <br> <br>
           <label>Password<input type="password" name="password_1"></label> <br> <br>
          <button type="submit" Name="register" class="btn">Login</button>
          <p>
           Not yet a member ? <a href="index.php">Sign Up</a>
          </p>
           </form>
           </div>
 </body>
</html>