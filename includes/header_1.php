<?php
require_once ("function.php");
require_once ("db_config.php");

$show_alert = true;

if (isset($_GET["status"])) {
    $status_value = $_GET["status"];
    $show_alert = true;
}
var_dump($show_alert);
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
<body>
    <header>
        <h1 class="name">Hildegard Summerbird</h1>
        <img src="photo.jpg" alt="Photo of Person">
        <section class="perinfo">
            <p class="age">
                <span class="differences">Alder:</span> <a>130</a>
            </p>
            <p class="other1">
                <span class="differences">Job:</span> <a>Full-Stack Developer</a>
            </p>
            <p class="other2">
                <span class="differences">Specialisering:</span> <a>UX/UI design</a>
            </p>
        </section>
    </header>
    <nav>
        <ul id="navigation">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>