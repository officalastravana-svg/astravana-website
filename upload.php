<?php
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;

if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
header("Location: index.php");
}else{
echo "Upload failed.";
}
?>