<footer class="footer mt-auto py-3 bg-body-secondary jumbotron text-center">
    <?php
    echo "<a href=\"" . $_SESSION['baseURL'] . "\" target=\"_blank\" style=\"color:black;\">Dr. William PENSEC</a>";
    ?>
    <br>
    Chercheur post-doctorant
    <br>
    <?php
    echo "2017 - " . date("Y");
    ?>
    <br>
    Version 3.0
    <br><br>
    <p style="font-size: 10px; margin-bottom: auto">
        <?php
        echo "Dernière mise à jour : " . $dateMajFile;
        ?>
    </p>
</footer>
</body>

</html>