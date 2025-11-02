<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$message = '';
$upload_dir = 'uploads/';
if (!is_dir($upload_dir)) {
$message = "SERVER ERROR: The destination folder 'uploads/' does not exist. Please create this folder in the same directory as your PHP script.";
die($message);
}
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
$file = $_FILES['file'];
$target_file = $upload_dir . basename($file['name']);
if (move_uploaded_file($file['tmp_name'], $target_file)) {
$message = "File uploaded successfully!";
} else {
$message = "Error: Could not move the file. Check server permissions for the 'uploads' folder.";
}
} else {
$message = "Error: No file was uploaded or an upload error occurred.";
}
die($message);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>File Upload with Validation</title>
<style>
h1 { color: green; }
body { text-align: center; font-family: sans-serif; }
#imagePreview img { max-width: 300px; margin-top: 20px; border: 1px solid #ccc; }
</style>
</head>
<body>
<h1>JavaScript File Upload Validation</h1>
<form action="" method="post" enctype="multipart/form-data">
<p>Upload an Image (jpg, jpeg, png, gif)</p>
<input type="file" id="file" name="file" onchange="return fileValidation()" required />
<br><br>
<input type="submit" value="Upload Image">
</form>
<div id="imagePreview"></div>
<script>
function fileValidation() {
var fileInput = document.getElementById('file');
var filePath = fileInput.value;
var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
if (!allowedExtensions.exec(filePath)) {
alert('Invalid file type');
fileInput.value = '';
document.getElementById('imagePreview').innerHTML = '';
return false;
} else {
if (fileInput.files && fileInput.files[0]) {
var reader = new FileReader();
reader.onload = function(e) {
document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result + '"/>';
};
reader.readAsDataURL(fileInput.files[0]);
}
}
}
</script>
</body>
</html>
