<?php 
include "connection.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>
<body>
	<header>
	<style>
    body{
      background-color:  rgb(145, 184, 211);
    }
    </style>

	<div class="menu">
          <div class="btn">
            <i class="fas fa-times close-btn"></i>
          </div>
          <a href="create.php" style="color:black;"><b>Create</b></a>
      
	<div class="container">
		<h2>users</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>User_id</th>
		<th>Emri</th>
		<th>Mbiemri</th>
		<th>User_Name</th>
		<th>Password</th>
	</tr>
	</thead>
	<tbody>	

	</header>
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['Emri']; ?></td>
					<td><?php echo $row['Mbiemri']; ?></td>
					<td><?php echo $row['user_name']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>