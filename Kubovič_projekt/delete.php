<?php
require_once 'view.php';  

$host = 'localhost';
$dbname = 'ooplogin';
$username = 'root';
$password = '';

$imageUploader = new ImageUploader($host, $dbname, $username, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $imageUploader->deleteImage($id);
} else {
    header("Location: galéria.php");
    exit();
}
?>