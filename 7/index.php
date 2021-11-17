<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exercice 7</title>
</head>

<body>
    <?php
        include '../4/_navbar.php';
    ?>
    <?php include_once "../5/_alert.php"?>

    <h1>Exercice 7 : Ajout simple à la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire pour ajouter des nouvelles lignes de transport dans la base de données. Vous pourrez vous inspirer du
        réseau de transports de votre choix.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.</small>
    <p><b>Bonus : Ajoutez des messages d'erreur dans le système pour renforcer l'expérience utilisateur</b></p>
    <?php
        include '../4/_footer.php';
    ?>

    <?php echo $alert ? "<div class='alert alert-{$type} mt-5 text-center w-75 mx-auto'>{$message}</div>" : '';?>

    <form class="w-75 mx-auto shadow border rounded p-5 mt-5" action="index_post.php" method="POST">
        <div class="mb-3">
            <label for="nom_de_ligne" class="form-label">Nom de ligne</label>
            <input type="text" class="form-control" name="nom_de_ligne" id="nom_de_ligne">
        </div>
        <div class="mb-3">
            <label for="terminus_a" class="form-label">Nom Terminus A</label>
            <input type="text" class="form-control" name="terminus_a" id="terminus_a">
        </div>
        <div class="mb-3">
            <label for="terminus_b" class="form-label">Nom Terminus B</label>
            <input type="text" class="form-control" name="terminus_b" id="terminus_b">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Envoyer</button>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>