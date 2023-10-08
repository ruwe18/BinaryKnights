<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>OpenSolve</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="imgs/huge.png"/>
  <style>
    nav{
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      height: 15vh;
    }
  </style>
</head>

<body>
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
    <div class="main_page">
      <div class="texto">
        <h1 id="text_main">Join projects and interact with people</h1>
        <p id="paragraph_main">OpenSolve, your gateway to innovation and collaboration, is where the world of open-source projects. OpenSolve offers an extensive spectrum of  projects, spanning from software to hardware, inviting individuals of all backgrounds to explore, connect, and collaborate.</p>
        <a href="SignUP.php" id="join_now_a"><div id="join_now">Join Now</div></a>
      </div>

      <div class="alternating_buttons">
        <div class="but-select selected" id="onsel1"></div>
        <div class="but-select" id="onsel2"></div>
        <div class="but-select" id="onsel3"></div>
      </div>    
    </div>
  </div>
  <script>
    var collection = document.getElementsByClassName("but-select");
    var selected = document.getElementsByClassName("selected");
    var text = document.getElementById("text_main");
    var button = document.getElementById("join_now");
    var ahref = document.getElementById("join_now_a");
    var paragraph = document.getElementById("paragraph_main");
    var texts = [
      ["Join projects and interact with people", "OpenSolve, your gateway to innovation and collaboration, is where the world of open-source projects. OpenSolve offers an extensive spectrum of projects, spanning from software to hardware, inviting individuals of all backgrounds to explore, connect, and collaborate.", "Join Now", "SignUP.php"],
      ["Our Mission", "Our mission is simple: to facilitate dynamic interactions among a global community of problem-solvers, creators, and developers.We want to give you the tools to solve your obstacles", "More about us", "aboutus.php"],
      ["OpenSolve is more than just a platform; it's a movement", "a collective effort to transform ideas into impactful solutions", "See projects", "projects.php"]
    ];
    collection[0].addEventListener("click", function() {
      selected[0].classList.remove('selected');
      text.textContent = texts[0][0]
      button.innerText = texts[0][2]
      paragraph.textContent = texts[0][1]
      ahref.href = texts[0][3]
      collection[0].classList.add('selected');
    });
    collection[1].addEventListener("click", function() {
      selected[0].classList.remove('selected');
      text.textContent = texts[1][0]
      button.innerText = texts[1][2]
      paragraph.textContent = texts[1][1]
      ahref.href = texts[1][3]
      collection[1].classList.add('selected');
    });
    collection[2].addEventListener("click", function() {
      selected[0].classList.remove('selected');
      text.textContent = texts[2][0]
      button.innerText = texts[2][2]
      paragraph.textContent = texts[2][1]
      ahref.href = texts[2][3]
      collection[2].classList.add('selected');
    });
    
  </script>
</body>

</html>