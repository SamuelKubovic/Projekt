<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/slider.css">
  <title>Domov</title>
<body>
<?php include "./parts/header.php"?>

    <form action="view.php" method="post" enctype="multipart/form-data" class="upload-form">    
        <label for="image-upload" class="upload-label">Select image to upload:</label>
        <input type="file" name="image" id="image-upload" class="upload-input">
        <input type="submit" name="submit" value="UPLOAD" class="upload-button">
    </form>

    <?php include "./parts/footer.php"?>
</body>
</html>