<?php
require '_header.php';
?><!DOCTYPE html>
<html>
<head>
	<title>index de mon site</title>
	<meta charset="utf-8">
	<style>
	.box{
		border: solid gray 2px;
		display: inline-flex;
	}
	table, th, td {
   border: 1px solid black;
}
	</style>
</head>

<body>
	<header>
		<a href="index.php"><img src="img/jules.jpeg" width="150px"></a>
		<a href="panier.php"><img src="img/panier.jpg" width="150px"></a>
		<div class="items">Nb items : <span id="countObject"><?= $panier->countObject();?></span></div>
		<div class="total"><span id="total"><?= number_format($panier->total(),2,',',' ');?></span>€</div>
	</header>
