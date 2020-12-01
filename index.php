

<html>
  <head>
      <title>Login & Registration Form</title>
      <link rel="stylesheet"  href="style.css">
 </head>
 <body>
    <!--display validation errors here-->
    <?php include('errors.php'); ?>
     <div class="header">
     <h1>Register Form </h1>
     </div>
    <div class="inputdata">
    <form action="register.php" method="form">
           <label>User Name<input type="text" name="uname"></label> <br> <br>
           <label>Email<input type="text" name="email"></label> <br><br>
           <label>Password<input type="password" name="password_1"></label> <br> <br>
           <label>Comform Password<input type="password" name="password_2"></label> <br><br>
          <button type="submit" Name="register" class="btn">Register</button>
          <p>
           Already a member ? <a href="login.php">Sign in</a>
          </p>
           </form>
           </div>

 </body>
</html>