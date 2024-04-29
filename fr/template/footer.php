        <footer class="footer jumbotron text-center" style="margin-bottom:1px">
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
            <p style="font-size: 10px;">
                <?php
                echo "Dernière mise à jour : " . $dateMajFile;
                ?>
            </p>
        </footer>
    </body>
</html>