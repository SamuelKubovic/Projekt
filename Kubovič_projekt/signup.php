
<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/FAQ.css">
        <link rel="stylesheet" href="css/style.css">
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
    <h2>Sign Up</h2>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Vaše meno...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Heslo...">
        <input type="password" name="pwdrepeat" placeholder="Zopakujte heslo...">
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo "<p>Vyplňte všetky polia</p>";
        }
        else if ($_GET['error'] == "invaliduid") {
            echo "<p>Zadajte vhodý username</p>";
        }
        else if ($_GET['error'] == "invalidemail") {
            echo "<p>Zadajte vhodý email</p>";
        }
        else if ($_GET['error'] == "passworddontmatch") {
            echo "<p>Heslá sa nezhodujú!</p>";
        }
        else if ($_GET['error'] == "stmtfailed") {
            echo "<p>Niečo sa pokazilo, skúste znova!</p>";
        }
        else if ($_GET['error'] == "usernametaken") {
            echo "<p>Username už existuje!</p>";
        }
        else if ($_GET['error'] == "none") {
            echo "<p>Zaregistrovali ste sa!</p>";
        }
    }
    ?>
</section>
<div></div>



<?php include "./parts/footer.php"?>
