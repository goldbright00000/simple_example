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
		while($row = $result->fetch_assoc()) 
		{	
			$arr[]=$row;
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
        'data' => $arr
        ));
?> 