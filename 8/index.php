<?php
require "_view-transports.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
<?php 
include '../4/_navbar.php';
include_once "../5/_alert.php"
?>

    <h1>Exercice 8 : Affichage des données de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, affichez
        l'ensemble des lignes de transports disponibles dans votre base de données dans un tableau HTML. A chaque ligne
        de transport, il devra y avoir deux actions possibles dans le tableau, éditer et supprimer (Bien que non
        fonctionnelles).</p>
    <small>Il est peut-être temps de définir un mode de récupération par défaut des données par PDO afin d'éviter
        d'avoir un tableau doublé.</small>
    <p><b>Bonus : ajoutez un champ de recherche pour filtrer les résultats par leur nom (A l'aide de l'instruction LIKE
            %recherche% dans une requête SQL)</b></p>

    <form class="form w-25 mx-auto" action="" method="get">
        <input class="form-control" type="text" placeholder="Search" id="search" name="search">
        <button class="btn btn-outline-success mt-2 w-100" type="submit">Search</button>

        <?php 
        if(!empty($search)){
            echo "<h3>Résultats de la recherche : $search</h3>";
            if (empty($transports)) {
                echo 'Aucun résultat trouvé !';
            }    
            echo "<a href='index.php'>Retourner aux lignes</a>";
        }
        ?>
    </form>

    <table class="table table-bordered w-50 mx-auto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom de la ligne</th>
                <th scope="col">Terminus A</th>
                <th scope="col">Terminus B</th>
                <th scope="col">Modification</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($transports as $transport){
            ?>
                <tr>
                    <td><?php echo $transport['id']?></td>
                    <td><?php echo $transport['nom_de_ligne']?></td>
                    <td><?= $transport['terminus_a']?></td>
                    <td><?php echo $transport['terminus_b']?></td>
                    <td class="d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                        <a href="../9/index.php?id=<?php echo $transport['id']?>" class="btn btn-outline-warning">Edit</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

<?php include '../4/_footer.php';?>
</body>

</html>