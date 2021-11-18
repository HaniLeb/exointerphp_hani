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
    if($_GET["error"] == "reqNotValid"){
        $type = "warning";
        $message =  "id not valid";
    }
}

if (isset($_GET["success"])) {
    $alert = true;

    if($_GET["success"] == "auth"){
        $type = "success";
        $message = "Vos données sont valide";
    }
    if($_GET["success"] == "modif"){
        $type = "success";
        $message = "Vos données ont été modifier";
    }
}
?>