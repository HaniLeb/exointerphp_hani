<?php
require "../6/connect.php";

// var_dump($_GET);

try {

    $id = htmlspecialchars(trim($_GET['id']));

    $sql = 'SELECT * FROM transports.lignesquatreCols WHERE id=:id';
    $reqLine = $connexion->prepare($sql);
    $reqLine->bindValue(':id', $id);
    $reqLine->execute();
    $transports = $reqLine->fetch();

} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>