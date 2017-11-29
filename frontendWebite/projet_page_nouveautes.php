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
            text-align: center;
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
          .imgz{
            padding-top: 60px;
          }
          .col-sm-3 {
            text-align: center;
          }
          .prix {
            Color: #942222;
            font-size: 25px;
          }
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

    <div class="row imgz">
        <div class="col-sm-3">
          <a href="projet_page_article_select.php?id=1" class="thumbnail">
            <img src="fringues/1.jpg" alt="pull">
            <p>TITRE ARTICLE</p>
            <p class="prix">PRIX</p>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="projet_page_article_select.php?id=2" class="thumbnail">
            <img src="fringues/2.jpg" alt="pull">
            <p>TITRE ARTICLE</p>
            <p class="prix">PRIX</p>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="projet_page_article_select.php?id=3" class="thumbnail">
            <img src="fringues/3.jpg" alt="pull">
            <p>TITRE ARTICLE</p>
            <p class="prix">PRIX</p>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="projet_page_article_select.php?id=4" class="thumbnail">
            <img src="fringues/4.jpg" alt="pull">
            <p>TITRE ARTICLE</p>
            <p class="prix">PRIX</p>
          </a>
        </div>
      </div>

      <div class="row imgz">
          <div class="col-sm-3">
            <a href="projet_page_article_select.php?id=1" class="thumbnail">
              <img src="fringues/5.jpg" alt="pull">
              <p>TITRE ARTICLE</p>
              <p class="prix">PRIX</p>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="projet_page_article_select.php?id=2" class="thumbnail">
              <img src="fringues/6.jpg" alt="pull">
              <p>TITRE ARTICLE</p>
              <p class="prix">PRIX</p>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="projet_page_article_select.php?id=3" class="thumbnail">
              <img src="fringues/7.jpg" alt="pull">
              <p>TITRE ARTICLE</p>
              <p class="prix">PRIX</p>
            </a>
          </div>
          <div class="col-sm-3">
            <a href="projet_page_article_select.php?id=4" class="thumbnail">
              <img src="fringues/8.jpg" alt="pull">
              <p>TITRE ARTICLE</p>
              <p class="prix">PRIX</p>
            </a>
          </div>
        </div>

        <div class="row imgz">
            <div class="col-sm-3">
              <a href="projet_page_article_select.php?id=1" class="thumbnail">
                <img src="fringues/9.jpg" alt="pull">
                <p>TITRE ARTICLE</p>
                <p class="prix">PRIX</p>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="projet_page_article_select.php?id=2" class="thumbnail">
                <img src="fringues/10.jpg" alt="pull">
                <p>TITRE ARTICLE</p>
                <p class="prix">PRIX</p>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="projet_page_article_select.php?id=3" class="thumbnail">
                <img src="fringues/11.jpg" alt="pull">
                <p>TITRE ARTICLE</p>
                <p class="prix">PRIX</p>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="projet_page_article_select.php?id=4" class="thumbnail">
                <img src="fringues/12.jpg" alt="pull">
                <p>TITRE ARTICLE</p>
                <p class="prix">PRIX</p>
              </a>
            </div>
          </div>

          <div class="row imgz">
              <div class="col-sm-3">
                <a href="projet_page_article_select.php?id=1" class="thumbnail">
                  <img src="fringues/13.jpg" alt="pull">
                  <p>TITRE ARTICLE</p>
                  <p class="prix">PRIX</p>
                </a>
              </div>
              <div class="col-sm-3">
                <a href="projet_page_article_select.php?id=2" class="thumbnail">
                  <img src="fringues/14.jpg" alt="pull">
                  <p>TITRE ARTICLE</p>
                  <p class="prix">PRIX</p>
                </a>
              </div>
              <div class="col-sm-3">
                <a href="projet_page_article_select.php?id=3" class="thumbnail">
                  <img src="fringues/15.jpg" alt="pull">
                  <p>TITRE ARTICLE</p>
                  <p class="prix">PRIX</p>
                </a>
              </div>
              <div class="col-sm-3">
                <a href="projet_page_article_select.php?id=4" class="thumbnail">
                  <img src="fringues/16.jpg" alt="pull">
                  <p>TITRE ARTICLE</p>
                  <p class="prix">PRIX</p>
                </a>
              </div>
            </div>

            <div class="row imgz">
                <div class="col-sm-3">
                  <a href="projet_page_article_select.php?id=1" class="thumbnail">
                    <img src="fringues/17.jpg" alt="pull">
                    <p>TITRE ARTICLE</p>
                    <p class="prix">PRIX</p>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="projet_page_article_select.php?id=2" class="thumbnail">
                    <img src="fringues/18.jpg" alt="pull">
                    <p>TITRE ARTICLE</p>
                    <p class="prix">PRIX</p>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="projet_page_article_select.php?id=3" class="thumbnail">
                    <img src="fringues/19.jpg" alt="pull">
                    <p>TITRE ARTICLE</p>
                    <p class="prix">PRIX</p>
                  </a>
                </div>
                <div class="col-sm-3">
                  <a href="projet_page_article_select.php?id=4" class="thumbnail">
                    <img src="fringues/20.jpg" alt="pull">
                    <p>TITRE ARTICLE</p>
                    <p class="prix">PRIX</p>
                  </a>
                </div>
              </div>

              <div class="row imgz">
                  <div class="col-sm-3">
                    <a href="projet_page_article_select.php?id=1" class="thumbnail">
                      <img src="fringues/21.jpg" alt="pull">
                      <p>TITRE ARTICLE</p>
                      <p class="prix">PRIX</p>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a href="projet_page_article_select.php?id=2" class="thumbnail">
                      <img src="fringues/22.jpg" alt="pull">
                      <p>TITRE ARTICLE</p>
                      <p class="prix">PRIX</p>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a href="projet_page_article_select.php?id=3" class="thumbnail">
                      <img src="fringues/23.jpg" alt="pull">
                      <p>TITRE ARTICLE</p>
                      <p class="prix">PRIX</p>
                    </a>
                  </div>
                  <div class="col-sm-3">
                    <a href="projet_page_article_select.php?id=4" class="thumbnail">
                      <img src="fringues/24.jpg" alt="pull">
                      <p>TITRE ARTICLE</p>
                      <p class="prix">PRIX</p>
                    </a>
                  </div>
                </div>

                <div class="row imgz">
                    <div class="col-sm-3">
                      <a href="projet_page_article_select.php?id=1" class="thumbnail">
                        <img src="fringues/25.jpg" alt="pull">
                        <p>TITRE ARTICLE</p>
                        <p class="prix">PRIX</p>
                      </a>
                    </div>
                    <div class="col-sm-3">
                      <a href="projet_page_article_select.php?id=2" class="thumbnail">
                        <img src="fringues/26.jpg" alt="pull">
                        <p>TITRE ARTICLE</p>
                        <p class="prix">PRIX</p>
                      </a>
                    </div>
                    <div class="col-sm-3">
                      <a href="projet_page_article_select.php?id=3" class="thumbnail">
                        <img src="fringues/27.jpg" alt="pull">
                        <p>TITRE ARTICLE</p>
                        <p class="prix">PRIX</p>
                      </a>
                    </div>
                    <div class="col-sm-3">
                      <a href="projet_page_article_select.php?id=4" class="thumbnail">
                        <img src="fringues/28.jpg" alt="pull">
                        <p>TITRE ARTICLE</p>
                        <p class="prix">PRIX</p>
                      </a>
                    </div>
                  </div>

                  <div class="row imgz">
                      <div class="col-sm-3">
                        <a href="projet_page_article_select.php?id=1" class="thumbnail">
                          <img src="fringues/29.jpg" alt="pull">
                          <p>TITRE ARTICLE</p>
                          <p class="prix">PRIX</p>
                        </a>
                      </div>
                      <div class="col-sm-3">
                        <a href="projet_page_article_select.php?id=2" class="thumbnail">
                          <img src="fringues/30.jpg" alt="pull">
                          <p>TITRE ARTICLE</p>
                          <p class="prix">PRIX</p>
                        </a>
                      </div>
                      <div class="col-sm-3">
                        <a href="projet_page_article_select.php?id=3" class="thumbnail">
                          <img src="fringues/31.jpg" alt="pull">
                          <p>TITRE ARTICLE</p>
                          <p class="prix">PRIX</p>
                        </a>
                      </div>
                      <div class="col-sm-3">
                        <a href="projet_page_article_select.php?id=4" class="thumbnail">
                          <img src="fringues/32.jpg" alt="pull">
                          <p>TITRE ARTICLE</p>
                          <p class="prix">PRIX</p>
                        </a>
                      </div>
                    </div>

      <div id="footer">
        <div>
          <ul><span>Sécurité</span>
            <li>Droits</li>
            <li>Mode de paiement</li>
          </ul>
        </div>

        <div>
          <ul><span>Compte</span>
            <li><a href="projet_page_client.php">Connexion</a></li>
            <li><a href="projet_page_panier.php">Mon panier</a></li>
          </ul>
        </div>
      </div>

  </body>
</html>
