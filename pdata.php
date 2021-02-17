<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 $first_name = $_POST['first_name'];
 $age = $_POST['age'];
	 $last_name = $_POST['last_name'];
	 $sym = $_POST['sym'];
	 $email = $_POST['email'];
	 $dis = $_POST['dis'];
	 $amt = $_POST['amt'];
	 
$sql = "INSERT INTO studentdat (first_name, age,last_name, sym, email,dis,amt)
VALUES ('$first_name','$age','$last_name','$sym','$email','$dis','$amt')";

if (mysqli_query($conn, $sql)) {
 		echo "successful";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
header('location:patient.php');
mysqli_close($conn);
?>
