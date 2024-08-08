<?php

function problem($error) {
    echo "It looks like there is a problem with your form data: <br><br>";
    echo $error . "<br><br>";
    echo "Fix those to proceed.<br><br>";
    die();
}

function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}