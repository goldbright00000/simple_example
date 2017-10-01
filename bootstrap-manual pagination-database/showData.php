<?php 
    $index =$_REQUEST['index'];
    $start =$_REQUEST['start'];
	include 'dBconnect.php';
	$count_sql="SELECT COUNT(*) AS total FROM student";
	$total_count=$conn->query($count_sql);
	$num = $total_count->fetch_assoc()['total'];
	$sql = "SELECT * FROM student LIMIT $index OFFSET $start";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{	
		$data="";
		while($row = $result->fetch_assoc()) 
		{
		$data.="<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["password"]."</td><td>".$row["bith"]."</td><td>".$row["adress"]."</td><td>". $row["sex"]. "</td></tr>";
		}
	} 
	else 
	{
		echo "0 results";
	}
	$conn->close();
	echo json_encode(
        array(
        'total' => $num,
        'data' => $data
        ));
?> 