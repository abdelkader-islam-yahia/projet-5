<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portfolio</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
    
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  >
      <link rel="stylesheet" href="css/style3.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<!--Corps de la page-->
    <body>

    <?php 
      $page = "accueil";
      require "component/menu.php";
    ?>
      <!--backgroung + title projet-->
      <div class="parallax-container text-1">
        <h1>Projet Roquemaure</h1>
      <div class="parallax"><img src="img/img-2-p1-flou.jpg" alt="port">
      </div>
    </div>
    <!--grid-->
      <div class="container">
        <div class="row">
          <div class="col s12 m10 l6 text-1">
            <p>Ce troisieme et dernier projet, est un projet d'un site web, permettant a l'utilisateur de noter ces jeux
              favoris, donner des commentaires, le projet est le projet "Roquemaure", nom non choisis par ma personne mais pas mon groupe de projets
              en Terminal, donc un nom rappelant de souvenir une reference au jeux zelda.
            </p>
          </div>
          <div class="col s12 m10 l6 img-03">
            <img src="img/img-1-p1.png" alt="bruces" >
          </div>

          <div class="col s12 m10 l6 img-02">
            <img src="img/img-2-p1.png" alt="wayne" >
          </div>
          <div class="col s12 m10 l6 text-2">
            <p>
              Le principe du site permet a un utilisateur de pouvoir noter et donner des commentaires sur un jeu qu'il apprecie ou non et donc d'avoir
               des opinions differentes de chacun sur un jeux.
               Ce cite recueil tout les infos MySQL et du PHP, sur ce projet nous etions 4 a y travailler, seulement 2 ont travailler dont moi qui m'ai occuper du HTML et CSS 
               du site web donc une majeur partie de la classe
            </p>
          </div>
          
          <div class="col s12 m10 l6 img-01">
            <img src="img/img-3-p1.png" alt="batman" >
          </div>
          <div class="col s12 m10 l6 text-3">
            <p>Le fait de travailler a 4 sans organisation. dans un projet creuse enormement d'ecart entre les resultats, pour ma part, pour le HTML, graven developpeur ma était tres utiles pour realiser un html clean et efficace
              La deadline a ete augmenter cette fois et etait de plus de 2 mois de code avec les autres cours  a reviser et travailler.
              Roquemaure permet donc de note de maniere naturel et neutre alors que si c'est pas neutre et naturel cela fausserai les sondages car cela engendrer trop de notes superficielles
            </p>
          </div>
          
        </div>
      </div>
      <!--Modal de contacts-->
      <a class="waves-effect waves-light btn modal-trigger purple" href="#modal1">Formulaire</a>

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
    <!--Footer page-->
      <footer class="page-footer rgb(0, 102, 255) footer">
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
    