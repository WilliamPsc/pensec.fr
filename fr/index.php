    <?php
    session_start(); // Ensure the session is started if you're using session variables
    include "template/header.php";
    include "template/menu.php";
    ?>

    <?php
    include "../assets/googlescholar/googlescholar.php";

    if ($json_data === FALSE) {
        die('<h1 class="align-middle text-center">Error fetching JSON data.</h1>');
    }

    // Decode the JSON data to a PHP array
    $data = json_decode($json_data, true);

    // Extract the number of citations and publications
    $nb_citations = $data['total_citations'];
    $nb_publications = count($data['publications']);
    $hindex = $data['hindex'];
    $index10 = $data['indexi10'];
    ?>

    <br><br>
    <div class="container">
        <h2 class="text-center"><u>Chercheur Contractuel - Post-doctorant</u></h2>
        <div class="table-responsive-md">
            <h4 class="text-center">Évaluation de la sécurité des implémentations FPGA de réseaux de neurones sur RISC-V</h4>
            <br><br>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-solid fa-phone me-1"></i> Contact :
                        </td>
                        <td class="align-middle text-center">+33 04.77.91.57.59 (Pro)</td>
                        <td class="align-middle text-center">
                            <i class="fa-regular fa-envelope me-1"></i> Email :
                        </td>
                        <td class="align-middle text-center">
                            <script src="../assets/js/mail.js"></script>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-brands fa-google-scholar me-1"></i> <a href="https://scholar.google.com/citations?user=AJE3er8AAAAJ" target="_blank">Google Scholar :</a>
                        </td>
                        <td class="align-middle text-center"><?php echo "$nb_citations citations / $nb_publications publications"; ?></td>
                        <td class="align-middle text-center">
                            <i class="bi bi-bank me-1"></i> Institution :
                        </td>
                        <td class="align-middle text-center">
                            <a href="https://laboratoirehubertcurien.univ-st-etienne.fr/en/teams/secure-embedded-systems-hardware-architectures.html" target="_blank">Université Jean Monnet -<br> UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) -<br> Équipe SESAM - Saint-Étienne</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-brands fa-github me-1"></i> GitHub : <a href="https://github.com/WilliamPsc/" target="_blank">WilliamPsc</a>
                        </td>
                        <td class="align-middle text-center" colspan="2">
                            <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                                <i class="fa-brands fa-linkedin me-1"></i> LinkedIn
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-brands fa-orcid me-1"></i> <a href="https://orcid.org/0009-0006-0234-8213" target="_blank">ORCID : 0009-0006-0234-8213</a>
                        </td>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-solid fa-chart-line me-1"></i> H-Index : <?php echo "$hindex"; ?> / Index i10 : <?php echo "$index10"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-solid fa-magnifying-glass me-1"></i> Domaines de recherche :
                        </td>
                        <td class="align-middle" colspan="2">
                            <ul>
                                <li>Sécurité matérielle des systèmes embarqués / processeurs RISC-V.</li>
                                <li>Attaques physiques (principalement injections de fautes).</li>
                                <li>Sécurité des implémentations de réseaux de neurones.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <h3 class="text-center">Biographie</h3>
            <p class="justified-text">
                A partir de septembre 2025, je serai Maître de Conférences à l'Université de Montpellier, rattaché au Laboratoire d'Informatique, de Robotique et de Micro-électronique de Montpellier (LIRMM), au sein de l'équipe ADAC. J'enseignerai à Polytech Montpellier dans le département Électronique et Informatique Industrielle (EII) pour la spécialité Micro-Électronique et Automatique (MEA).
            </p>

            <p class="justified-text">
                Entre octobre 2024 et août 2025, je suis chercheur contractuel (post-doctorant) à l’Université Jean Monnet, à Saint-Étienne, au sein de l’équipe SESAM du Laboratoire Hubert Curien. Ma recherche actuelle porte sur l’évaluation de la sécurité des implémentations de réseaux de neurones embarqués, avec comme objectif leur sécurisation contre les attaques par injection de fautes (laser).
            </p>

            <p class="justified-text">
                De 2021 à 2024, j’ai réalisé une thèse de doctorat en informatique à l’Université Bretagne Sud, au sein de l’équipe ARCAD du Laboratoire des Sciences et Techniques de l'Information, de la Communication et de la Connaissance (Lab-STICC), à Lorient. Mes travaux ont porté sur l’extension de la protection des processeurs contre les menaces physiques et logicielles, via la sécurisation du mécanisme DIFT (Dynamic Information Flow Tracking) face aux attaques par injections de fautes. J'ai soutenu cette thèse de Doctorat en décembre 2024, à Lorient.
            </p>

            <p class="justified-text">
                Je suis également l'auteur et co-auteur de plusieurs articles de conférences publiés dans plusieurs conférences internationales (Sensors S&P, DSD, ISVLSI).
            </p>
        </div>

        <div class="table-responsive-md">
            <iframe style="width: 100%; height: 350px; border: 1px solid black;" src="https://www.openstreetmap.org/export/embed.html?bbox=4.384360313415528%2C45.4522172679292%2C4.387900829315186%2C45.45382787736185&amp;layer=mapnik&amp;marker=45.4530225783951%2C4.3861305713653564"></iframe>
            <br><small><a href="https://www.openstreetmap.org/?mlat=45.453023&amp;mlon=4.386131#map=19/45.453023/4.386131" target="_blank">Afficher une carte plus grande</a></small>
        </div>
    </div>


    <?php
    $dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
    include "template/footer.php";
    ?>