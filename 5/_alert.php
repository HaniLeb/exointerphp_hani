<?php
$alert = false;

if (isset($_GET["error"])) {
    $alert = true;

    if ($_GET["error"] == "champsvide") {
        $type = "danger";
        $message = "Tous les champs doivent être rempli";
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