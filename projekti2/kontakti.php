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
		 $Email = $_POST['Email'];
		$message = $_POST['message'];

    if( !empty($Emri) && !empty($Mbiemri) &&!empty($Email) && !empty($message))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into kontakti (user_id,Emri,Mbiemri,Email,message) values ('$user_id','$Emri','$Mbiemri','$Email','$message')";

			mysqli_query($con, $query);
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

header.sticky{
  background:#72cbff;
  padding: 15px 100px;
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
/* pjesa e sllajderit*/
.slider{
 
  width: 800px;
  height: 500px;
  border-radius: 40px;
  overflow: hidden;

}

.slides{
  width: 500%;
  height: 500px;
  display:flex;
 

}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}

/*css per pjesen manuale te sllajderit*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css per pjesen automatike te sllajder*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}
      
 .container{
      width: 90%;
      margin: auto;
      overflow: hidden;
     }



    /* Pjesa e kontaktit*/

    #contact-section .container p{
      text-align: center; 
      width: 70%; 
      margin-left: auto;
       margin-right: auto; 
       padding-bottom: 3%;
       color: #fff;
       letter-spacing:3px;
    }

    .contact-form i.fa{

     
      font-size: 22px; 
      padding: 3%;
      background-color: none;
      border-radius: 80%;
      margin: 2%;
      cursor: pointer;
      border:2px solid rgb(190, 190, 190);
      color: rgb(233, 8, 8);
    }
    
    .contact-form i.fa:hover{
      cursor: pointer;
      border:2px solid white;
      color: white;
    }
     
      .contact-form{
        display: grid;
        grid-template-columns: auto auto;
         }
      
      .form-info{
        font-size: 16px;
        font-style: italic;
        color: white;
        letter-spacing: 2px;
      }
      input{
        padding: 10px;
        margin:10px;
        width: 70%;
        background-color:rgba(136, 133, 133, 0.5);
        color: rgb(8, 8, 8);
        border: none;
        outline:none;
      }

      input::placeholder{
        color: white;
      }
    
       textarea{
      padding: 10px;
      margin: 10px;     
      width: 70%;
      background-color:rgba(136, 133, 133, 0.5);
      color:rgb(8, 8, 8);
      border: none;
      outline:none;
     }
     textarea::placeholder{
       color: white;
     }
     
      
    
      .submit{
      width: 40%;
      background: none;
      padding: 4px;
      outline: none;
    
      font-size: 13px;
      font-weight: bold;
      letter-spacing: 2px;
      height: 33px;
      text-align: center;
      cursor: pointer;
      letter-spacing: 2px;
      margin-left: 3%;
      border:2px solid rgb(190, 190, 190);
      color: rgb(8, 8, 8);
     }

     .submit:hover{
           border: 1px solid #fff;
      color: #fff;
      cursor: pointer;
     }

      
    @media (max-width: 768px){

 #contact-section .contact-form{
        display: block;
        width: 100%;
        text-align: center;
      }
      #contact-section .submit{

        width: 60%;
      }

  }
  .wrapper .button{
  display: inline-block;
  height: 60px;
  width: 60px;
  float: left;
  margin: 0 5px;
  overflow: hidden;
  background: #fff;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: all 0.3s ease-out;
}
.wrapper .button:hover{
  width: 200px;
}
.wrapper .button .icon{
  display: inline-block;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50px;
  box-sizing: border-box;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1):hover .icon{
  background: #4267B2;
}
.wrapper .button:nth-child(2):hover .icon{
  background: #1DA1F2;
}
.wrapper .button:nth-child(3):hover .icon{
  background: #E1306C;
}
.wrapper .button:nth-child(4):hover .icon{
  background: #333;
}


.wrapper .button .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease-out;
}
.wrapper .button:hover .icon i{
  color: #fff;
}
.wrapper .button span{
  font-size: 20px;
  font-weight: 500;
  line-height: 60px;
  margin-left: 10px;
  transition: all 0.3s ease-out;
}
.wrapper .button:nth-child(1) span{
  color: #4267B2;
}
.wrapper .button:nth-child(2) span{
  color: #1DA1F2;
}
.wrapper .button:nth-child(3) span{
  color: #E1306C;
}
.wrapper .button:nth-child(4) span{
  color: #333;
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
  <text fill="black" font-size="17" font-family="Brush Script MT" x="45" y="70">Dhuro Gjak</text>
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
        </div>
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
	
        <!-- pjesa e kontaktit -->
        <section id="contact-section">
            <div class="container">
            <div class="contact-form">
 
                   <!-- pjesa pare -->
                <div>
                  <i class="fa fa-map-marker"></i><span class="form-info">  Lagjja Kalabria,10000 Prishtine, Kosovo </span><br>
                  <i class="fa fa-phone" > </i><span class="form-info"> +383 44-888-999</span><br>
                  <i class="fa fa-envelope"></i><span class="form-info">  UBT-CSE@ubt-uni.net</span>
                </div>
                
                    <!-- pjesa dyte -->
                    <div>        
              <form method="post">
                <input id="text" type="text" placeholder="Emri" name="Emri" required>
                <input id="text" type="text" placeholder="Mbiemri" name="Mbiemri" required><br>
                <input id="text" type="Email" placeholder="Emaili"  name="Email" required><br>
              <textarea id="text" name="message" placeholder="Shkruani mesazhin tuaj!"  name="message" rows="5" required></textarea><br>
              <input style="font-size:20px;margin:10px; color:black;" id="button" type="submit" value="dergo"><br><br>
              </form>   
              
</div>
              </div>
            </div>
          </section>
        <br>
        <br>
        <br>
        <br>
	 <!--pjesa sliderit-->
     <div class="slider">
      <div class="slides">
        
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        
        
        <div class="slide first">
          <img src=Images\foto1sllajder.png >
        </div>
        <div class="slide">
          <img src=Images\foto2sllajder.jpg >
        </div>
        <div class="slide">
          <img src=Images\foto3sllajder.jpg>
        </div>
        <div class="slide">
          <img src=Images\foto4sllajder.jpg>
        </div>
      
        <!--pjesa automatike per sllajder-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        
      </div>
  
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
    
    </div>
    <br>
    <br>
    <br>
    <footer>
      <div class="wrapper">
        <div class="button">
           <div class="icon">
              <i class="fab fa-facebook-f"></i>
           </div>
           <span>Facebook</span>
        </div>
        <div class="button">
           <div class="icon">
              <i class="fab fa-twitter"></i>
           </div>
           <span>Twitter</span>
        </div>
        <div class="button">
           <div class="icon">
              <i class="fab fa-instagram"></i>
           </div>
           <span>Instagram</span>
        </div>
        <div class="button">
           <div class="icon">
              <i class="fab fa-github"></i>
           </div>
        
           <span><a href="https://github.com/GentSadiku202155392/Projekti.git">Github</span>
        </div>
     </footer>

    


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

            /*slajjder javascript*/
            var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
            </script>
</body>
</html>