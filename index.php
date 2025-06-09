<?php
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == ""){
    $langue == "en";
}

$uri = "https://$_SERVER[HTTP_HOST]/" . $langue . "/";
header("Location: " . $uri);
?>