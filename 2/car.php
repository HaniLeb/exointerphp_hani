<?php
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

<?php
if(isset($marque)){
?>

<ul>
    <li>Marque: <?php echo $marque; ?></li>
    <li>Modèle: <?php echo $modele; ?></li>
    <li>Couleur: <?php echo $couleur; ?></li>
    <li>Kilométrag: <?php echo $kilometrage; ?></li>
    <li>Carburant: <?php echo $carburant; ?></li>
    <li>Annee: <?php echo $annee; ?></li>
    <li>Prix: <?php echo $prix; ?></li>
</ul>
<?php } else{?>
    <ul>
        <li>Marque:</li>
        <li>Modèle:</li>
        <li>Couleur:</li>
        <li>Kilométrage:</li>
        <li>Carburant:</li>
        <li>Annee:</li>
        <li>Prix:</li>
    </ul>
<?php }?>