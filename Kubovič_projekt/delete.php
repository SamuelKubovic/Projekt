<?php
require_once 'view.php';
require_once 'classes/dbh.classes.php';

$db = new Dbh();
$conn = $db->connect();

$imageUploader = new ImageUploader($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $imageUploader->deleteImage($id);
} else {
    header("Location: galéria.php");
    exit();
}
?>