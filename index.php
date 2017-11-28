<?php require 'header.php';?>
<?php
    //var_dump();
?>
<?php $products = $DB->requete('SELECT * FROM products');
    foreach ($products as $product):?>
<div class="box">
    <div class="productfull">
        <a href="#">
            <img src="img/<?=$product->image_name;?>" width="300px;">
        </a>
        <div class="description">
            <strong><?= $product->name;?></strong>
            <a href="#" class="price"><?= number_format($product->price,2,","," "); ?>€</a>
        </div>
            <a href="addpanier.php?id=<?= $product->id;?>" class="add addPanier">add</a>
    </div>
</div>
<?php endforeach ?>

<?php require 'footer.php';?>
