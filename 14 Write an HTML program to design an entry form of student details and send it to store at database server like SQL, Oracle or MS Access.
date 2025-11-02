<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$sql = "INSERT INTO students (student_name, student_email, student_contact, student_address) VALUES ('$name', '$email', '$contact', '$address')";
if ($conn->query($sql) === TRUE) {
$message = "New record created successfully!";
} else {
$message = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Experiment 14: Student Entry Form</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}
.maindiv {
background: #fff;
padding: 30px;
border-radius: 8px;
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
width: 100%;
max-width: 450px;
}
.title h2 {
text-align: center;
margin-bottom: 20px;
}
label {
display: block;
margin-top: 15px;
margin-bottom: 5px;
font-weight: bold;
}
.input, textarea {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
.submit {
width: 100%;
padding: 12px;
margin-top: 20px;
background-color: #5cb85c;
color: white;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 16px;
}
.submit:hover {
background-color: #4cae4c;
}
.message {
text-align: center;
padding: 10px;
margin-bottom: 15px;
border-radius: 4px;
font-weight: bold;
background-color: #dff0d8;
}
</style>
</head>
<body>
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Insert Student Data</h2>
</div>
<?php
if (!empty($message)) {
echo "<p class='message'>$message</p>";
}
?>
<form action="" method="post">
<label>Name:</label>
<input class="input" name="name" type="text" value="" required>
<label>Email:</label>
<input class="input" name="email" type="email" value="" required>
<label>Contact:</label>
<input class="input" name="contact" type="text" value="" required>
<label>Address:</label>
<textarea name="address" rows="4" required></textarea><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</div>
</div>
</body>
</html>
