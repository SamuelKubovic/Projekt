<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/galéria.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galéria</title>
</head>

<body class="custom-bg-dark">
    <?php include "./parts/header.php"?>

    <main>
        <?php
    require_once 'view.php';
    require_once 'classes/dbh.classes.php';

    $db = new Dbh();
    $conn = $db->connect();

    $imageUploader = new ImageUploader($conn);
    ?>

        <div class="container">
            <h1 class="mt-4 mb-4">Image Gallery</h1>
            <?php $imageUploader->displayImages(); ?>
        </div>

        <?php 
            if(isset($_SESSION['userid'])){
                ?>
                <div class="row mt-4 justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Nahraj obrázok</h2>
                <form method="post" action="view.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="image" class="form-label">Výber obrázok</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/jpeg" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Nahraj obrázok</button>
                </form>
            </div>
        </div>
            <?php }?>
        

        

        <br>

        <script src="js/app.js" defer></script>
    </main>

    <?php include "./parts/footer.php"?>

</body>

</html>