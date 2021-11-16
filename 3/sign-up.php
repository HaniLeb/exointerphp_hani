<?php
require "config.php";

$alert = false;

if(isset($_GET["error"])){
    $alert = true;

    if($_GET["error"] == "champsVide"){
        $type = "danger";
        $message = "Tous les champs sont requis";
    }
    if($_GET["error"] == "mdpdifferent"){
        $type = "warning";
        $message =  "Les mdp sont différent";
    }
}

if (isset($_GET["success"])) {
    $alert = true;

    if($_GET["success"] == "auth"){
        $type = "success";
        $message = "Votre inscription est valide";
    }
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
<?php
if (!empty($_SESSION)) {
?>
    <?php echo $alert ? "<div class='alert alert-{$type} mt-5 text-center w-75 mx-auto'>{$message}</div>" : '';?>

    <div class="w-75 mx-auto shadow border rounded p-5 mt-5 text-center">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?> ❤</h1>
        <p>Ici on fait n'importe quoi : du coup voici tes identifiants</p>
        <small>On a quand même crypté le mot de passe 😉</small>
        <ul>
            <li>username : <?php echo $_SESSION['username']; ?></li>
            <li>email : <?php echo $_SESSION['email']; ?></li>
            <li>password : <?php echo $_SESSION['password']; ?></li>
        </ul>

        <div class="d-flex justify-content-center">
            <a class="bg-danger text-light text-decoration-none p-4" href="?logout">Déconnecte moi tout de suite!</a>
        </div>
    </div>
<?php
}else{
?>
    <?php echo $alert ? "<div class='alert alert-{$type} mt-5 text-center w-75 mx-auto'>{$message}</div>" : '';?>

    <form class="w-75 mx-auto shadow border rounded p-5 mt-5" action="sign-up-post.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Password Confirm</label>
            <input type="password" class="form-control" name="password2" id="password2">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-25">Envoyer</button>
        </div>
    </form>
    <?php }?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>