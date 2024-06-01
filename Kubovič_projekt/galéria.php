<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/galéria.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galéria</title>
</head>

<body>
<?php include "./parts/header.php"?>

    <main>
    <form action="view.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
        



        <?php
  if(!empty($_GET['id'])){
    
     $dbHost     = 'localhost';
     $dbUsername = 'root';
     $dbPassword = '';
     $dbName     = 'ooplogin';

     $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

     if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
     }
     $result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");
     if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
   }
  ?>

  <script src="js/app.js" defer></script>
    </main>
    






    <?php include "./parts/footer.php"?>
</body>

</html>