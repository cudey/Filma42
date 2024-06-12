<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../assets/css/adminpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <title>Filma42 - Admin Page - ADD</title>
</head>

<body>
  <nav class="main-menu">
    <ul>
      <li>
        <a href="adminpage.php">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Admin Dashboard
          </span>
        </a>
      <li>
        <a href="crud.php">
          <i class="fa fa-cogs fa-2x"></i>
          <span class="nav-text">
            User Database
          </span>
        </a>
      </li>
      <li>
        <a href="contactform.php">
          <i class="fa fa-cogs fa-2x"></i>
          <span class="nav-text">
            Contact Forms
          </span>
        </a>
      </li>
    </ul>

    <ul class="logout">
      <li>
        <a href="../loginregister/logout.php">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Logout
          </span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <h1 class="text-center">Add new user</h1>
        <hr style="height: 1px;color: black;background-color: black;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 mx-auto">
        <?php
        include 'model.php';
        $model = new Model();
        $insert = $model->insert();
        ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>