<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portfolio</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css">
      <link rel="stylesheet" href="css/style.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<!--Corps de la page-->
    <body>

<!--Navigation bar basic-->
      <nav>
        <div class="nav-wrapper blue">
          <a href="index.php" class="brand-logo"><img src="img/logo.png" alt="port"></a>
          <a href="#!" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="projet-1.php">Projet Valorant</a></li>
            <li><a href="projet-2.php">Projet Pong</a></li>
            <li><a href="projet-3.php">Projet Roquemaure</a></li>
          </ul>
        </div>
      </nav>
 <!--Navigation mobile-->   
      <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="projet-1.php">Projet Valo</a></li>
        <li><a href="projet-2.php">Projet Pong</a></li>
        <li><a href="projet-3.php">Projet Roquemaure</a></li>
      </ul>
      <!--Background image + text en grands-->
      <div class="parallax-container">
        <div class="parallax"><img src="img/background.jpg" alt="port">
        </div>
        <!--Carousel des projets-->
        <div class="container">
          <div class="carousel carousel-slider center">
            <div class="carousel-item white-text item1">
              <h2>Projet Valorant</h2>
              <p class="white-text">Voici le premier projet</p>
              
              <a class="btn waves-effect white grey-text darken-text-2" href="projet-1.php">Voir le projet</a>

            </div>
            <div class="carousel-item white-text item2">
              <h2>Projet Pong</h2>
              <p class="white-text">Voici le deuxieme projet</p>

              <a class="btn waves-effect white grey-text darken-text-2" href="projet-2.php">Voir le projet</a>

            </div>
            <div class="carousel-item white-text item3" >
              <h2 class="white-text">Projet Roquemaure</h2>
              <p class="white-text">Voici le troisieme projet</p>
              <a class="btn waves-effect white grey-text darken-text-2" href="projet-3.php">Voir le projet</a>
              
            </div>
            </div>
          </div>
        </div>
      
<!--Presentations de notre equipe-->
      <div class="row">
        <div class="col s12 ">
          <h2>Notre équipe</h2>
        </div>
        <div class="col s12 l5 offset-l1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img id="cart1" class="activator" src="img/abdel.jpg" alt="port">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Abdel<i class="material-icons right">more_vert</i></span>
              <p><a href="https://www.instagram.com/4bd3l.y/">Instagram</a></p>
              <p><a href="https://www.linkedin.com/in/abdelkader-islam-yahia-021771252/">Linkedin</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Abdel<i class="material-icons right" id="abdel2">close</i></span>
            <p>Salut tout le monde, moi c'est Abdelkader Islam Yahia mais vous pouvez m'appeler Abdel et Abdeka pour les intimes. J'ai 18 ans 
              le 19 novembre donc la prison ne m'accueille pas encore hehe. Sinon je sors d'un bac général specialite NSI merci Mr Potron, et Cinema, 
              spe de chomeur valide a 100% pour reussir le bac 
              pour tout le cote professionel je vous laisse mon linkedin et pour se marrer je vous laisse allez me follow sur Tiktok
              mes vies: @abdelouch3.
            </p>
            </div>
          </div>
        </div>
        <div class="col s12 l5">
          <div class="card">
            <div class="card-iction/indexmage waves-effect waves-block waves-light">
              <img id="cart1" class="activator" src="img/lorenzo.jpg" alt="port">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Lorenzo<i class="material-icons right" >more_vert</i></span>
              <p><a href="https://www.instagram.com/lorenzomln_/">Instagram</a></p>
              <p><a href="https://www.linkedin.com/in/lorenzo-molina-320553254/">Linkedin</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Lorenzo<i class="material-icons right" id="loren">close</i></span>
              <p>Salut tout le monde, moi c'est Lorenzo Molina mais vous pouvez m'appeler Loren si t'est la famille et pour les amourettes 
                c'est LOLO. J'ai 24 ans donc le chomage est mon meilleur amis. 
                Sinon je sors de 6 ans de taff avec la mairie de St Tropez, Louis de Funes on t'embrasse si jamais, mais je detient un bac es hehe.
                pour tout le cote professionel je vous laisse mon linkedin et pour se marrer je vous laisse allez me follow sur Insta mes cherys</p>
            </div>
          </div>
        </div>
      </div>
<!--Modal de contact-->
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Inscription</a>
<div id="modal1" class="modal">
  <div class="modal-content" id=connexion>
  <h2 id="header-form">Connexion</h2>
       <form method="post" action="action/login.php">
        <input type='username' name='username' />
        <input type='password' name='password' />
        <button type='submit'> Connexion </button>
        <button type='button' class="white color black "> <a href='panel-admin.php'>Admin Button</a></button>
      </form>
      <?php if(isset($_GET['error'])){
        switch($_GET['error']){
          case"1":echo "Utilisateur ou mot de passe incorrect !";break;
          case"2":echo "Utilisateur ou mot de passe incorrect !";break;
          case"3":echo "Utilisateur ou mot de passe incorrect !";break;
          default:
        }
        if($_GET['error']){
        }elseif($_GET['error']==2){
          echo "Mot de passe vide";
        }elseif($_GET['error']==3){
          echo "Mot de passe vide";
        }
      }?>
  </div>
  <div class="modal-3">
      <h2 id="header-form">Inscription</h2>
      <form method="post" action="action/signin.php">
        <input type='text' name='username' placeholder='Entrer un username' />
        <input type='email' name='email' placeholder='Entrer un email'/>
        <input type='password' name='password' placeholder='Entrer un mot de passe' />
        <button type='submit'>S'inscrire</button>
      </form>

  </div>
  <div class="modal-footer">
    <a href="index.php" class="modal-close waves-effect waves-green btn-flat">Exit</a>
  </div>
</div>
<body>
<?php 
$page = "accueil";
require "component/footer.php"; 
?>
 <!--Java code-->     
      <script src="js/jquery.min.js"></script>
      <script src="js/materialize.min.js"></script>
      <script src="js/script.js"></script>
      <script src="https://rawgit.com/WeiChiaChang/Easter-egg/master/easter-eggs-collection.js"></script>
      
    </body>
  </html>