<?php
require "../6/connect.php";

echo '<pre>';
var_dump($_POST);
echo '</pre>';


if (in_array('', $_POST)) {
    header("Location:index.php?error=champsvide");
    exit();
}else{
    $nomdeligne = htmlspecialchars(trim($_POST['nom_de_ligne']));
    $terminusA = htmlspecialchars(trim($_POST['terminus_a']));
    $terminusB = htmlspecialchars(trim($_POST['terminus_b']));
    $id = intval(htmlspecialchars(trim($_POST['id'])));
}
echo "ok1";
$getId = explode('=', $_SERVER['HTTP_REFERER'])[1];
// $altGetId = substr(strchr($_SERVER['HTTP_REFERER'], 'id'), 3);

// echo '<pre>';
// var_dump($getId);
// var_dump($altGetId);
// echo '</pre>';

if (!($getId == $id)) {
    header("Location:index.php?error=reqNotValid");
    exit();
}
echo "ok2";

try {
    $editLine = 'UPDATE transports.lignesquatreCols SET nom_de_ligne=:nom_de_ligne, terminus_a=:terminus_a, terminus_b=:terminus_b WHERE id=:id';
    
    $reqEditLine = $connexion->prepare($editLine);
    $reqEditLine->bindValue(':nom_de_ligne', $nomdeligne, PDO::PARAM_STR);
    $reqEditLine->bindValue(':terminus_a', $terminusA, PDO::PARAM_STR);
    $reqEditLine->bindValue(':terminus_b', $terminusB, PDO::PARAM_STR);
    $reqEditLine->bindValue(':id', $id, PDO::PARAM_INT);
echo "ok3";
    
    $reqEditLine->execute();
    header("Location:index.php?success=modif");
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}

?>