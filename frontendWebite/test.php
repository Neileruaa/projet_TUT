<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="Images/icone.ico">
    <link rel="stylesheet" href="projet_page1_style.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <title>test</title>
    <style>
          .container table{
            font-size: 20px;
            border: 3px solid black;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
            width: : 100%;
            min-height: 400px;
            text-align: center;
            background-color: #D3D3D3;
          }
          td {
            border: solid 1px black;
            text-align: center;
          }
          nav#myScrollspy.col-sm-3 {
            height: 100%;
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
          #haut{
            min-height: 0px;
          }
          .img {
            text-align: center;
            padding: 15px 15px 15px 15px;
            color: black;
            font-size: 30px;
            float: none;
          }
          .img:hover {
            font-size: 30px;
          }
    </style>
  </head>
  <body>

    <div class="container tableau">
            <table class="descriptifPanier">
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
                <td colspan="5"><button type="button" class="btn btn-primary btn-lg" style="background: gray; border: gray;"><a href="#">Acheter</a></button></td>
              </tr>
            </table>
    </div>
  </body>
</html>
