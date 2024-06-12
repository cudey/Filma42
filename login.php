<?php 
  $is_invalid = false;
  if($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__."../loginregister/connection.php";

    $select = sprintf("SELECT * FROM userinfo WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($select);
    $user = $result->fetch_assoc();

    $adminselect = sprintf("SELECT * FROM userinfo WHERE id = '1'");

    $adminresult = $mysqli->query($adminselect);
    $admin = $adminresult->fetch_assoc();

    if($admin){
      if(password_verify($_POST["password"], $admin["password"])){
        session_start();

        $_SESSION["user_id"] = $admin["id"];
        header("Location: adminpage/adminpage.php");
        exit;
      }
    }
    if($user){
      if(password_verify($_POST["password"], $user["password"])){
        session_start();

        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit;
      }
    }

    $is_invalid = true;
    
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login / Signup</title>

  <link rel="stylesheet" href="./assets/css/loginform.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>

      <a href="./index.php" class="logo">
        <img src="./assets/images/logo.svg" alt="Filmlane logo" />
      </a>
    </div>
  </header>

  <main>
    <div class="form-modal">
      <div class="form-toggle">
        <button id="login-toggle">log in</button>
      </div>

      <div id="login-form">
      <?php 
        if($is_invalid):?>
        <em class="error">Invalid Login!</em>
      <?php
        endif; ?>

        <form method="post">
          <input type="text" id="emailuser" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Enter Email" />
          <input type="password" id="lopassword" name="password" placeholder="Enter Password">
          <button class="button btn login" type="submit" name="login" value="Sign In">login</button>
          <p><a>Forgotten account</a></p>
          <p>Not a register user? <a href="signup.php"> Create Account</a></p>
        </form>
      </div>
    </div>
  </main>

  <?php 

  ?>

</body>

</html>