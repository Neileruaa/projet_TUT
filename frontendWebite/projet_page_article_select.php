<?php require '_header.php'; ?>
<?php
if(isset($_GET['id'])){
    $id_recu = $_GET['id'];
    $products = $DB->requete('SELECT * FROM products WHERE id='.$id_recu);
}
include "head.php";
include "style.php";
?>

    <script>
		function addToPanier() {
			var idFromPhp = "<?php echo $id_recu ?>"
			window.location="addpanier.php?id=".concat(idFromPhp);
		}
	</script>

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
            <a href="panier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
    </nav>

    <!-- On recupere l'id du produit et en fonction on va chercher les bonnes informations -->
    <div class="container">
        <table style="width:60%;">
          <tr>
            <td class="desc"><img src="img/<?php  foreach ($products as $product) {
                echo $product->image_name;
            }?>" alt="pull"><p><?php  foreach ($products as $product) {
                echo $product->content;
            }?></p>

            <button type="button" class="btn btn-primary btn-lg" style="background: gray; border: gray;" onclick="">Ajouter au panier</button>
            <a href="addpanier.php?id=<?php  foreach ($products as $product) {
                echo $product->id;
            }?>" class="add addPanier">add</a>

        </td>
          </tr>
          <tr><td><p class="prix"><?php  foreach ($products as $product) {
              echo $product->price;
          }?></p>
            <nav class="navbar navbar-default taille"> <!--Barre de navigation dans les tailles-->
              <div class="container-fluid">
                <div class="navbar-header">
                  <span class="navbar-brand">Taille</span>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="#">XXL</a></li>
                  <li><a href="#">XL</a></li>
                  <li><a href="#">L</a></li>
                  <li><a href="#">M</a></li>
                  <li><a href="#">S</a></li>
                  <li><a href="#">XS</a></li>
                </ul>
              </div>
            </nav>
            </td>
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
