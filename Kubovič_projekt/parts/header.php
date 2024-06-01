


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
      if(isset($_SESSION["userid"]))
      {
    ?>      
      <a href='includes/logout.inc.php'>Logout</a>
      <a href=#><?php echo $_SESSION["useruid"]; ?></a>
    <?php
      }
      else
      { 
    ?>
      <a href='signup.php'>Signup</a>
      <a href=login.php>Login</a>
    <?php
      }
    ?>  
 
    </nav>

    <div class="social-media">
      <a href="https://www.instagram.com/scuderiaferrari/" target=”_blank”><i class='bx bxl-instagram'></i></a>
      <a href="https://www.facebook.com/ScuderiaFerrari" target="_blank"><i class='bx bxl-facebook-square'></i></a>
      <a href="https://twitter.com/ScuderiaFerrari" target="_blank"><i class='bx bxl-twitter'></i></a>
    </div>
  </header>