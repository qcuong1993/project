<?php 
  $this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Add New Users</title>
</head>
<body>
  
<div class="container">
  <h2>Add New Users</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="email">
      </div>
      <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
</div>
