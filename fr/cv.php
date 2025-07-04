<?php
include "template/header.php";
include "template/menu.php";

$firstDate  = new DateTime("1996-10-26");
$secDate = new DateTime();
$secondDate = $secDate->format("YYYY-m-d");
$secondDate = $secDate->setTimezone(new DateTimeZone('Europe/Paris'));
$intvl = $firstDate->diff($secondDate);
$age = $intvl->y;
?>

<br><br>
<div class="container">
    <h2 class="text-center">Curriculum Vitae</h2>
    <div class="table-responsive-md">
        <div class="text-center">
            <p>
                Version française :
                <a href="../assets/WilliamPENSEC_CV_fr.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
            </p>
            <p>
                Version anglaise :
                <a href="../assets/WilliamPENSEC_CV_en.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
            </p>
        </div>
        <hr>
        <div class="justified-text">
            PENSEC William <br><br>
            <?php echo $age ?> ans <br><br>
            Saint-Étienne (42000) - Laboratoire Hubert Curien - Université Jean Monnet<br><br>
        </div>
        <hr>
        <div class="text-center">
            <h4>CURSUS UNIVERSITAIRE</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li>
                    <strong>09/2025 - </strong>
                    <a href="../assets/pdf/divers/candidature_61_Montpellier.pdf" target="_blank" style="text-decoration: none;">
                        <i class="fas fa-file-pdf" style="margin-left: 10px; color: #d9534f"></i>
                    </a>
                    <a href="../assets/pdf/divers/audition_61_Montpellier.pdf" target="_blank" style="text-decoration: none;">
                        <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
                    </a>
                </li>
            </ul>
            Maître de Conférences : Section 61 - Université de Montpellier rattaché à Polytech Montpellier - UMR CNRS 5506 - Laboratoire d'Informatique, de Robotique et de Micro-électronique de Montpellier (LIRMM) - Équipe ADAC - Montpellier.
            <br><br>
            <ul>
                <li><strong>10/2024 - 08/2025</strong></li>
            </ul>
            Postdoctorat en Informatique : Évaluation de la sécurité des implémentations FPGA de réseaux neuronaux - Université Jean Monnet, UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) - Équipe SESAM - Saint-Étienne.
            <br><br>
            <ul>
                <li>
                    <strong>10/2021 - 09/2024 / <a href="defense" target="_blank" style="text-decoration: none;">Soutenance</a> : 19 décembre 2024</strong>
                    <a href="../assets/these/TRUSTIFT_Manuscrit_William.pdf" target="_blank" style="text-decoration: none;">
                        <i class="fas fa-file-pdf" style="margin-left: 10px; color: #d9534f"></i>
                    </a>
                    <a href="../assets/these/slidesThese_TrustIFT_William_PENSEC.pdf" target="_blank" style="text-decoration: none;">
                        <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=Qs29I_-iC1s" target="_blank" style="text-decoration: none;">
                        <i class="fab fa-youtube" style="margin-left: 10px; color: red;"></i>
                    </a>
                </li>
            </ul>
            Thèse de Doctorat en Informatique : Extension de la Protection des Processeurs Contre les Menaces Physiques et Logicielles par la Sécurisation du Mécanisme DIFT Contre les Attaques par Injections de Fautes - Université Bretagne Sud, UMR CNRS 6285, Lab-STICC - Lorient - Label Européen - <a href="https://hal.science/tel-04862037/" target="_blank">https://hal.science/tel-04862037/</a>.
            <br><br>
            <ul>
                <li><strong>2019 - 2021</strong></li>
            </ul>
            Master Informatique, spécialité Logiciels pour les Systèmes Embarqués (LSE) - Université de Bretagne Occidentale - Brest.
            <br><br>
            <ul>
                <li><strong>2015 - 2019</strong></li>
            </ul>
            Licence Informatique (Informatique : Fondements et Applications) - Université de Bretagne Occidentale - Brest.
            <br><br>
            <ul>
                <li><strong>2014 - 2015</strong></li>
            </ul>
            Première Année Commune aux Études de Santé (PACES) - Université de Bretagne Occidentale - Brest.
            <br><br>
            <ul>
                <li><strong>2014</strong></li>
            </ul>
            Obtention du Baccalauréat, série S-SVT, option ISN (Informatique et Sciences du Numérique) - Lycée de Cornouaille - Quimper.
        </div>
        <hr>
        <div class="text-center">
            <h4>COMPÉTENCES</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li>
                    <strong>Encadrement :</strong>
                    <ul>
                        <li>2022 : Co-Encadrement d'un étudiant de M2 en projet sur : Implémentation d’un processeur RISC-V sur une cible FPGA</li>
                        <li>2022 : Co-Encadrement d'un stagiaire de M1 sur : Attaque physique sur cible FPGA</li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <strong>Informatique :</strong>
                    <ul>
                        <li>Programmation logicielle : C, C++, Java, JavaScript, Android, Python, Bash, TCL, AADL, Ada, Visual Basic</li>
                        <li>Programmation matérielle : VHDL, System Verilog, FPGA, Suite Vivado HLS, Assembleur, RISC-V, LiteX</li>
                        <li>Gestion de projets : GitHub</li>
                        <li>Web : HTML, CSS, php, BootStrap, WordPress</li>
                        <li>Gestion des données : MySQL, JSON, YAML, XML</li>
                        <li>Systèmes d'exploitation : Linux, Windows</li>
                        <li>Micro-contrôleur : Arduino, Raspberry Pi, Zedboard Zynq-7000, Basic 3, ChipWhisperer, STM32</li>
                    </ul>
                </li>
                <li>
                    <strong>Langues :</strong>
                    <ul>
                        <li>Français : langue maternelle</li>
                        <li>Anglais : B2 </li>
                        <li>Italien : A2+</li>
                        <li>Espagnol : Bac / A2</li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- <hr>
        <div class="text-center">
            <h4>PROJETS</h4>
        </div>
        <hr>
        <div class="justified-text">
            
        </div> -->
        <hr>
        <div class="text-center">
            <h4>EXPÉRIENCES PROFESSIONNELLES</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li><strong>2023 - Università della Svizzera italiana (Suisse, Lugano)</strong>
                    <ul>
                        <li>
                            Mobilité internationale dans le cadre de mon Doctorat - Doctorant invité - SystemVerilog, Python - Mai 2023 à Septembre 2023
                        </li>
                    </ul>
                </li>
                <li><strong>2021 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Coopération de drones dans un système hétérogène - Stagiaire - Java, C++, ModBus, Raspberry Pi - Avril 2021 à Août 2021 </li>
                    </ul>
                </li>

                <li><strong>2020 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Simulation d'un drone avec capteurs GPS et Accéléromètre en C++ - Stagiaire - C++, Java, Framework CARES - Mai 2020 à Juin 2020 </li>
                    </ul>
                </li>

                <li><strong>2019 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Classification des requêtes d'Entrées/Sorties pour l'optimisation de l'accès aux fichiers sur un système embarqué - Stagiaire - R, Linux, Bash - Juin 2019 à Juillet 2019 </li>
                    </ul>
                </li>

                <li><strong>2019 - UBO OpenFactory</strong>
                    <ul>
                        <li>Modélisation de la position du tram de Brest en temps réel - Stagiaire - Arduino, C, Raspberry Pi, Python, JSON, PHP, HTML, Linux - Avril 2019 à Juin 2019 </li>
                    </ul>
                </li>

                <li><strong>2018 - UBO OpenFactory</strong>
                    <ul>
                        <li>Station Météo Connectée - Stagiaire - Arduino, WiFi, Serveur - Mai 2018 à Juillet 2018</li>
                    </ul>
                </li>
            </ul>
        </div>

        <hr>
        <div class="container">
            <h4 class="text-center text-uppercase"><i class="fas fa-vote-yea"></i> Représentant universitaire :</h4>
            <div class="table-responsive-md">
                <hr>
                <?php
                // Read JSON file
                $json = file_get_contents("../assets/json/delegue.json");

                // Decode JSON
                $json_data = json_decode($json, true);

                // Function to format date
                function formatDate($dateString)
                {
                    $date = DateTime::createFromFormat('Y-m', $dateString);
                    return $date->format('F Y');
                }

                // Display content
                echo "<div class=\"justified-text\">\n";
                echo "\t\t\t<table class=\"table table-striped table-hover bordered-table text-center\">\n";
                echo "\t\t\t\t<thead>\n";
                echo "\t\t\t\t\t<tr>\n";
                echo "\t\t\t\t\t\t<th>Début</th>\n";
                echo "\t\t\t\t\t\t<th>Élections</th>\n";
                echo "\t\t\t\t\t\t<th>Période</th>\n";
                echo "\t\t\t\t\t</tr>\n";
                echo "\t\t\t\t</thead>\n";
                echo "\t\t\t\t<tbody>\n";

                foreach ($json_data as $key => $value) {
                    foreach ($value as $keyArray => $valuesArray) {
                        // Format dates
                        $formattedStartDate = formatDate($valuesArray['dateStart']);
                        $formattedEndDate = $valuesArray['dateEnd'] == "" ? "" : formatDate($valuesArray['dateEnd']);

                        // Translate months to French
                        $formattedStartDateFrench = str_replace(
                            ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                            $formattedStartDate
                        );

                        $formattedEndDateFrench = str_replace(
                            ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                            ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                            $formattedEndDate
                        );

                        // Display table row
                        echo "\t\t\t\t\t<tr>\n";
                        echo "\t\t\t\t\t\t<td><strong>$key</strong></td>\n";
                        echo "\t\t\t\t\t\t<td>" . $valuesArray['nameFR'] . "</td>\n";
                        echo "\t\t\t\t\t\t<td>$formattedStartDateFrench - $formattedEndDateFrench</td>\n";
                        echo "\t\t\t\t\t</tr>\n";
                    }
                }

                echo "\t\t\t\t</tbody>\n";
                echo "\t\t\t</table>\n";
                echo "\t\t</div>\n";
                ?>
                <br><br>
            </div>
        </div>

        <hr>
        <div class="text-center">
            <h4>CENTRES D'INTÉRÊT</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li><strong>Sport : </strong> Natation (club et loisir), vélo, sports nautiques (kayak, bateau, plongée bouteille)</li>
                <li><strong>Hobbies : </strong> Voyages (France, Italie, Espagne), Jeux vidéos, Films et séries, Lecture, Musique</li>
            </ul>
        </div>
        <hr>
        <div class="text-center">
            <h4>CONTACT</h4>
        </div>
        <hr>
        <div class="fs-4 mb-3 text-center">
            <script src="../js/script.js"></script>
        </div>
        <div class="fs-4 mb-3 text-center">
            <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
                Dr. William PENSEC
            </a>
        </div>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>