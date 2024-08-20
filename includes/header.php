<?php
require_once ("functions.php");
require_once ("db_config.php");

$show_alert = false;
//
if (isset($_GET["status"])) {
    $status_value = $_GET["status"];
    $show_alert = true;
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <title>H. Birds Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="bootstrap-overrides">
    <header id="header-override">
        <h1 id="name">Hildegard Summerbird</h1>
        <img id="photo" src="photos/photo.jpg" alt="Photo of Person">
        <section id="perinfo">
            <p id="age">
                <span id="differences">Alder:</span> <a id="attributes">130</a>
            </p>
            <p id="other1">
                <span id="differences">Job:</span> <a id="attributes">Full-Stack Developer</a>
            </p>
            <p id="other2">
                <span id="differences">Specialisering:</span> <a id="attributes">UX/UI design</a>
            </p>
        </section>
    </header>