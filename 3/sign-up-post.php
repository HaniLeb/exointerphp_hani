<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])){
    header('Location:sign-up.php?error=champsVide');
    exit();
}else{
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
}

if ($password === $password2) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password = password_hash($password, PASSWORD_DEFAULT);
    header('Location:sign-up.php?success=auth');
}else{
    header('Location:sign-up.php?error=mdpdifferent');
    exit();
}

?>