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
  <?php
  require_once 'contentdatabase/connection.php';
  if (isset($_GET['ID'])) {
    $ID = mysqli_real_escape_string($mysqli, $_GET['ID']);
    $moviesql = "SELECT * FROM movies WHERE id = '$ID'";
    $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
    $row = mysqli_fetch_array($movieresult);
  }
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filma42 - <?php echo $row['title'] ?></title>

  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

  <!-- Header -->

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
    <article>

      <!--MOVIE DETAILS-->

      <section class="movie-detail">
        <div class="container">

          <figure class="movie-detail-banner">
            <?php
            require_once 'contentdatabase/connection.php';
            if (isset($_GET['ID'])) {
              $ID = mysqli_real_escape_string($mysqli, $_GET['ID']);

              $moviesql = "SELECT * FROM movies WHERE id = '$ID'";
              $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
              $row = mysqli_fetch_array($movieresult);
            }
            ?>
            <img src="./assets/images/<?php echo $row['img']; ?>">

            <button id="popup" class="play-btn">
              <ion-icon name="play-circle-outline"></ion-icon>
            </button>
            <div id="videoPopup1" class="popup">
              <div class="popup-content">
                <span class="close" id="close">×</span>
                <iframe
                  width="1240"
                  height="620"
                  src="<?php echo $row['trailer'] ?>"
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

          </figure>

          <div class="movie-detail-content">

            <p class="detail-subtitle">New Episodes</p>

            <h1 class="h1 detail-title"><?php echo $row['title']; ?></h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill"><?php echo $row['agerating']; ?></div>

                <div class="badge badge-outline"><?php echo $row['resolution']; ?></div>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php echo $row['year']; ?></time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M"><?php echo $row['length']; ?></time>
                </div>

              </div>

            </div>

            <p class="storyline"><?php echo $row['storyline']; ?></p>

            <div class="details-actions">

              <button class="share">
                <ion-icon name="share-social"></ion-icon>

                <span>Share</span>
              </button>

              <div class="title-wrapper">
                <p class="title">Prime Video</p>

                <p class="text">Streaming Channels</p>
              </div>

              <button class="btn btn-primary">
                <ion-icon name="play"></ion-icon>

                <span>Watch Now</span>
              </button>

            </div>

            <a href="./assets/images/<?php echo $row['img']; ?>" download class="download-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>

          </div>

        </div>
      </section>





      <!-- 
        - #TV SERIES
      -->

      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">Best TV Series</p>

          <h2 class="h2 section-title">World Best TV Series</h2>

          <ul class="movies-list">

            <li>
            <div class="movie-card">
                <?php
                require_once 'contentdatabase/connection.php';

                $moviesql = "SELECT * FROM movies WHERE id = 9";
                $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
                $row = mysqli_fetch_array($movieresult);
                ?>
                <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                  <figure class="card-banner">
                    <img src="./assets/images/<?php echo $row['img'] ?>" />
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                  </a>

                  <time datetime=""><?php echo $row['year']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline"><?php echo $row['resolution']; ?></div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime=""><?php echo $row['length']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $row['rating']; ?></data>
                  </div>
                </div>
              </div>
            </li>

            <li>
            <div class="movie-card">
                <?php
                require_once 'contentdatabase/connection.php';

                $moviesql = "SELECT * FROM movies WHERE id = 10";
                $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
                $row = mysqli_fetch_array($movieresult);
                ?>
                <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                  <figure class="card-banner">
                    <img src="./assets/images/<?php echo $row['img'] ?>" />
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                  </a>

                  <time datetime=""><?php echo $row['year']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline"><?php echo $row['resolution']; ?></div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime=""><?php echo $row['length']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $row['rating']; ?></data>
                  </div>
                </div>
              </div>
            </li>

            <li>
            <div class="movie-card">
                <?php
                require_once 'contentdatabase/connection.php';

                $moviesql = "SELECT * FROM movies WHERE id = 11";
                $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
                $row = mysqli_fetch_array($movieresult);
                ?>
                <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                  <figure class="card-banner">
                    <img src="./assets/images/<?php echo $row['img'] ?>" />
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                  </a>

                  <time datetime=""><?php echo $row['year']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline"><?php echo $row['resolution']; ?></div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime=""><?php echo $row['length']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $row['rating']; ?></data>
                  </div>
                </div>
              </div>
            </li>

            <li>
            <div class="movie-card">
                <?php
                require_once 'contentdatabase/connection.php';

                $moviesql = "SELECT * FROM movies WHERE id = 12";
                $movieresult = mysqli_query($mysqli, $moviesql) or die("Bad Query: $moviesql");
                $row = mysqli_fetch_array($movieresult);
                ?>
                <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                  <figure class="card-banner">
                    <img src="./assets/images/<?php echo $row['img'] ?>" />
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="<?php echo "./movie-details.php?ID={$row['id']}" ?>">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                  </a>

                  <time datetime=""><?php echo $row['year']; ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline"><?php echo $row['resolution']; ?></div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime=""><?php echo $row['length']; ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $row['rating']; ?></data>
                  </div>
                </div>
              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!--FOOTER-->

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
              <a href="faq.php" class="quicklink-link">Faq</a>
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

  <!--GO TO TOP-->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <script src="assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>