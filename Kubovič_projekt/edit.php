<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/edit.css">
    
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                echo '<div class="image-container">';
echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData['image']) . '" class="img-fluid" alt="Image">';
echo '</div>';
echo '<form method="post" enctype="multipart/form-data" class="upload-form">';
echo '<label for="new_image" class="custom-file-upload">';
echo '<input type="file" name="new_image" id="new_image" required>';
echo 'Choose a new image';
echo '</label>';
echo '<input type="hidden" name="id" value="' . $id . '">';
echo '<button type="submit" class="btn btn-primary">Update Image</button>';
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

<?php include "./parts/footer.php"?>
   

</body>

</html>