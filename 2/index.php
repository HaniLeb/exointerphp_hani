<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once "../4/_navbar.php"?>

    <form class="w-75 mx-auto shadow border rounded p-5 mt-5" action="car.php" method="POST">
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" name="marque" id="marque">
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modele</label>
            <input type="text" class="form-control" name="modele" id="modele">
        </div>
        <div class="mb-3">
            <label for="couleur" class="form-label">Couleur</label>
            <input type="color" name="couleur" id="couleur">
        </div>
        <div class="mb-3">
            <label for="kilometrage" class="form-label">kilometrage</label>
            <input type="number" class="form-control" name="kilometrage" id="kilometrage">
        </div>
        <div class="mb-3">
            <label for="curburant" class="form-label">Curburant</label>
            <input type="text" class="form-control" name="curburant" id="curburant">
        </div>
        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="date" class="form-control" name="annee" id="annee">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="prix">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Envoyer</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php include_once "../4/_footer.php"?>
