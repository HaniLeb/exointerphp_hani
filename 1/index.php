<?php
if(in_array('', $_POST)){
    echo ("Tous les champs sont requis");
    exit();
}else{
    $lastname = htmlspecialchars(trim($_POST['lastname']));
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $adress = htmlspecialchars(trim($_POST['adress']));
    $town = htmlspecialchars(trim($_POST['town']));
    $zipcode = htmlspecialchars(trim($_POST['zipcode']));
}
?>

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
    <form class="w-75 mx-auto shadow border rounded p-5 mt-5" methode="POST">
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender">
        </div>
        <div class="mb-3">
            <label for="adress" class="form-label">Adress</label>
            <input type="text" class="form-control" name="adress">
        </div>
        <div class="mb-3">
            <label for="town" class="form-label">Town</label>
            <input type="text" class="form-control" name="town">
        </div>
        <div class="mb-3">
            <label for="zipcode" class="form-label">Zip code</label>
            <input type="number" class="form-control" name="zipcode">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
echo "
<div>
<ul>
<li>$lastname</li>
<li>$firstname</li>
<li>$gender</li>
<li>$adress</li>
<li>$town</li>
<li>$zipcode</li>
</ul>
</div>"
?>