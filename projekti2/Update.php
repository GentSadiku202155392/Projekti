<?php 
include "connection.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$user_id=$_POST['user_id'];
		$Emri = $_POST['Emri'];
		$Mbiemri = $_POST['Mbiemri'];
		$user_name = $_POST['user_name'];
	 $password = $_POST['password'];
		

		// write the update query
		$sql = "UPDATE `users` SET `Emri`='$Emri',`Mbiemri`='$Mbiemri',`user_name`='$user_name',`password`='$password' WHERE `user_id`='$user_id'";

		// execute the query
		$result = $con->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$user_id=$row['user_id'];
			$Emri = $row['Emri'];
			$Mbiemri = $row['Mbiemri'];
			$user_name = $row['user_name'];
			$password  = $row['password'];
			
		}

	?>
		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Informatat personale:</legend>
		    Emri:<br>
		    <input type="text" name="Emri" placeholder="Emri" value="<?php echo $Emri; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		    <br>
		    Mbiemri:<br>
		    <input type="text" name="Mbiemri" placeholder="Mbiemri" value="<?php echo $Mbiemri; ?>">
		    <br>
		    Username:<br>
		    <input type="text" name="user_name"  placeholder="User_name" value="<?php echo $user_name; ?>">
		    <br>
		    Password:<br>
		    <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
		    <br>
		   
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>