<?php
	include 'dBconnect.php';	
    $name =$_REQUEST['name'];
    $password=$_REQUEST['password'];
    $bith =$_REQUEST['bith'];
    $adress =$_REQUEST['adress'];
    $sex =$_REQUEST['sex'];
	// Create connection
	if(!$name=="")
	{		
		$sql = "INSERT INTO student (name, password, bith, adress, sex)
		VALUES ('$name', '$password', '$bith', '$adress', '$sex')";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
	include 'next.php';
?>