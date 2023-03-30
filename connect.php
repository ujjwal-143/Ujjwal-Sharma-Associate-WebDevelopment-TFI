<?php



  $fullName = $_POST['fullName'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $email = $_POST['email'];
  $mobileNumber = $_POST['mobileNumber'];
  $Gender = $_POST['gender'];
  $occupation = $_POST['occupation'];
  $interests = $_POST['interests'];
  $location = $_POST['location'];
  $language = $_POST['language'];
  $Availability = $_POST['availability'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipCode = $_POST['zipCode'];
  $fatherName = $_POST['fatherName'];
  $motherName = $_POST['motherName'];





$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>