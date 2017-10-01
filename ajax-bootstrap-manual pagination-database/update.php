<?php
	include 'dBconnect.php';
	$id =$_REQUEST['id'];	
    $name =$_REQUEST['name'];
    $password=$_REQUEST['password'];
    $bith =$_REQUEST['bith'];
    $adress =$_REQUEST['adress'];
    $sex =$_REQUEST['sex'];
	// Create connection
	if(!$name=="")
	{	
		$sql = "UPDATE student SET name = '$name', password = '$password', bith='$bith', adress='$adress', sex='$sex' WHERE id='$id'";			
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();
?>