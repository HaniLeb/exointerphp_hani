<?php
require "../6/connect.php";

try {
    $search = null;
    // $viewTransports = 'SELECT * FROM transports.lignesquatreCols';
    // $reqViewTransports = $connexion->query($viewTransports);
    // $transports = $reqViewTransports->fetchAll();

    // OU

    $transports = $connexion->query('SELECT * FROM transports.lignesquatreCols')->fetchAll();

    if (isset($_GET['search'])) {
        $search = htmlspecialchars(trim($_GET['search']));
        $sql = 'SELECT * FROM transports.lignesquatreCols WHERE nom_de_ligne LIKE :search OR terminus_a LIKE :search OR terminus_b LIKE :search';
        $reqLines = $connexion->prepare($sql);
        $reqLines->bindValue(':search', "%$search%");
        $reqLines->execute();
        $transports = $reqLines->fetchAll();
    }
} catch (PDOException $e) {
    echo "ERROR : " . $e->getMessage();
}
?>