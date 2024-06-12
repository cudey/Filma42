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
                <button id="signup-toggle">sign up</button>
            </div>
            
            <div id="login-form">
                <form action="loginregister/signupvalidation.php" method="post">
                    <input type="email" id="email" name="email" placeholder="Enter your email" />
                    <input type="text" id="username" name="username" placeholder="Choose username" />
                    <input type="password" id="supassword" name="password" placeholder="Create password" />
                    <input type="password" id="surepeatPassword" name="repeatPassword" placeholder="Repeat password" />
                    <button class="button btn signup" type="submit" name="signUp" value="create account">create account</button>
                    <p>
                        Clicking <strong>create account</strong> means that you are agreeing
                        to our <a>terms of services.</a>
                    </p>
                    <p>
                        Already have an account? <a href="login.php">Login Now</a>
                    </p>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/loginform.js"></script>
    <?php
        
    ?>

</body>

</html>