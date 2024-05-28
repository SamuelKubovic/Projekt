<?php
    session_start();
?>


<header class="header ">
    <a href="index.php" class="logo">
      <img src="img/ferrarilogo.png" class="ferrarilogo" alt="">
    </a>

    <nav class="navbar">
      <a href="index.php">Domov</a>
      <a href="FAQ.php ">FAQ</a>
      <a href="kontakt.php">Kontakt</a>
      <a href="galéria.php">Galéria</a>
        <?php
        if (isset($_SESSION['useruid'])) {
            echo '<a href="includes/logout.inc.php">Logout</a>';
        }
        else{
            echo "<a href='signup.php'>Sign up</a>";
            echo "<a href='login.php'>Login</a>";
        }
        ?>

    </nav>

    <div class="social-media">
      <a href="https://www.instagram.com/scuderiaferrari/" target=”_blank”><i class='bx bxl-instagram'></i></a>
      <a href="https://www.facebook.com/ScuderiaFerrari" target="_blank"><i class='bx bxl-facebook-square'></i></a>
      <a href="https://twitter.com/ScuderiaFerrari" target="_blank"><i class='bx bxl-twitter'></i></a>
    </div>
  </header>