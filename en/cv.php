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
        <div class="row text-center mb-3">
            <div class="col-6">
                <p>
                    French version:
                    <a href="../assets/WilliamPENSEC_CV_fr.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
                </p>
            </div>
            <div class="col-6">
                <p>
                    English version:
                    <a href="../assets/WilliamPENSEC_CV_en.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="img-fluid mx-auto" src="../assets/img/icons/PDF_32.png" alt="pdf logo" width="32" height="32"></a>
                </p>
            </div>
        </div>
        <hr>
        <div class="row text-center mb-3">
            <div class="col-6">
                PENSEC William
            </div>
            <div class="col-6">
                <?php echo $age ?> years old <br><br>
            </div>
        </div>
        <div class="text-center">
            Montpellier (France) - Montpellier Laboratory of Computer Science, Robotics and Microelectronics (LIRMM) - University of Montpellier<br><br>
        </div>

        <div class="row text-center mb-3">
            <div class="col-4">
                <a href="https://www.lirmm.fr/equipes/adac/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/LogoLIRMMlong.png" class="img-fluid w-25" alt="Logo LIRMM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.umontpellier.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/logo_um_2022_rouge_RVB.png" class="img-fluid w-25" alt="Logo UM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.polytech.umontpellier.fr/formation/cycle-ingenieur/microelectronique-et-automatique" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/Logo_polytech_montpellier.png" class="img-fluid w-25" alt="Logo Polytech">
                </a>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h4 class="text-uppercase">University Curriculum</h4>
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
            Associate Professor: University section 61 - University of Montpellier associated to Montpellier University Polytechnic School (Polytech Montpellier) - UMR CNRS 5506 - Laboratory of Computer Sciences, Robotics and Microelectronics of Montpellier (LIRMM) - ADAC Team - Montpellier, France.
            <br><br>
            <ul>
                <li><strong>10/2024 - 08/2025</strong></li>
            </ul>
            Postdoctorate in Computer Science: Security Evaluation of Neural Network FPGA implementations - University Jean Monnet, UMR CNRS 5516, Laboratory Hubert Curien - SESAM Team - Saint-Étienne (France)
            <br><br>
            <ul>
                <li>
                    <strong>10/2021 - 09/2024 / <a href="defense" target="_blank" style="text-decoration: none;">PhD Defense</a> : December 19, 2024</strong>
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
            PhD Thesis in Computer Science: Enhanced Processor Defence Against Physical and Software Threats by Securing DIFT Against Fault Injection Attacks - Université Bretagne Sud, UMR CNRS 6285, Lab-STICC - Lorient - European Label - <a href="https://hal.science/tel-04862037/" target="_blank">https://hal.science/tel-04862037/</a>.
            <br><br>
            <ul>
                <li><strong>2019 - 2021</strong></li>
            </ul>
            Master in Computer Science, specialization in Software for Embedded Systems (LSE) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2015 - 2019</strong></li>
            </ul>
            Bachelor's degree in Computer Science (Computer Science: Foundations and Applications) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2014 - 2015</strong></li>
            </ul>
            First Year Common to Medical Studies (Première Année Commune aux Études de Santé - PACES) - Université de Bretagne Occidentale - Brest
            <br><br>
            <ul>
                <li><strong>2014</strong></li>
            </ul>
            Obtaining the Baccalaureate, S-SVT series, ISN option (Informatique et Sciences du Numérique / Computer Science and Digital Sciences) - Lycée de Cornouaille - Quimper
        </div>
        <hr>
        <div class="text-center">
            <h4>SKILLS</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li>
                    <strong>Supervision:</strong>
                    <ul>
                        <li>2022 : Co-supervision of a M2 student working on : Implementation of a RISC-V processor on an FPGA target</li>
                        <li>2022 : Co-supervision of an M1 internship on : Physical attack on FPGA target</li>
                    </ul>
                </li>
            </ul>

            <ul>
                <li>
                    <strong>Computer Science:</strong>
                    <ul>
                        <li>Programming language: C, C++, Java, JavaScript, Android, Python, Bash, TCL, AADL, Ada, Visual Basic</li>
                        <li>Hardware development: VHDL, System Verilog, FPGA, Vivado HLS, Assembly, RISC-V, LiteX</li>
                        <li>Project management: GitHub</li>
                        <li>Web: HTML, CSS, PHP, BootStrap, WordPress</li>
                        <li>Data management: MySQL, JSON, YAML, XML</li>
                        <li>Operating Systems: Linux, Windows</li>
                        <li>Microcontroller: Arduino, Raspberry Pi, Zedboard Zynq-7000, Basic 3, ChipWhisperer, STM32</li>
                    </ul>
                </li>
                <li>
                    <strong>Languages:</strong>
                    <ul>
                        <li>French: Native speaker</li>
                        <li>English: B2 </li>
                        <li>Italian: A2+</li>
                        <li>Spanish: High School</li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div class="text-center">
            <h4>PROFESSIONAL EXPERIENCE</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li><strong>2023 - Università della Svizzera italiana (Switzerland, Lugano)</strong>
                    <ul>
                        <li>
                            International mobility as part of my PhD - Visiting PhD student - SystemVerilog, Python - May 2023 to September 2023
                        </li>
                    </ul>
                </li>
                <li><strong>2021 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Cooperation of drones in a heterogeneous system - Intern - Java, C++, ModBus, Raspberry Pi - April 2021 to August 2021</li>
                    </ul>
                </li>
                <li><strong>2020 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Simulation of a drone with GPS sensors and accelerometer in C++ - Intern - C++, Java, CARES Framework - May 2020 to June 2020</li>
                    </ul>
                </li>

                <li><strong>2019 - UBO (Lab-STICC)</strong>
                    <ul>
                        <li>Classification of I/O requests for file access optimization on an embedded system - Intern - R, Linux, Bash - June 2019 to July 2019</li>
                    </ul>
                </li>
                <li><strong>2019 - UBO OpenFactory</strong>
                    <ul>
                        <li>Modeling the position of the Brest streetcar in real time - Intern - Arduino, C, Raspberry Pi, Python, JSON, PHP, HTML, Linux - April 2019 to June 2019</li>
                    </ul>
                </li>
                <li><strong>2018 - UBO OpenFactory</strong>
                    <ul>
                        <li>Connected Weather Station - Intern - Arduino, WiFi, Server - May 2018 to July 2018</li>
                    </ul>
                </li>
            </ul>
        </div>
        <hr>
        <div class="container">
            <h4 class="text-center text-uppercase"><i class="fas fa-vote-yea"></i> University delegate:</h4>
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
                echo "\t\t\t\t\t\t<th>Start</th>\n";
                echo "\t\t\t\t\t\t<th>Elections</th>\n";
                echo "\t\t\t\t\t\t<th>Period</th>\n";
                echo "\t\t\t\t\t</tr>\n";
                echo "\t\t\t\t</thead>\n";
                echo "\t\t\t\t<tbody>\n";

                foreach ($json_data as $key => $value) {
                    foreach ($value as $keyArray => $valuesArray) {
                        // Format dates
                        $formattedStartDate = formatDate($valuesArray['dateStart']);
                        $formattedEndDate = $valuesArray['dateEnd'] == "" ? "" : formatDate($valuesArray['dateEnd']);

                        // Display table row
                        echo "\t\t\t\t\t<tr>\n";
                        echo "\t\t\t\t\t\t<td><strong>$key</strong></td>\n";
                        echo "\t\t\t\t\t\t<td>" . $valuesArray['nameEN'] . "</td>\n";
                        echo "\t\t\t\t\t\t<td>$formattedStartDate - $formattedEndDate</td>\n";
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
            <h4>HOBBIES</h4>
        </div>
        <hr>
        <div class="justified-text">
            <ul>
                <li><strong>Sports: </strong> Swimming (club and leisure), cycling, water sports (kayak, boat, scuba diving)</li>
                <li><strong>Hobbies: </strong> Travel (France, Italy, Spain), Video games, Movies and series, Reading, Music</li>
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
                Dr William PENSEC
            </a>
        </div>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>