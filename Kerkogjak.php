<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Emri=$_POST['Emri'];
		$Mbiemri=$_POST['Mbiemri'];
    $Nrtelefonit=$_POST['Nrtelefonit'];
    $Gjinia = $_POST['Gjinia'];
  $Koha = $_POST ['Koha'];
    $Grupigjakut = $_POST['Grupigjakut'];
    $Qyteti= $_POST['Qyteti'];


    if( !empty($Emri) && !empty($Mbiemri) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into kerkuesit (user_id,Emri,Mbiemri,Nrtelefonit,Gjinia,Koha,Grupigjakut,Qyteti) values ('$user_id','$Emri','$Mbiemri','$Nrtelefonit','$Gjinia','$Koha','$Grupigjakut','$Qyteti')";

			mysqli_query ($con, $query);


		}
		else
		{
			echo "Please enter some valid information!";
	   }
	
	}

	

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhuro Gjak&euml;</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
        
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  min-height: 50px;
  background-color:  rgb(145, 184, 211);
}





header{
  z-index: 999;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 100px;
  transition: 0.6s;
}



header .brand{
  color: #fff;
  font-size: 30px;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
}

header .menu{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

header .menu a{
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  text-decoration: none;
  margin: 0 30px;
  padding: 0 10px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: color;
}

header .menu a:hover{
  color: #000;
  background: #fff;
}

header .btn{
  color: #fff;
  font-size: 25px;
  cursor: pointer;
  display: none;
}





@media (max-width: 1060px){
  header .btn{
    display: block;
  }

  header .menu{
    position: fixed;
    background:  rgb(145, 184, 211);
    flex-direction: column;
    min-width: 400px;
    height: 100vh;
    top: 0;
    right: -100%;
    padding: 80px 50px;
    transition: 0.5s;
    transition-property: right;
  }

  header .menu.active{
    right: 0;
  }

  header .menu .close-btn{
    position: absolute;
    top: 0;
    left: 0;
    margin: 25px;
  }

  header .menu a{
    display: block;
    font-size: 20px;
    margin: 20px;
    padding: 0 15px;
  }
}

@media (max-width: 630px){
  .section-main h1{
    font-size: 50px;
    line-height: 60px;
  }
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 25px;
  background-color: none;
  padding: 20px;
  
}




   
    </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
    <header>
        <a href="#" class="brand">
          <svg height="100%" width="300">
  <defs>
  <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
  <stop offset="0%" 
  style="stop-color:rgb(233, 11, 11); stop-opacity:1" />
  <stop offset="100%" 
  style="stop-color:rgb(209, 233, 229); stop-opacity:1" />
  </linearGradient>
  </defs>
  <ellipse cx="117" cy="70" rx="95" ry="50" fill="url(#grad1)"/>
  <text fill="black" font-size="17" font-family="Brush Script MT" x="45" y="70">K&euml;rko Gjak</text>
  </svg>
  </td></a>
        <div class="menu">
          <div class="btn">
            <i class="fas fa-times close-btn"></i>
          </div>
          <a href="Ballina.php">Ballina</a>
          <a href="dhuruesit.php">Dhuruesit</a>
          <a href="kerkuesit.php">Kerkuesit</a>
          <a href="kontakti.php">kontakti</a>
          <a href="logout.php">Logout</a>
        <div class="btn">
          <i class="fas fa-bars menu-btn"></i>
        </div>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

       
        <div>
            <form method="post">
              <label for="Emri" >Emri</label> &nbsp;
              <input type="text" id="fname" name="Emri" placeholder="Emri.."> 
              <br>
              <br>
          
              <label for="Mbiemri">Mbiemri</label> &nbsp;
              <input type="text" id="lname" name="Mbiemri" placeholder="Mbiemri..">

              <br>
              <br>
              <label for="Nrtelefonit">Nr telefonit</label> &nbsp;
              <input type="text" id="lname" name="Nrtelefonit" placeholder="Nr telefonit..">
              <br>
              <br>
              <label for="Gjinia">Gjinia:</label> &nbsp; &nbsp;
                 
                               <input type="radio" name="Gjinia" value="Mashkull"> Mashkull  &nbsp;
                              <input type="radio" name="Gjinia" value="Femer"> Fem&euml;r
                <br>
                <br>
                <label for="Koha">Afati kohor:</label> &nbsp;
                <input type="date" id="Koha" name="Koha"><br>
                <br>
                
               
             
                            
             <label for="fname">Cakto grupin e gjakut q&euml; t&euml; duhet:</label>
                 
                               <input type="radio" name="Grupigjakut" value="A-"> A- &nbsp;
                              <input type="radio" name="Grupigjakut" value="B+"> B+  &nbsp;
                              <input type="radio" name="Grupigjakut" value="B-"> B-   &nbsp;
                              <input type="radio" name="Grupigjakut" value="AB+"> AB+   &nbsp;
                              <input type="radio" name="Grupigjakut" value="AB-"> AB-   &nbsp;
                              <input type="radio" name="Grupigjakut" value="0+"> 0+  &nbsp;  
                              <input type="radio" name="Grupigjakut" value="0-"> 0-   
                              
                <br>
                <br>

                
              <label for="country">Vendndodhja</label>
              <select id="qyteti" name="Qyteti">
                <option value="none">Zgjedh Qytetin</option> 
                <option value="Gjilan">Gjilan</option>
                <option value="Prishtine">Prishtine</option>
                <option value="Ferizaj">Ferizaj</option>
                <option value="Prizeren">Prizeren</option>
                <option value="Istog">Istog</option>
                <option value="Pej&euml;">Pej&euml;</option>
                <option value="Gjakov">Gjakov</option>
                <option value="Skenderaj">Skenderaj</option>
                <option value="Lipjan">Lipjan</option>
                <option value="Deçan">Deçan</option>
                <option value="Suharek&euml;">Suharek&euml;</option>
                <option value="Podujev">Podujev</option>
              </select>
            
              <input type="submit" value="D&euml;rgo">
            </form>
          </div>
      
      
          


        <script type="text/javascript">
            //javascript per pjesen e menys ne levizje
            window.addEventListener("scroll", function(){
              var header = document.querySelector("header");
              header.classList.toggle('sticky', window.scrollY > 0);
            });
        
            //javascript per pjesen responsive ansore te menys
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