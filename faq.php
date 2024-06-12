<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/loginregister/connection.php";

    $sql = "SELECT * FROM userinfo WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    print_r($_SESSION);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filma42 - FAQ</title>

    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <a href="./index.php" class="logo">
                <img src="./assets/images/logo.svg" alt="Filmlane logo" />
            </a>

            <div class="header-actions">
                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <?php if (isset($user)) : ?>
                    <p>Hello, <?= htmlspecialchars($user["username"]) ?>.</p> <a href="loginregister/logout.php"><button class="btn btn-primary">Log out</button></a>
                <?php else : ?>
                    <a href="login.php"><button class="btn btn-primary">Sign in</button></a>
                <?php endif; ?>
            </div>

            <button class="menu-open-btn" data-menu-open-btn>
                <ion-icon name="reorder-two"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="./index.php" class="logo">
                        <img src="./assets/images/logo.svg" alt="Filmlane logo" />
                    </a>

                    <button class="menu-close-btn" data-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li>
                        <a href="./index.php" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Movie</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Tv Show</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Web Series</a>
                    </li>
                </ul>

                <ul class="navbar-social-list">
                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>




    <main>
        <section class="faq-container">
            <h1 class="faq-heading">FAQ'S</h1>
            <hr class="hr-line">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">Why choose Filma42?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Is your site safe?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">Does your site give viruses?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-four">
                <!-- faq question -->
                <h1 class="faq-page">Why is your site so slow?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-five">
                <!-- faq question -->
                <h1 class="faq-page">Does Filma42 cost money?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
        </section>
    </main>




    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-brand-wrapper">
                    <a href="./index.php" class="logo">
                        <img src="./assets/images/logo.svg" alt="Filmlane logo" />
                    </a>

                    <ul class="footer-list">
                        <li>
                            <a href="./index.php" class="footer-link">Home</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Movie</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">TV Show</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Web Series</a>
                        </li>

                    </ul>
                </div>

                <div class="divider"></div>

                <div class="quicklink-wrapper">
                    <ul class="quicklink-list">
                        <li>
                            <a href="#" class="quicklink-link">Faq</a>
                        </li>

                        <li>
                            <a href="contactus.php" class="quicklink-link">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Privacy</a>
                        </li>
                    </ul>

                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>