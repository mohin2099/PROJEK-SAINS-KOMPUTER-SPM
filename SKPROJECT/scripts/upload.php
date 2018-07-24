<?php
$target_dir = "test/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    	 echo "<script type='text/javascript'>alert('Gambar berjaya dimuat naik');</script>";
       
    } else {
    	 echo "<script type='text/javascript'>alert('Muat naik tidak berjaya');</script>";
       
    }
}
?>