<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/edit.css">
    
</head>


<body>
<?php include "./parts/header.php"?>
    <?php
    require_once 'classes/dbh.classes.php';
    require_once 'view.php';

    $imageUploader = new ImageUploader();

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $imageData = $imageUploader->getImageById($id);
            if ($imageData) {
                echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData['image']) . '" class="img-fluid" alt="Image">';
                echo '<form method="post" enctype="multipart/form-data">';
                echo '<input type="file" name="new_image" required>';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<button type="submit">Update Image</button>';
                echo '</form>';
            } else {
                echo "Image not found.";
            }
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
            $id = $_POST['id'];
            $newImageData = file_get_contents($_FILES['new_image']['tmp_name']);
            $imageUploader->updateImage($id, $newImageData);
        } else {
            echo "Error uploading file.";
        }
    }
    ?>
   

</body>

</html>