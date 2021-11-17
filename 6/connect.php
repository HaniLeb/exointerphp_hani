<?php
require 'dev.env.php';

$connexion_string = 'mysql:host=;'.DBHOST.'dbname='.DBNAME;

try{
    $options = [
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
    ];
    $connexion = new PDO($connexion_string, USER, PASSWORD, $options);
    // $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo 'Connexion établie avec ma BDD';
}catch(PDOException $e){
    $connexion = null;
    echo 'ERROR : ' . $e->getMessage();
}
?>