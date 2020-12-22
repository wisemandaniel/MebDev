<?php

$host = "localhost";
$userName = "root";
$password = " ";
$dbName = "contactForm";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$_POST['your_email'] !=''))
{

$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPhone = $conn->real_escape_string($_POST['phone']);
$comments = $conn->real_escape_string($_POST['message']);
$sql="INSERT INTO contactForm_into (name, email, phone, message) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}

?>