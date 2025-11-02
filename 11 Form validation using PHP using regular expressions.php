<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$errors = [];
if (!preg_match("/^[a-zA-Z\s]+$/", $name)) $errors[] = "Invalid name.";
if (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,3}$/", $email)) $errors[] = "Invalid email.";
if (!preg_match("/^[0-9]{10}$/", $phone)) $errors[] = "Phone must be 10 digits.";
if (empty($errors)) echo "<p style='color:green;'>Form submitted successfully!</p>";
else foreach ($errors as $e) echo "<p style='color:red;'>$e</p>";
}
?>
<form method="post" style="max-width:300px;margin:50px auto;padding:20px;border:1px solid #ccc;border-radius:5px;font-family:Arial;">
<label>Name:</label><br>
<input type="text" name="name" style="width:100%;padding:5px;margin:5px 0;"><br>
<label>Email:</label><br>
<input type="text" name="email" style="width:100%;padding:5px;margin:5px 0;"><br>
<label>Phone:</label><br>
<input type="text" name="phone" style="width:100%;padding:5px;margin:5px 0;"><br>
<input type="submit" value="Submit" style="padding:7px 15px;background:#28a745;color:#fff;border:none;border-radius:3px;cursor:pointer;">
</form>
