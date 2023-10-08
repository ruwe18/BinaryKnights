<?php
session_start();
if(array_key_exists('user', $_SESSION) == false) {
header('Location: SignUP.php');
exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>OpenSolve</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="imgs/huge.png"/>

  <style>
    #projects {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .project {
      width: 350px;
      border: 1px solid black;
      border-radius: 9px;
      padding: 10px 20px;
    }
    .fim-projetos {
      margin: 20px 0;
      font-weight: 500;
      font-size: 18px;
    }
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
  <div class="content">
    <nav>
      <a href="index.php"><img src="imgs/huge.png" class="lista_img" alt="logo"></a>
      <ul id="lista_nav">
        <li><a href="SignUP.php">Sign Up</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="projects.php">Projects</a></li>
      </ul>
    </nav>
    <div id="projects">
        <?php
          $json = file_get_contents('database.json');
          $json_data_all = json_decode($json, true);
          $json_data = array_values(json_decode($json, true));
          $openscience = $json_data_all["opensp"];
          $opensource = $json_data_all["opensourcep"];
          foreach($openscience as $ops){
            $interesseops = explode(',', $ops["interests"]);
            foreach ($interesseops as $interessex){
              foreach ($json_data_all["logins"][$_SESSION['user']]["interesses"] as $interesseuser){
                if ($interesseuser == $interessex){
                  echo '<div class="project"><a class="project-link" href="'.$ops["link"].'"><h2 class="project-name">'.$ops["name"].'</h2></a><h3 class="project-objetivo">'.$ops["objectives"].'</h3><p><span class="style-skills">Skills necessary: </span>'.$ops["skills"].'</p><p><span class="style-skills">Project team: </span>'.$ops["team"].'</p>
            </div>';  
                }
              }
            }
          }
          foreach($opensource as $ops){
            $interesseops = explode(',', $ops["interests"]);
            foreach ($interesseops as $interessex){
              foreach ($json_data_all["logins"][$_SESSION['user']]["interesses"] as $interesseuser){
                if ($interesseuser == $interessex){
                  echo '<div class="project"><a class="project-link" href="'.$ops["link"].'"><h2 class="project-name">'.$ops["name"].'</h2></a><h3 class="project-objetivo">'.$ops["objectives"].'</h3><p><span class="style-skills">Skills necessary: </span>'.$ops["skills"].'</p><p><span class="style-skills">Project team: </span>'.$ops["team"].'</p>
            </div>';  
                }
              }
            }
          }
        ?>
        <span class="fim-projetos">To see all projects, <a class="all-link" href="/allprojects.php">click here</a></span>
      </div>
  </div>
</body>
</html>