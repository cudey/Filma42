<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminpage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div class="area"></div>
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
            <a href="../index.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Index Page
                    </span>
                </a>
            </li>
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
            <h2 class="contactform">Contact made by users</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once 'contactmodel.php';
                        ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>