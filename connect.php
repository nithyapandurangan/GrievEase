<?php

$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$rollNumber=$_POST["rollNumber"];
$Department=$_POST["Department"];
$Category=$_POST["Category"];
$Description=$_POST["Description"];

	// Database connection
	$conn = new mysqli('localhost','root','','complaint');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into tb_comp(FirstName, LastName, rollNumber, Department, Category, Description) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisss", $FirstName, $LastName, $rollNumber, $Department, $Category, $Description);
		$execval = $stmt->execute();
		echo $execval;
		echo "Complaint Filed successfully...";
		$stmt->close();
		$conn->close();
	}
?>
 