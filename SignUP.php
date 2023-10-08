<!DOCTYPE html>
<html lang="en">
<head>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="imgs/huge.png"/>
  <title>OpenSolve</title>
  <link rel="stylesheet" href="style.css">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #b8bdb5;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #e0e2db;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
  max-height: 85vh;
  overflow: auto;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #5f7470;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #5f7470;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #889696;
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #009579;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
.clickado, .click {
  background: salmon;
}
#nav_login{
    display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      height: 15vh;
}

#content {
  display: flex;
  flex-direction: column;
  align-items: center;
}
  </style>
</head>
<body>
  <div class="content" id="content">
    <nav id="nav_login">
      <a href="index.php"><img src="imgs/huge.png" class="lista_img" alt="logo"></a>
      <ul id="lista_nav">
         <li><a href="SignUP.php">Sign Up</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="projects.php">Projects</a></li>
       </ul>
    </nav>
    <div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Login</header>
        <form action="#" method="post" id="formlogin">
          <input type="text" id="username_log" placeholder="Enter your username">
          <input type="password" id="password_log" placeholder="Enter your password">
          <input type="submit" class="button" value="Login">
        </form>
        <div class="signup">
          <span class="signup">Don't have an account?
           <label for="check">Signup</label>
          </span>
        </div>
      </div>
      <div class="registration form">
        <header>Signup</header>
        <form action="projects.php" method="post" id="signup">
          <input type="text" id="username_sign" placeholder="Enter your username">
          <input type="text" id="name_sign" placeholder="Enter your name">
          <input type="password" id="password_sign" placeholder="Create a password">
          <header>Interests</header>
          <input type="button" value="physics" id="physics" onclick="mod(this)"/>
          <input type="button" value="astronomy" id="astronomy" onclick="mod(this)"/>
          <input type="button" value="chemistry" id="chemistry" onclick="mod(this)"/>
          <input type="button" value="biology" id="biology" onclick="mod(this)"/>
          <input type="button" value="webdesign" id="webdesign" onclick="mod(this)"/>
          <input type="button" value="webdevelopment" id="webdevelopment" onclick="mod(this)"/>
          <input type="button" value="json" id="json" onclick="mod(this)"/>
          <input type="button" value="php" id="php" onclick="mod(this)"/>
          <input type="button" value="design" id="design" onclick="mod(this)"/>
          <input type="button" value="modeling" id="modeling" onclick="mod(this)"/>
          <input type="submit" class="button" value="Signup">
        </form>
        <div class="signup">
          <span class="signup">Already have an account?
           <label for="check">Login</label>
          </span>
        </div>
      </div>
    </div>
  </div>
  <script>
    $("#signup").submit(function(e){
      e.preventDefault();
      var interesse = []
      for (i=0; i < document.getElementsByClassName("clickado").length; i++) {
        interesse.push(document.getElementsByClassName("clickado")[i].value)
      }
      console.log(interesse)
      $.ajax({
        method : "POST",
        url  : "confirm.php",
        data : { user: document.getElementById("username_sign").value, password: document.getElementById("password_sign").value, name: document.getElementById("name_sign").value, interests: interesse },
        success: function(res){  
          window.location = "/projects.php";
        }
      });
    });
    $("#formlogin").submit(function(e){
      e.preventDefault();
      $.ajax({
        type : "POST",
        url  : "confirmlogin.php",
        data : { user: document.getElementById("username_log").value, password: document.getElementById("password_log").value },
        success: function(res){  
          window.location = "/projects.php";
        }
      });
    });
    function mod(button) {
     button.classList.toggle("clickado"); 
    }
  </script>
</body>
</html>