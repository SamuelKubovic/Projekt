
<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/FAQ.css">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
            rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/signup.css">
        <title>signup</title>
    </head>
</head>

<?php include "./parts/header.php"?>


<section class="signup-form">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email">
        <input type="password" name="pwd" placeholder="Heslo...">

        <button type="submit" name="submit">Log In</button>
    </form>
    <div class="phpkod">
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Vyplňte všetky polia!</p>";
                }
                else if($_GET["error"] == "wrongpwd"){
                    echo "<p>Zadali ste nesprávne heslo!</p>";
                }
                else if($_GET["error"] == "usernotfound"){
                    echo "<p>Zadali ste nesprávny Username!</p>";
                }
            }
            ?>
        </div>
</section>

<?php include "./parts/footer.php"?>