<?php
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == ""){
    $langue == "en";
}
$http = (empty($_SERVER['HTTPS']) ? 'http' : 'https');
$uri = "$http://$_SERVER[HTTP_HOST]/" . $langue . "/";
header("Location: " . $uri);
?>