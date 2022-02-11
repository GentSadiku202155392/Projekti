
<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Ballina.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Pjesa e log in</title>
     <style>

       
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
 
     
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  min-height: 100vh;
  background-color:  rgb(145, 184, 211);
}

#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: lightblue;
border: none;
}

#box{
   background-color:rgb(119, 136, 153);
margin: auto;
width: 300px;
padding: 20px;
color: initial;

}



header .brand{
  color: #fff;
  font-size: 30px;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
}








@media (max-width: 1060px){
  header .btn{
    display: block;
  }

  

}
</style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

    <header>
      <a href="#" class="brand">
        <svg height="130" width="300">
<defs>
<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
<stop offset="0%" 
style="stop-color:rgb(233, 11, 11); stop-opacity:1" />
<stop offset="100%" 
style="stop-color:rgb(209, 233, 229); stop-opacity:1" />
</linearGradient>
</defs>
<ellipse cx="117" cy="70" rx="95" ry="50" fill="url(#grad1)"/>
<text fill="black" font-size="17" font-family="Brush Script MT" x="45" y="70">Dhuro Gjak</text>
</svg>
</td></a>
  
      </header>

	
<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color:black;">Kyqu</div>

			<input id="text" type="text" placeholder="Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Password" name="password"><br><br>

			<input style="font-size: 20px;margin: 10px;color:black;" id="button" type="submit" value="Login"><br><br>

			<a href="Regjistrohu.php">Regjistrohu</a><br><br>
		</form>
	</div>
     
     
  

      
<script type="text/javascript">
            //javascript per menyn ne levizje
            window.addEventListener("scroll", function(){
              var header = document.querySelector("header");
              header.classList.toggle('sticky', window.scrollY > 0);
            });
        
            //javascript for meny responsive ansore
            var menu = document.querySelector('.menu');
            var menuBtn = document.querySelector('.menu-btn');
            var closeBtn = document.querySelector('.close-btn');
        
            menuBtn.addEventListener("click", () => {
              menu.classList.add('active');
            });
        
            closeBtn.addEventListener("click", () => {
              menu.classList.remove('active');
            });
           
         
      </script>
   </body>
</html>