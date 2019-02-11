<?php
$user='root';
$pass='';
$db='city';
$conn =  new mysqli('localhost',$user,$pass,$db);
if($conn->connect_errno > 0)
 {
		die("Unable to connect to database [" . $conn->connect_errno . "]");
 }
echo "Connected successfully!!!";
	
$fname= $_POST['firstname'];
$lname= $_POST['lastname'];
$age = $_POST['age'];
$places = $_POST['places'];



$sql = "INSERT INTO city (Firstname,Lastname,Age,Address) VALUES ('$fname','$lname','$age','$places');";


if ($conn->query($sql) === TRUE) {
    echo "New record created";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: c.php');

?>