<?php
class ImageUploader {
    private $pdo;

    public function __construct($host, $dbname, $username, $password) {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
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
}


$host = 'localhost';
$dbname = 'ooplogin';
$username = 'root';
$password = '';

$imageUploader = new ImageUploader($host, $dbname, $username, $password);
$imageUploader->uploadImage();
?>
