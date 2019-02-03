<?php
session_start();
require_once 'config.php';
$data = mysqli_query($con,"SELECT * FROM applypass");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="container">
  <h2>USER DETAILS</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Start Point</th>
        <th>End Point</th>
        <th>Validity</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
					<tr>
					<td></td>
					<td><?php echo $row["email"];?></td>
					<td><?php echo $row["phonenumber"];?></td>
					<td><?php echo $row["startpoint"];?></td>
					<td><?php echo $row["endpoint"];?></td>
					<td><?php echo $row["validity"];?></td>
					<td><img src="image/<?php echo $row['image'];?>" alt = "" width="100px" height="70px"></td>
					</tr>
  </table>
</div>
</head>
<body>
</body>
</html>