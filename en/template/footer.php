<footer class="footer mt-auto py-3 bg-body-secondary jumbotron text-center">
    <?php
    echo "<a href=\"" . $_SESSION['baseURL'] . "\" target=\"_blank\" style=\"color:black;\">Dr. William PENSEC</a>";
    ?>
    <br>
    Postdoctorate Researcher
    <br>
    <?php
    echo "2017 - " . date("Y");
    ?>
    <br>
    Version 2.0
    <br><br>
    <p style="font-size: 10px; margin-bottom: auto">
        <?php
        echo "Last update : " . $dateMajFile;
        ?>
    </p>
</footer>
</body>

</html>