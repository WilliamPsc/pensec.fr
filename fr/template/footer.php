<footer class="footer mt-auto py-3 bg-body-secondary jumbotron text-center">
    <?php
    echo "<a href=\"" . $_SESSION['baseURL'] . "\" target=\"_blank\" style=\"color:black;\">William PENSEC</a>";
    ?>
    <br>
    Doctorant
    <br>
    <?php
    echo "2020 - " . date("Y");
    ?>
    <br>
    Version 2.0
    <br><br>
    <p style="font-size: 10px; margin-bottom: auto">
        <?php
        echo "Dernière mise à jour : " . $dateMajFile;
        ?>
    </p>
</footer>
</body>

</html>