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
  <style type="text/css">
    table{
      display: inline-block;
      overflow: hidden;
    }
    div{display: inline-block;}
  </style>
  </head>
  <body>
    <h1>On part la dessus !</h1>

    <?php
     $sql = mysqli_query($bdd, "SELECT * FROM testcontent ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql)) {
      $title = $row['title'];
      $content = $row['content'];
      $image = $row['image_name'];
    ?>
    <div>
    <table border="1" width="200px">
      <tr>
        <td>
          <?php echo $title ;?>
        </td>
      </tr>
      <tr>
        <td>
           <?php echo $content ;
           $mail->Body = "
           Envoyé depuis : ". $_POST["email"] . "<br>" . $_POST["message".''].$_POST."
           <html>
            <body>
              <div>"?>
                <a href= "http:/\/localhost/Projet_tut/confirmation.php?pseudo=" . urlencode($pseudo).'&key'.$key.\"      ">       Confirmez votre compte ! </a>
              <?php "</div>
            </body>
           </html>
           ";" ?>
              </td>
      </tr>
      <tr>
        <td>
          <img src="image/<?php echo $image ?>" width="200px">
        </td>
      </tr>
    </table>
  </div>

<?php
}
?>
  </body>
</html>
