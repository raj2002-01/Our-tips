
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php


$id = $_GET['id']; // get id through query string

$query = "delete from studentdat where id = '$id'"; // delete query

$del = mysqli_query($conn, $query);

if($del)
{
   echo "<script>

   		 alert('Hello I am an alert box');

   </script>";
    header("location:datatable.php"); // redirects to all records page
    // exit; 
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>