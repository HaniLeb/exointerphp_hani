<?php
require "../6/connect.php";

echo '<pre>';
var_dump($_POST);
echo '</pre>';

if (in_array('', $_POST)) {
    header('Location:index.php?error=champsvide');
    exit();
}else{
    $nomDeLigne = htmlspecialchars(trim($_POST['nom_de_ligne']));
    $terminusA = htmlspecialchars(trim($_POST['terminus_a']));
    $terminusB = htmlspecialchars(trim($_POST['terminus_b']));
}

try{
    $insertTransport = 'INSERT INTO transports.lignesQuatreCols (nom_de_ligne, terminus_a, terminus_b) VALUES (:nom_de_ligne, :terminus_a, :terminus_b)';

    $reqInsert = $connexion->prepare($insertTransport);
    $reqInsert->bindValue(':nom_de_ligne', $nomDeLigne, PDO::PARAM_STR);
    $reqInsert->bindValue(':terminus_a', $terminusA, PDO::PARAM_STR);
    $reqInsert->bindValue(':terminus_b', $terminusB, PDO::PARAM_STR);

    $reqInsert->execute();
    header('Location:index.php?success=auth');
}catch(PDOException $e){
    echo $e->getMessage();
}

?>