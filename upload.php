<?php
include "db_connect.php";

$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$file = $_FILES["fileToUpload"];
$filename = basename($file["name"]);
$targetFilePath = $targetDir . $filename;
$fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
$allowedTypes = array("jpg", "jpeg", "png", "gif");

if(in_array($fileType, $allowedTypes) && $file["size"] <= 5000000) {
    if(move_uploaded_file($file["tmp_name"], $targetFilePath)) {
        $stmt = $conn->prepare("INSERT INTO uploads (filename) VALUES (?)");
        $stmt->bind_param("s", $filename);
        $stmt->execute();
        echo "File uploaded successfully.";
    } else {
        echo "Failed to upload file.";
    }
} else {
    echo "Invalid file type or file too large.";
}
?>