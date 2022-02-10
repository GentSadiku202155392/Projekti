<?php 
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $Emri=$_POST['Emri'];
        $Mbiemri=$_POST['Mbiemri'];
         $user_name = $_POST['user_name'];
        $password = $_POST['password'];

    if( !empty($Emri) && !empty($Mbiemri) &&!empty($user_name) && !empty($password) &&  !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,Emri,Mbiemri,user_name,password) values ('$user_id','$Emri','$Mbiemri','$user_name','$password')";

            mysqli_query($con, $query);



            header("Location: Kyqu.php");
            die;
        }
        else
        {
            echo "Please enter some valid information!";
       }
    
    }

    
?>


<!DOCTYPE html>
<html>
<style >

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

    </style>



<head>

    <title style="color:black";> Regjistrohu</title>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    
    <div id="box">
        
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color:black;">Regjistrohu</div>
            <input id="text" type="text" placeholder="Emri" name="Emri"><br><br>
            <input id="text" type="text" placeholder="Mbiemri" name="Mbiemri"><br><br>
            <input id="text" type="text" placeholder="Username" name="user_name"><br><br>
            <input id="text" type="password" placeholder="Password"  name="password"><br><br>
            <input style="font-size:20px;margin:10px; color:black;" id="button" type="submit" value="Signup"><br><br>

            <a href="Kyqu.php">Kyqu</a><br><br>


        
        </form>
    </div>
</body>
</html>