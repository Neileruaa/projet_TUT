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

    <div class="container tableau">
            <table>
              <tr id="haut">
                <td>Produit</td>
                <td>Prix</td>
                <td>Quantité</td>
                <td>Prix total</td>
                <td>Action</td>
              </tr>
              <tr>
                <!-- Ici les articles et leurs descriptif -->
                <td>Ici photo + nom de l'article --></td>
                <td>Ici prix de l'article --></td>
                <td style="text-align: right;">Ici quantité du même article --></td>
                <td>Ici prix total du/des mêmes articles --></td>
                <td><a href="#"><span class="glyphicon glyphicon-minus img" aria-hidden="true"></span></a></td>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right;">Ici nombre d'article --></td>
                <td>Ici prix total --></td>
                <td><a href="#"><span class="glyphicon glyphicon-trash img" aria-hidden="true"></span></a></td>
              </tr>
              <tr>
                <td colspan="5"><a href="#"><button type="button" class="btn btn-primary btn-lg" style="background: gray; border: gray;">Finaliser la commande</button></a></td>
              </tr>
            </table>
    </div>

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
