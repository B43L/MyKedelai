<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUp</title>
  <!-- Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="login.css" />
</head>

<body>
  <div class="wrapper">
    <h1>login</h1>
    <form action="procceslogin.php" method="post">
      <input type="email" placeholder="email" name="email" />
      <input type="password" placeholder="password" name="password" />
      <input type="submit" value="login" name="login" class="login-btn">
    </form>
    <div class="member">
      Belum punya akun ?<a href="signup.php">Register</a>
    </div>
  </div>
</body>

</html>