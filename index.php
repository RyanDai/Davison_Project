<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Signin page">
    <meta name="author" content="Ryan">

    <title>Sign in</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>

  <body>

  <?php
      session_start();

      require 'dbConnect.php';

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = mysqli_real_escape_string($conn,$_POST['inputEmail']);
        $password = mysqli_real_escape_string($conn,$_POST['inputPassword']);

        $sql = "SELECT UserID FROM Users WHERE Email = '$email' and Password = '$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword,table row must be 1 row.

        if($count == 1) {
           //session_register("myusername");
           $_SESSION['UserID'] = $row['UserID'];
           header("Location:homepage.php");
        }else {
           $error = "Your Login Name or Password is invalid";
           //echo "Your Login Name or Password is invalid";
           echo "<script type='text/javascript'>alert('Your Login Name or Password is invalid!')</script>";
        }
      }
  ?>

    <div class="container">
      <form class="form-signin" method="post" action="#" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name = "inputEmail" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name = "inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
    </div>

    <script src="./js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
