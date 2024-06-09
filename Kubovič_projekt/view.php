<?php
require_once 'classes/dbh.classes.php';

class ImageUploader {
    private $pdo;

    public function __construct() {
        $dbh = new Dbh();
        $this->pdo = $dbh->connect();
    }

    public function uploadImage() {
        try {
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageData = file_get_contents($_FILES['image']['tmp_name']);
                $stmt = $this->pdo->prepare("INSERT INTO images (image) VALUES (?)");
                $stmt->bindParam(1, $imageData, PDO::PARAM_LOB);
                $stmt->execute();
                header("Location: galéria.php");
                exit();
            } else {
                echo "Error uploading file.";
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function updateImage($id, $newImageData)
{
    try {
        $stmt = $this->pdo->prepare("UPDATE images SET image = ? WHERE id = ?");
        $stmt->bindParam(1, $newImageData, PDO::PARAM_LOB);
        $stmt->bindParam(2, $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: galéria.php");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

    public function getImageById($id)
{
    try {
        $stmt = $this->pdo->prepare("SELECT image FROM images WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

    public function displayImages()
{
    try {
        $stmt = $this->pdo->query("SELECT id, image FROM images");
        echo '<div class="row">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="img-fluid" alt="Image">';
            echo '<form method="post" action="delete.php" class="mt-2">';
            if(isset($_SESSION['userid'])) {
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<button type="submit" class="btn btn-danger">Delete</button>';
            echo '</form>';
            echo '<form method="get" action="edit.php" class="mt-2">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<button type="submit" class="btn btn-primary">Edit</button>';
            }
            echo '</form>';
            echo '</div>';
            
        }
        echo '</div>';
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}

    public function deleteImage($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM images WHERE id = ?");
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: galéria.php");
            exit();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

$imageUploader = new ImageUploader();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageUploader->uploadImage();
}
?>