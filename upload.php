<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["rescue_image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file type
if(in_array($imageFileType, ['jpg','jpeg','png','gif'])){
    if(move_uploaded_file($_FILES["rescue_image"]["tmp_name"], $target_file)){
        echo "<script>alert('Photo Uploaded Successfully');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Upload Failed');window.location.href='index.html';</script>";
    }
} else {
    echo "<script>alert('Invalid File Type');window.location.href='index.html';</script>";
}
?>
