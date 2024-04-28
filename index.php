<?php
$_SESSION['baseURL'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";

$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$_SESSION['language'] = $langue;

$uri = $_SESSION['baseURL'] . $_SESSION['language'] . "/index.php";
header("Location: " . $uri);
?>