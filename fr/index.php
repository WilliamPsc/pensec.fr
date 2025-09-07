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
        <h2 class="text-center"><u>Maître de Conférences</u></h2>
        <div class="table-responsive-md">
            <h4 class="text-center">Section CNU 61 - Génie informatique, automatique et traitement du signal</h4>
            <br><br>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-solid fa-phone me-1"></i> Contact :
                        </td>
                        <td class="align-middle text-center">+33 XXXXXXX (Pro)</td>
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
                            <a href="https://www.lirmm.fr/equipes/adac" target="_blank">Université de Montpellier - UMR CNRS 5506, LIRMM -<br> Équipe ADAC - Montpellier</a>
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
                Depuis le 1<sup>er</sup> septembre 2025, je suis Maître de Conférences à l'Université de Montpellier, rattaché au Laboratoire d'Informatique, de Robotique et de Micro-électronique de Montpellier (LIRMM), au sein de l'équipe ADAC. J'enseigne à l'école Polytech Montpellier dans le département Électronique et Informatique Industrielle (EII) pour la spécialité Micro-Électronique et Automatique (MEA) à des étudiants en cursus ingénieur.
            </p>
            <div class="row text-center mb-3">
                <div class="col-4">
                    <img src="../assets/img/logo/LogoLIRMMlong.png" class="img-fluid w-50" alt="Logo LIRMM">
                </div>
                <div class="col-4">
                    <img src="../assets/img/logo/logo_um_2022_rouge_RVB.png" class="img-fluid w-50" alt="Logo UM">
                </div>
                <div class="col-4">
                    <img src="../assets/img/logo/Logo_polytech_montpellier.png" class="img-fluid w-50" alt="Logo Polytech">
                </div>
            </div>

            <p class="justified-text">
                Entre octobre 2024 et août 2025, j'étais chercheur contractuel (post-doctorant) à l’Université Jean Monnet, à Saint-Étienne, au sein de l’équipe SESAM du Laboratoire Hubert Curien. Ma recherche portait sur l’évaluation de la sécurité des implémentations de réseaux de neurones embarqués, avec comme objectif leur sécurisation contre les attaques par injection de fautes (laser). J'ai travaillé en utilisant des réseaux de neurones keras aléatoires ou entraînés (MNIST, ou IRIS). Durant ce postdoctorat, j'ai développé un outil permettant de simuler ces fautes dans le but d'obtenir un modèle équivalent.
            </p>
            <div class="row text-center mb-3">
                <div class="col-6 offset-3">
                    <div class="row">
                        <div class="col-6">
                            <img src="../assets/img/logo/labHC.png" class="img-fluid w-75" alt="Logo LABHC">
                        </div>
                        <div class="col-6">
                            <img src="../assets/img/logo/ujm.png" class="img-fluid w-50" alt="Logo UJM">
                        </div>
                    </div>
                </div>
            </div>

            <p class="justified-text">
                De 2021 à 2024, j’ai réalisé une thèse de doctorat en informatique à l’Université Bretagne Sud, au sein de l’équipe ARCAD du Laboratoire des Sciences et Techniques de l'Information, de la Communication et de la Connaissance (Lab-STICC), à Lorient. Mes travaux ont porté sur l’extension de la protection des processeurs contre les menaces physiques et logicielles, via la sécurisation du mécanisme DIFT (Dynamic Information Flow Tracking) face aux attaques par injections de fautes. J'ai soutenu cette thèse de Doctorat en décembre 2024, à Lorient.
            </p>
            <div class="row text-center mb-3">
                <div class="col-6 offset-3">
                    <div class="row">
                        <div class="col-6">
                            <img src="../assets/img/logo/labsticc.png" class="img-fluid w-50" alt="Logo LABSTICC">
                        </div>
                        <div class="col-6">
                            <img src="../assets/img/logo/ubs.png" class="img-fluid w-50" alt="Logo UBS">
                        </div>
                    </div>
                </div>
            </div>

            <p class="justified-text">
                Je suis également l'auteur et co-auteur de plusieurs articles de conférences publiés dans plusieurs conférences internationales.
            </p>
        </div>

        <div class="table-responsive-md">
            <iframe style="width: 100%; height: 350px; border: 1px solid black;" src="https://www.openstreetmap.org/export/embed.html?bbox=3.839383721351624%2C43.6363547309251%2C3.8418942689895634%2C43.6377834417394&amp;layer=mapnik&amp;marker=43.63706909057851%2C3.8406389951705933"></iframe>
            <br /><small><a href="https://www.openstreetmap.org/?mlat=43.637069&amp;mlon=3.840639#map=19/43.637069/3.840639" target="_blank">Afficher une carte plus grande</a></small>
        </div>
    </div>


    <?php
    $dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
    include "template/footer.php";
    ?>