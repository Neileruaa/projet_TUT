<?php
require 'header.php';
?>
<form method="POST" action="panier.php">
<table>
    <tr><th>Nom</th><th>img</th><th>Quantité</th><th>Prix</th></tr>
<?php
    $ids=array_keys($_SESSION['panier']);
    if(empty($ids)){
        $products = array();
    }else {
        $products = $DB->requete('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
    }
    foreach($products as $product):
?>
    <tr><td><?= $product->name;?></td>
        <td><img src="img/<?=$product->image_name;?>" width="200px"></td>
        <td><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></td>
        <td><?= number_format($product->price,2,","," "); ?>€</td>
        <td><a href="panier.php?delPanier=<?= $product->id;?>" class="del"><img src="img/poubelle.jpg" width="100px"></a></td>
    </tr>
<?php endforeach;?>

    <tr><td></td><td></td><td><input type="submit" value="Recalculer" ></td><td>Total : <?= number_format($panier->total(),2,',',' ');?>€</td></tr>
</table>
</form>
<?php require 'footer.php';?>
