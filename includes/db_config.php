<?php

$db_host = "localhost";
$db_user = "gant01_skp-dp_sde_dk";
$db_password = "ykpy3k4z";
$db_name = "gant01_skp_dp_sde_dk";

function db_connect($db_host, $db_user, $db_password, $db_name) {
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

    // check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}
