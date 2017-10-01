<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <table class="table table-bordered" id="table">
    <thead>
      <tr style="background-color: green;">
        <th>No</th>
        <th>NAME</th>
        <th>PASSWORD</th>
        <th>BITHDAY</th>
        <th>ADRESS</th>
        <th>SEX</th>
      </tr>
    </thead>
    <tbody>
    <!-- <?php 
    	//include 'showData.php';
		?>  -->
    </tbody>
  </table>
  <div class="row" style="margin-top: 30px;">
	<div class="col-sm-2"></div>
	<div class="col-sm-2">
		<form action="insert.php" method="POST">
		<button type="submit" class="btn btn-info">INSERT</button></form>
	</div>
    <div class="col-sm-2"><button type="button" class="btn btn-warning">EDIT</button></div>
    <div class="col-sm-4">
    	<form action="delete.php" method="POST">
    		<input type="text" name="no" style="display: none;" id="ID">
    		<button type="submit" class="btn btn-danger">DELETE</button>
    	</form>
    </div>
    <div class="col-sm-2">      
        <button class="btn btn-default" id="pre">PREVIOUS</button>
        <button class="btn btn-default" id="next">NEXT</button>
    </div>
    </div>
</div>
</body>
<script src="./myjs.js"></script>
</html>