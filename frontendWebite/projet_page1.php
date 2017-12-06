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

    <style>
          .sec {
            margin-bottom: 20px;

          }
          nav#myScrollspy.col-sm-3 {
            height: 100%;
          }
          div.container {
            text-align: center;
            background-color: #D3D3D3;
            width: 100%;
          }
          div.container li{
            font-size: 25px;
          }
          body {
            background-color: #D3D3D3;
            color: black;}
            a {
              color: black;
            }
          a:link {
            color: black;
            text-decoration: none;
          }
<<<<<<< HEAD
=======
          #elemNav {
            padding-bottom: 22px;
          }
>>>>>>> 9cddb1d3ea215c78d5b8bee3f01e6d5e4cf1614a
    </style>

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
<<<<<<< HEAD
                  </div>
                </div>
              </li>
              <li><a href="#myCarousel">Accueil</a></li>
              <li><a href="#section1">Section 1</a></li>
              <li><a href="#section2">Nouveautés</a></li>
              <li><a href="#section3">Section 3</a></li>
              <li><a href="#section4">Section 4</a></li>
              <li><a href="#section5">Section 5</a></li>
            </ul>
            <a href="projet_page_client.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            <a href="projet_page_panier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
=======
                    <a href="../../donneeEspaceMembre/connexion.php">Se connecter</a>
                  </div>
                </div>
              </li>
              <li><a id="elemNav" href="#myCarousel">Accueil</a></li>
              <li><a id="elemNav" href="#section1">Nouveautés</a></li>
              <li><a id="elemNav" href="#section2">Vêtements</a></li>
              <li><a id="elemNav" href="#section3">Magasins</a></li>
              <li><a id="elemNav" href="#section4">Bons plans</a></li>
              <li><a id="elemNav" href="../donneeEspaceMembre/connexion.php">Se Connecter</a></li>
              <li><a id="elemNav" href="../donneeEspaceMembre/type_inscription.php">S'inscrire</a></li>
            </ul>
            <a href="projet_page_client.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
            <a href="index.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
>>>>>>> 9cddb1d3ea215c78d5b8bee3f01e6d5e4cf1614a
          </div>
        </div>
      </div>
    </nav>

    <div id="container" class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="Images/6.jpg" alt="photo" width="100%">
          </div>

          <div class="item">
            <img src="Images/5.jpg" alt="photo" width="100%">
          </div>

          <div class="item">
            <img src="Images/7.jpg" alt="photo" width="100%">
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
    </div>

        <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="section1" class="container-fluid sec">
<<<<<<< HEAD
              <img src="Images/2.jpg" alt="photo" width="60%" style="margin-top: 56px;">
            </div>
            <div id="section2" class="container-fluid sec">
              <a href="projet_page_nouveautes.php"><img src="Images/3.jpg" alt="photo" width="60%" style="margin-top: 56px;"></a>
            </div>
            <div id="section3" class="container-fluid sec">
              <img src="Images/2.jpg" alt="photo" width="60%" style="margin-top: 56px;">
            </div>
            <div id="section4" class="container-fluid sec">
              <img src="Images/4.jpg" alt="photo" width="60%" style="margin-top: 56px;">
            </div>
            <div id="section5" class="container-fluid sec">
              <img src="Images/8.jpg" alt="photo" width="60%" style="margin-top: 56px;">
=======
              <a href="projet_page_nouveautes.php"><img src="Images/2.jpg" alt="photo" width="60%" style="margin-top: 56px;"></a>
            </div>
            <div id="section2" class="container-fluid sec">
              <a href="projet_page_vetements.php"><img src="Images/3.jpg" alt="photo" width="60%" style="margin-top: 56px;"></a>
            </div>
            <div id="section3" class="container-fluid sec">
              <a href="projet_page_magasins.php"><img src="Images/8.jpg" alt="photo" width="60%" style="margin-top: 56px;"></a>
            </div>
            <div id="section4" class="container-fluid sec">
              <a href="projet_page_plans.php"><img src="Images/4.jpg" alt="photo" width="60%" style="margin-top: 56px;"></a>
>>>>>>> 9cddb1d3ea215c78d5b8bee3f01e6d5e4cf1614a
            </div>
          </div>
        </div>
      </div>

      <div id="footer">
        <div>
          <ul>Sécurité
            <li>Droits</li>
            <li>Mode de paiement</li>
          </ul>
        </div>

        <div>
          <ul>Compte
            <li><a href="projet_page_client.php">Connexion</a></li>
            <li><a href="projet_page_panier.php">Mon panier</a></li>
          </ul>
        </div>
      </div>

  </body>
</html>
