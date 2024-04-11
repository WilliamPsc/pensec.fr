<?php
$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($langue == "fr"){
    header("Location : https://www.pensec.fr/fr/index.php");
} else{
    header("Location : https://www.pensec.fr/en/index.php");
}
?>