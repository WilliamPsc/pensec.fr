<?php
/* PARTIE BASIQUE */
// $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// if ($langue == "it") {
//     header("Location : https://www.pensec.fr/it/cv.php");
// } elseif ($langue != "fr") {
//     header("Location : https://www.pensec.fr/en/cv.php");
// }

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
    <h2>Curriculum Vitae</h2>
    <div class="table-responsive-md">
        <div class="text-center">
            <p>
                Version PDF :
                <a href="../assets/WilliamPENSEC_CV_fr.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
            </p>
            <p>
                Version anglaise PDF :
                <a href="../assets/WilliamPENSEC_CV_en.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
            </p>
        </div>
        <hr>
        <div class="text-justify">
            PENSEC William <br><br>
            <?php echo $age ?> ans <br><br>
            Permis B - Véhiculé <br><br>
            Saint-Étienne (42000) - Laboratoire Hubert Curien - Université Jean Monnet<br><br>
        </div>
        <hr>
        <div class="text-center">
            <h4>CURSUS UNIVERSITAIRE</h4>
        </div>
        <hr>
        <div class="text-justify">
            <ul>
                <li><strong>10/2024 - </strong></li>
            </ul>
            Postdoctorat en Informatique : Évaluation de la sécurité des implémentations FPGA de réseaux neuronaux - Université Jean Monnet, UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) - Équipe SESAM - Saint-Étienne
            <br><br>
            <ul>
                <li>
                    <strong>10/2021 - 09/2024 / <a href="defense.php" target="_blank" alt="Avis de soutenance" style="text-decoration: none;">Soutenance</a> : 19 décembre 2024</strong>
                    <a href="../assets/these/TRUSTIFT_Manuscrit_William.pdf" target="_blank" alt="Manuscrit PDF" style="text-decoration: none;">
                        <i class="fas fa-file-pdf" style="margin-left: 10px; color: #d9534f"></i>
                    </a>
                    <a href="../assets/these/slidesThese_TrustIFT_William_PENSEC.pdf" target="_blank" alt="Diapositives de la soutenance" style="text-decoration: none;">
                        <i class="fas fa-file-powerpoint" style="margin-left: 10px; color: #f77b00;"></i>
                    </a>
                    <a href="https://www.youtube.com/@allskillnoluck7734" target="_blank" alt="Vidéo YouTube de la soutenance" style="text-decoration: none;">
                        <i class="fab fa-youtube" style="margin-left: 10px; color: red;"></i>
                    </a>
                </li>
            </ul>
            Thèse de Doctorat en Informatique : Extension de la Protection des Processeurs Contre les Menaces Physiques et Logicielles par la Sécurisation du Mécanisme DIFT Contre les Attaques par Injections de Fautes - Université Bretagne Sud, UMR CNRS 6285, Lab-STICC - Lorient - Label Européen
            <br><br>
            <ul>
                <li><strong>2019 - 2021</strong></li>
            </ul>
            Master Informatique, spécialité Logiciels pour les Systèmes Embarqués (LSE) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2015 - 2019</strong></li>
            </ul>
            Licence Informatique (Informatique : Fondements et Applications) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2014 - 2015</strong></li>
            </ul>
            Première Année Commune aux Études de Santé (PACES) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2014</strong></li>
            </ul>
            Obtention du Baccalauréat, série S-SVT, option ISN (Informatique et Sciences du Numérique) - Lycée de Cornouaille - Quimper
        </div>
        <hr>
        <div class="text-center">
            <h4>COMPÉTENCES</h4>
        </div>
        <hr>
        <div class="text-justify">
            <ul>
                <li><strong>Encadrement :</strong>
                    <ul>
                        <li>2022 : Co-Encadrement d'un étudiant de M2 en projet sur : Implémentation d’un processeur RISC-V sur une cible FPGA</li>
                        <li>2022 : Co-Encadrement d'un stagiaire de M1 sur : Attaque physique sur cible FPGA</li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li><strong>Informatique :</strong>
                    <ul>
                        <li>Programmation logicielle : C, C++, Java, JavaScript, Android, Python, Bash, TCL, AADL, Ada, Visual Basic</li>
                        <li>Programmation matérielle : VHDL, System Verilog, FPGA, Suite Vivado HLS, Assembleur, RISC-V, LiteX</li>
                        <li>Gestion de projets : GitHub</li>
                        <li>Web : HTML, CSS, php, BootStrap, WordPress</li>
                        <li>Gestion des données : MySQL, JSON, YAML, XML</li>
                        <li>Systèmes d'exploitation : Linux, Windows</li>
                        <li>Micro-contrôleur : Arduino, Raspberry Pi, FPGA Basic 3, ChipWhisperer</li>
                    </ul>
                </li>
                <li><strong>Langues :</strong>
                    <ul>
                        <li>Français : langue maternelle</li>
                        <li>Anglais : B1/B2 </li>
                        <li>Italien : A2+</li>
                        <li>Espagnol : A2</li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div class="text-center">
            <h4>PROJETS</h4>
        </div>
        <hr>
        <div class="text-center">
            <p>Voir la page <a href="projets.php">projets</a> pour davantage d'informations et les liens vers les projets en questions</p>
        </div>
        <div class="text-justify">
            <ul>
                <li><strong>Universitaires</strong>
                    <ul>
                        <li><strong>2020 - 2021 (Master 2) :</strong>
                            <ul>
                                <li>
                                    Création d'un simulateur de drone en 3D à partir de la librairie INET de OMNeT++ - C++
                                </li>
                                <li>
                                    Application Android/IoT : Matrice connectée - Android, Java, NodeJS, Raspberry Pi
                                </li>
                                <li>
                                    Optimisation d'algorithmes parallèles - C, OpenMP - Compilation Parallélisme
                                </li>
                                <li>
                                    Détection de dépassement de temps d'exécution - VHDL, FPGA, Vivado HLS - System-On-Chip
                                </li>
                                <li>
                                    Accélérateurs sur ZedBoard - VHDL, C++, Vivado HLS, FPGA - Synthèse Co-Design
                                </li>
                                <li>
                                    Modélisation et prototypage avec AADLInspector/Ocarina d'un Système Embarqué - AADL, AADLInspector, Ocarina
                                </li>
                            </ul>
                        </li>

                        <li><strong>2019 - 2020 (Master 1) :</strong>
                            <ul>
                                <li>
                                    Réalisation d'un calculateur entiers/chaines - JCup, JFlex - Compilation
                                </li>
                                <li>
                                    Analyse d'un langage de gestion de scenarii domotiques (DOMUS) et production de code pour le simulateur de code SiDo - JCup, JFlex - Compilation
                                </li>
                                <li>
                                    Simulation d'une épidémie - OpenCL, MatrixStudio - Programmation Massivement Parallèle (GPU)
                                </li>
                                <li>
                                    Commande d'un robot par Websocket - HTML, NodeJS, CSS, BootStrap - Robotique Mobile
                                </li>
                                <li>
                                    Mise en place d'un simulateur d'ordonnancement - Ada - Système Temps Réel
                                </li>
                            </ul>
                        </li>

                        <li><strong>2017 - 2019 (Licence 3) :</strong>
                            <ul>
                                <li>Création d'un tableur - C</li>
                                <li>Création d'un logiciel de comparaison de texte - C</li>
                                <li>Projets robotiques - Arduino, Scratch</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><strong>Personnels</strong>
                    <ul>
                        <li>
                            Création d'un site web de gestion de l'organisation d'évènements festifs personnels - PHP, JavaScript, MySQL, HTML - 2019/2021
                        </li>
                        <li>
                            Création d'un site web - HTML, CSS, JavaScript - 2016
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div class="text-center">
            <h4>EXPÉRIENCES PROFESSIONNELLES</h4>
        </div>
        <hr>
        <div class="text-justify">
            <ul>
                <li><strong>2023 - USI (Suisse, Lugano)</strong>
                    <ul>
                        <li>Mobilité internationale dans le cadre de mon Doctorat - Doctorant invité - SystemVerilog, Python - Mai 2023 à Septembre 2023</li>
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
        <div class="text-center">
            <h4>CENTRES D'INTÉRÊT</h4>
        </div>
        <hr>
        <div class="text-justify">
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
        <!-- <div class="fs-4 mb-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
            Contact : +33 06.51.36.06.63
        </div> -->
        <div class="fs-4 mb-3 text-center">
            <script src="../js/script.js"></script>
        </div>
        <div class="fs-4 mb-3 text-center">
            <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
                William PENSEC
            </a>
        </div>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>