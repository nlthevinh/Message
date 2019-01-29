<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css"/>
        <title>Message</title>
    </head>
    <body>
        <h1>Message</h1>
        <?php
            if($_POST['texte']===""){
                echo "Vous n'avez rien écrit";
            }
            else{
            echo "Vous avez écrit ".$_POST['texte'];
            }
        ?>
        <form method="post" action="index.php">
            <input type="text" name="texte"/>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>
