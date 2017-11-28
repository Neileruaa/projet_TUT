<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MON mini chat</title>
    </head>

    <style type="text/css">
        form{
            text-align: center;
        }
    </style>
<body>

    <form action="minichat_post.php" method="post">
        <p>
            <label for="Pseudo">Pseudo:</label>
            <input type="text" name="Pseudo" id="Pseudo"/><br>
            <label for="Message">Message:</label>
            <input type="text" name="Message" id="Message"/><br>

            <input type="submit" name="Envoyer"/>
        </p>
    </form>
    <?php 

        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','titi2020');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT Pseudo, Message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
        while($donnees = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($donnees['Pseudo']) .'</strong>:'.htmlspecialchars($donnees['Message']).'</p>';
        } 

        $reponse->closeCursor();


    ?>
</body>
</html>