<?php
require '_header.php';
$id_recup=$_GET['id'];
$json = array('error'=> true);
if(isset($id_recup) AND $id_recup>0){
    $product = $DB->requete('SELECT id FROM products WHERE id=:id',
    array('id'=> $id_recup));
    if (empty($product)) {
        $json['message']="Ce produit n'existe pas";
    }
    $panier->add($product[0]->id);
    $json['error'] = false;
    $json['total'] = number_format($panier->total(),2,',',' ');
    $json['countObject'] = $panier->countObject();

    $json['message']='Le produit a bien été ajouter a votre panier.';
}else {
    $json['message']='Vous n\'avez pas selectionner de produits a ajouter au panier,
    ou le format n\'est pas correct';
}
echo json_encode($json);
?>
