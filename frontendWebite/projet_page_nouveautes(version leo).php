<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jules</title>
    <link rel="shortcut icon" type="image/x-icon" href="Images/icone.ico">
    <link rel="stylesheet" href="projet_page1_style.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php include "style.php"; ?>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="projet_page1.php">
            <img alt="Brand" src="Images/logo.png" height="30">
          </a>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li>
                <div class="dropdowns">
                  <button class="dropbtns">MENU</button>
                  <div class="dropdown-contents">
                    <a href="projet_page_nouveautes.php">Nouveautés</a>
                    <a href="projet_page_vetements.php">Vêtements</a>
                    <a href="projet_page_magasins.php">Magasins</a>
                    <a href="projet_page_plans.php">Bons plans</a>
                  </div>
                </div>
              </li>
              <li><a href="projet_page1.php">Accueil</a></li>
            </ul>
            <a href="projet_page_client.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            <a href="projet_page_panier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
    </nav>

    <article>
      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Veste noire<br>29.99€ (+2 coloris)</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test2.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Pull col roulé uni laine mérinos<br>45.99€<br>+4 coloris</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test3.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Pull bleu marine<br>39.99€<br>+3 coloris</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test4.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">T-shirt bleu gris<br>29.99€<br>+2 coloris</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test5.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Tee-shirt col rond imprimé poche<br>19.99€</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test6.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Pull col rond empiècement micro-jacquard<br>29.99€<br>+2 coloris</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test7.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Tee-shirt uni<br>9.99€</p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="bloc">
        <div class="row">
          <div class="col-xs-6 col-md-3">
           <a href="#" class="thumbnail">
              <div class="image">
                <img src="Images collection/test8.jpg" alt="vetement" width="300" height="400">
              </div>
              <div class="infos">
                <p class="infos_article">Veste noire<br>29.99€ (+2 coloris)</p>
              </div>
            </a>
          </div>
        </div>
      </div>

    </article>

      <div id="footer">
        <div>
          <ul><span>Sécurité</span></br>
            <li>Droits</li>
            <li>Mode de paiement</li>
          </ul>
        </div>

        <div>
          <ul><span>Compte</span></br>
            <li><a href="projet_page_client.php">Connexion</a></li>
            <li><a href="projet_page_panier.php">Mon panier</a></li>
          </ul>
        </div>
      </div>

  </body>
</html>
