<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container">

</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>