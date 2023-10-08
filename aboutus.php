<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>OpenSolve</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="imgs/huge.png"/>
  <style>
    *{
      box-sizing:border-box;
    }
    .about-text{
      width: 550px;
    }
    .main{
      width:1130px;
      max-width:95%;
      margin:0 auto;
      display:flex;
      align-items: center;
      justify-content:space-around;
    }
    .about-text h1{
      color:white;
      font-size:80px;
      text-transform: capitalize;
      margin-bottom:20px;
    }
    .about-text h5{
      color: white;
      font-size:25px;
      text-transform: 25px;
      text-transform:capitalize;
      margin-bottom: 25px;
      letter-spacing:2px;
    }
    .about-text p{
      color:lightgray;
      letter-spacing:0.7px;
    }
    .team img{
      width:100px;
      max-width:95%;
      margin:0 auto;
      align-items: center;
      justify-content:space-around;
      display:flex;
    }
    nav{
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      height: 15vh;
    }
    .team{
      
    }

    .head_1{
      width:90%;
      display:flex;
      justify-content:center;
      align-items:center;
      flex-direction:column;
      text-align:center;
      margin:20px auto;
    }
    .head_1 h1{
      font-size:40px;
      color:#000;
      position:relative;
    }

    .head_1 h1::after{
      content:"";
      position: absolute;
      width: 100%;
      height: 3.5px;
      display: block;
      margin: 0 auto; 
      background-color:#4caf50;
      border-radius:10px;
    }

    .head_1 p{
      font-size:18px;
      color:#666;
      margin-bottom:35px;
    }
    .conteudo_1{
      width:90%
      margin:0 auto;
      padding:10 px 20px;
    }

    .ab_01{
      display:flex;
      justify-content:space-between;
      align-items:center;
      flex-wrap:wrap;
    }

    .ab_img{
      flex:1;
      margin-right:40px;
      overflow:hidden;
      display:flex
    }
    .ab_img img{
      max-width:100%;
      width:75%;
      height: auto;
      display: block;
      transition: 0.5s ease;
      
    }
    .ab_img::hover img{
      transform: scale(1.2);
    }
    .ab_c{
      flex:1;
      font-size:150%;
    }
    #p_foda{
      color:#545454;
    }
          
  </style>
</head>

<body>
  <script src="script.js"></script>
  <script src="script.js"></script>
  <div class="content"> 
 <nav>
      <a href="index.php"><img src="imgs/huge.png" class="lista_img" alt="logo"></a>
      <ul id="lista_nav">
        <li><a href="SignUP.php">Sign Up</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="projects.php">Projects</a></li>
    
      </ul>
    </nav>

  <div class="head_1">
    <h1>About Us</h1>
    <br>
    <p >Our team and History</p>
  </div>
  <div class="main">
    <div class="ab_img">
      <img src="imgs/binary nights.jpg">
    </div>
    <section class="about-text">

      
      <div class="ab_c">
        <h2>Our team</h2>
        <p id="p_foda">The challenge that our group chose was to solve the difficulties of finding projects to join. And our group, the binary knights , made as a solution a marketplace of open science and open source projects. It even recommends projects that you will probably engage more,  related with your skills and interests , so that you don't spend so much time on it. It has more than 15 projects already on our database, so check it out soon. Thanks!
</p>
      </div>
    </section>
  </div>
</body>
</html>