<?php
$id = "id";
$name = "name";
$bith = "bith";
$adress="adress";
$sex="sex";
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "student";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, password, bith, adress, sex FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " Name: ". $row["name"]. " password" . $row["password"]." bith: ". $row["bith"]." adress: ". $row["adress"]." sex: ". $row["sex"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="temp.php" method="POST">
	<div>id<input type="text" name="id"></div><br>
	<div>name<input type="text" name="name"></div><br>
	<div>password<input type="password" name="password"></div><br>
	<div>bith<input type="date" name="bith"></div><br>
	<div>adress<input type="text" name="adress"></div><br>
	<div>sex<input type="text" name="sex"></div><br>
	<div>GO<input type="submit" name="register" value="register"></div>
</form>




</body>
</html>