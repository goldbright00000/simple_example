<?php
	include 'dBconnect.php';	
    $id =$_REQUEST['id'];
	$sql = "DELETE FROM student WHERE id='$id'";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	$conn->close();
?>