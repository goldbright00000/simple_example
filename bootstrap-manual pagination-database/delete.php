<?php
	include 'dBconnect.php';	
    $no =$_REQUEST['no'];
    echo $no;
	$sql = "DELETE FROM student WHERE id='$no'";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	$conn->close();
	header('Location: http://127.0.0.1/example1/index.php');
?>