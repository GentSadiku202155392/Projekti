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
    background: #001018;
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
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  
}
::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;

}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
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
<text fill="black" font-size="17" font-family="Brush Script MT" x="45" y="70">K??rko Gjak</text>
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
          <a href="login.php">Log in</a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
      </header>
      <br>
      <br>
      <br>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Log in
            </div>
            <div class="title signup">
               Sign up
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="#" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
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
           
            //javascript per log in-sig up
        
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>