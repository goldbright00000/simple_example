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
<div class="container">
  <form action="dBinsert.php" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="name" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    <div class="form-group">
      <label for="bith">Bithday:</label>
      <input type="date" class="form-control" name="bith" id="bith">
    </div>
    <div class="form-group">
      <label for="ad">Adress:</label>
      <input type="text" class="form-control" name="adress" id="ad">
    </div>
    <div class="form-group">
      <label for="sex">Sex:</label>
      <input type="text" class="form-control" name="sex" id="sex">
    </div>
    <button type="submit" class="btn btn-info">OK</button>
    </form>
</div>
</body>
</html>
