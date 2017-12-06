<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Choix espace membre !</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css">
		span{
			color : red;
		}
		.jumbotron{
			width: 500px;
		}
	</style>
  <script>
		function inscription_vendeur() {
			window.location="inscription_vendeur.php";
		}
    function inscription_client() {
      window.location="inscription_client.php";
    }
  </script>
</head>
<body>
<div class="container-fluid">
	<div align="center" class="jumbotron">
		<h2>Quel espace membre ?</h2>
		<br><br>
    <input type="button" name="inscription_vendeur" value="S'inscrire en tant que vendeur" onclick="inscription_vendeur()">
    <input type="button" name="inscription_client" value="S'inscrire en tant que client" onclick="inscription_client()">
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
