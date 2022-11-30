<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portfolio</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
    
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css">
      <link rel="stylesheet" href="css/style2.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<!--Corps de la page-->

  <body>
    <?php 
      $page = "accueil";
      require "component/menu.php";
    ?>

      <!--background parallax-->
      
      <div class="parallax-container text-1">
        <h1>Projet Pong</h1>
      <div class="parallax"><img src="img/img-1-p3-flou.jpg" alt="port">
      </div>
    </div>
    <!--grid-->
      <div class="container">
        <div class="row">
          <div class="col s12 m10 l6 text-1">
            <p>Le deuxieme projet que je vous presente, est non pas un site web mais bien un jeu et qui n'est que le fameux "PONG", jeux emblematiques des années 80 sur les Atari.
              Le jeux permet a 2 joueurs de s'affronter sur un tennis de table en 2d, la regle officiel du jeu indique qu'au bout de 7 points gagnés durant le match
              permet sa victoire instantaneement.
            </p>
          </div>
          <div class="col s12 m10 l6 img-1">
            <img src="img/img-1-p3.png" alt="parker" >
          </div>
        </div>
        <div class="row">
          <div class="col s12 m10 l6  img-2">
            <img src="img/img-2-p3.png" alt="spiderman" >
          </div>
          <div class="col s12 m10 l6 text-2">
            <p>Pour se demarquer des autres "PONG", ce pong a comme particularite d'etre jouer de manieres vertical contrairement d'etre horizontal.
              donc 2 raquette de couleurs blanche sont supperposer parrallelement en haut et bas de l'ecran mais bouge individuellement durant les parties,
              grace au touche "S et D" pour le joueur 1 et fleche gauches et droites pour le joueurs 2. Le but etant de faire passer une balle de couleur jaune derriere l'une des deux raquettes 
              qui conduit directement au camps adverse et de donc de marquer un point.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m10 l6 text-3">
            <p>Durant mon année de Terminales, un des deux projets de l'année etait un choix de plusieurs cahier des charges  et d'avoir comme deadline 1 mois pour tout coder
              en utlisant cette fois, du code Phyton. Par groupe de 3 en NSI, le niveau etait franchement pas tres elevee pour des terminales pour des raisons covid, etc... donc malgre 
              un resultat pas tres pro, et avec le peu de connaissances acquis, j'etais plutot fier de ce que j'avais proposer en presentations finales.
            </p>
          </div>
          <div class="col s12 m10 l6 img-3">
            <img src="img/img-3-p3.png" alt="peter" >
          </div>
        </div>
      </div>

      <!--Modul de contact-->
      <a class="waves-effect waves-light btn modal-trigger black" href="#modal1">Formulaire </a>

      <div id="modal1" class="modal">
        <div class="modal-content">
            <h2 id="header-form">Contactez-nous</h2>
          <div class="contact">
            <form>
              <div class="row">
                <div class="col s4 offset-s2">
                  <label>Nom</label>
                  <input placeholder="Votre Nom">
                </div>
                <div class="col s4">
                  <label>Prénom</label>
                  <input placeholder="Votre Prénom">
                </div>
                <br><br><br><br>
                <div class="col s6 offset-s3">
                  <label>E-mail</label>
                  <input placeholder="Votre E-mail">
                </div>
                <br><br><br><br>
                <div class="col s6 offset-s3">
                  <label>Numéro de téléphone</label>
                  <input placeholder="Votre téléphone">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
        </div>
      </div>
    <!--Footer de la plage-->
      <footer class="page-footer rgb(87, 85, 85) footer">
        <div class="row">
          <div class="s6 copyright">
            <p><span id="antoine1">© 2022 Yahia&Molina&Co&Fils</span></p>
          </div>
        </div> 
      </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://rawgit.com/WeiChiaChang/Easter-egg/master/easter-eggs-collection.js"></script>
  </body>
</html>
    