<?php
include_once "../4/_navbar.php";

if(!empty($_POST)){
    if(in_array('', $_POST)){
        echo ("Tous les champs sont requis");
        exit();
    }  
}else{
    $marque = htmlspecialchars(trim($_POST['marque']));
    $modele = htmlspecialchars(trim($_POST['modele']));
    $couleur = htmlspecialchars(trim($_POST['couleur']));
    $kilometrage = htmlspecialchars(trim($_POST['kilometrage']));
    $carburant = htmlspecialchars(trim($_POST['carburant']));
    $annee = htmlspecialchars(trim($_POST['annee']));
    $prix = htmlspecialchars(trim($_POST['prix']));
}
?>

<ul>
    <li>Marque: <?php echo $marque; ?></li>
    <li>Modèle: <?php echo $modele; ?></li>
    <li>Couleur: <input type="color" value="<?php echo $couleur; ?>" id="colorWell"></li>
    <li>Kilométrag: <?php echo $kilometrage; ?></li>
    <li>Carburant: <?php echo $carburant; ?></li>
    <li>Annee: <?php echo $annee; ?></li>
    <li>Prix: <?php echo $prix; ?></li>
</ul>

<?php include_once "../4/_footer.php";?>
