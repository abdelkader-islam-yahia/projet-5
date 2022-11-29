<!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portfolio</title>
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css">
      <link rel="stylesheet" href="css/style1.css">

      <!--Let browser know website is optimized for mobile-->
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
        <h1>Projet Valorant</h1>
      <div class="parallax"><img src="img/img-1-p2-flou.jpg" alt="port">
      </div>
    </div>
    <!--grid-->
      <div class="container">
        <div class="row">
          <div class="col s12 m10 l6 text-1">
            <p>Notre premier projet s'intitule "Projet Valorant" en rappel au fameux jeux Riot Valorant fps s'inspirant du fameux 
              CSGO qui a pour regles, 5v5, attaquant v defenseur, premier en 13 manches, de l'argent qui augmente chaque round qui permet
              au joueur de pouvoir des armes plus puissantes et donc de pouvoir remporter le plus de manche, le but des attaquant est de soit poser un spike ("alias bombe") dans un site qui doit etre proteger par les defenseurs ou soit
              d'eliminer tous les enemis adverses. 
            </p>
          </div>
          <div class="col s12 m10 l6 img-1">
            <img src="img/img-1-p2.png" alt="rayan-gigachad" >
          </div>
        </div>
        <div class="row">
          <div class="col s12 m10 l6  img-2">
            <img src="img/img-2-p2.png" alt="rayanou" >
          </div>
          <div class="col s12 m10 l6 text-2">
            <p>Ce projet est un site web permettant a un nouveau joueurs de pouvoir comprendre en details ce fabuleux et donc d'apprendre davantages de connaissances 
              sur les maps, personnages, armes et donc permettre au joueurs debutant de pouvoir evoluer tres rapidement. De plus le site permet au joueurs de Valo de suivre les actus du jeux,
              comme pour les nouveaux patch, qui peuvent annoncer l'arriver de nouveau personnages, de nouvelles armes, etc... Elle permet a l'utilisateurs de suivre l'actus e-sport,
              comme pour ces coupes du mondes en 2021.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m10 l6 text-3">
            <p>Le site a entierement était coder en HTML et CSS sur Atom, qui a était fait suite a l'imposations d'un cahier des charges qui detient une deadline de depot de projet
              pour pouvoir etre note dessus, donc nous avons eu 4 jours pour coder le site en entier et donc rendre un rendu assez clean. Et je remercie Mr Di Roberto pour tout ces conseils et aides qui
              nous ons été d'une utilite enorme
            </p>
          </div>
          <div class="col s12 m10 l6 img-3">
            <img src="img/img-3-p2.png" alt="rayanou-gigachad" >
          </div>
        </div>
      </div>

      <!--Modul de contact-->
      <a class="waves-effect waves-light btn modal-trigger red" href="#modal1">Formulaire </a>

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
    <!--Footer de la page-->
      <footer class="page-footer rgb(237, 120, 120) footer">
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
    