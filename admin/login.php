<?php
include "../incs/db.php";

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $email = htmlentities($email);
  $password = htmlentities($password);

  $sql = "SELECT * FROM `users` WHERE `email`='$email'";
  $query = mysqli_query($conn, $sql);

  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    $db_email = $row['email'];
    $db_password = $row['password'];

    $newPassword = crypt($password, $db_password);

    if ($email == $db_email && $newPassword == $db_password) {
      session_start();
      $_SESSION['email'] = $db_email;
      header('location:index.php');

    } else {
      $error ="Incorect Email or Passwords";
    }
  } else {
    $error ="Incorect Email or Passwords";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login | Admin</title>
  <!-- <link href="css/animated.css" rel="stylesheet"> -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <form class="form-signin animated shake">
      <h2 class="form-signin-heading">Admin_Login</h2>
      <center>
        <?php if (isset($error)) : ?>
          <span style="color:red;"><?= $error?></span>

          <?php endif;?>
      </center>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required autofocus>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign in</button>
    </form>
  </div> <!-- /container -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>