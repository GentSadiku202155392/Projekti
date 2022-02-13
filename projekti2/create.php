<?php 
include "connection.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
    $Emri=$_POST['Emri'];
		$Mbiemri=$_POST['Mbiemri'];
		 $user_name = $_POST['user_name'];
		$password = $_POST['password'];

    if( !empty($Emri) && !empty($Mbiemri) &&!empty($user_name) && !empty($password) &&  !is_numeric($user_name))
		{

			//save to database
		
			$query = "insert into 'users'(user_id,Emri,Mbiemri,user_name,password) values ('$Emri','$Mbiemri','$user_name','$password')";

			mysqli_query($con, $query);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}
  }


?>

<!DOCTYPE html>
<html>
  <style>
    body{
      background-color:  rgb(145, 184, 211);
    }
    </style>
<body>

<h2>Shto Perdorues</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Infromatat personale:</legend>
   Emri:<br>
    <input type="text" name="Emri" placeholder="Emri">
    <br>
    Mbiemri:<br>
    <input type="text" name="Mbiemri" placeholder="Mbiemri">
    <br>
    Username:<br>
    <input type="text" name="user_name" placeholder="User_name">
    <br>
    Password:<br>
    <input type="password" name="password" placeholder="Password">
    <br>
   <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>