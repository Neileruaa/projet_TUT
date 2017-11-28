<?php
    try{
          $bdd = mysqli_connect("localhost","root","titi2020","test");
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Display article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>


    <?php
     $sql = mysqli_query($bdd, "SELECT * FROM testcontent ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql)) {
      $image = $row['image_name'];
    ?>
    <?php echo $image ?>
    <div>
    <img src="<?php echo $image ?>">
    </div>

<?php
}
?>
  </body>
</html>
