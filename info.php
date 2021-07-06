<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php


// Sous MAMP

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8;port=3307','root', 'root');
}catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video

$requete = $bdd->exec("INSERT INTO users(nam, nameCompany, email, telephone, login, password) VALUES('raya', 'orange', 'sifax@gmail.com', 987543245,'sif','1234')");

$reponse = $bdd->query('SELECT * FROM users');

?>
<table border= 1>
    <?php
    while($donnees = $reponse->fetch()){
        ?>
        <tr>
            <td> <?php echo $donnees['nam']; ?> </td>
            <td> <?php echo $donnees['nameCompany']; ?> </td>
            <td> <?php echo $donnees['email']; ?> </td>
            <td> <?php echo $donnees['telephone']; ?> </td>
        </tr>
        <?php
        }
    ?>
    </table>


    </body>
</html>