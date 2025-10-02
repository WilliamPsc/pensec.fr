<footer class="footer mt-auto py-3 bg-body-secondary jumbotron text-center">
    <div class="container">
        <p>
            <?php
            echo "<a href=\"" . $baseURL . "/" . $langue . "\" target=\"_blank\" style=\"color:black;\">Dr. William PENSEC</a>";
            ?>
            <br>
            Maître de Conférences
        </p>
        <p>
            <?php
            echo "2017 - " . date("Y");
            ?>
            <br>
            Version 3.1
        </p>
        <div class="row text-center mb-3">
            <div class="col-4">
                <a href="https://www.lirmm.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/LogoLIRMMlong.png" class="img-fluid w-25" alt="Logo LIRMM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.umontpellier.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/logo_um_2022_rouge_RVB.png" class="img-fluid w-25" alt="Logo UM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.polytech.umontpellier.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/Logo_polytech_montpellier.png" class="img-fluid w-25" alt="Logo Polytech">
                </a>
            </div>
        </div>
    </div>

    <p style="font-size: 10px; margin-bottom: auto">
        <?php
        echo "Dernière mise à jour : " . $dateMajFile;
        ?>
    </p>
</footer>
</body>

</html>