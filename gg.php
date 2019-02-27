<?php
$servername = "localhost";
$database = "akash";
$username = "appodil";
$password = "akash";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$CustomerId = $_POST['CustomerId'];
$Fname = $_POST['Fname'];
$LName = $_POST['LName'];
$MobNo = $_POST['MobNo'];
$email = $_POST['email'];
$Address = $_POST['Address'];
$sql = "INSERT INTO `customer data` (`customer id`, `first name`, `last name`, `mobile number`, `email`, `address`) VALUES ('$CustomerId', '$Fname', '$LName', '$MobNo', '$email', '$Address')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>