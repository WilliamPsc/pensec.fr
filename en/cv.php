<?php
/* PARTIE BASIQUE */
// $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// if ($langue == "fr") {
//     header("Location : https://www.pensec.fr/fr/cv.php");
// } elseif ($langue == "it") {
//     header("Location : https://www.pensec.fr/it/cv.php");
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

<style>
    .btn-linkedin {
        background: #0E76A8;
        border-radius: 0;
        color: #fff;
        border-width: 1px;
        border-style: solid;
        border-color: #084461;
    }

    .btn-linkedin:link,
    .btn-linkedin:visited {
        color: #fff;
    }

    .btn-linkedin:active,
    .btn-linkedin:hover {
        background: #084461;
        color: #fff;
    }
</style>

<br /><br />
<div class="container">
    <h2>Curriculum Vitae</h2>
    <div class="table-responsive-md">
        <!-- <h4>Recherche de Thèse en Informatique Embarqué</h4> -->
        <center>
            <p>
                Download PDF version :
                <a href="../fileData/WilliamPENSEC_CV_en.pdf" target="_blank" rel="noopener noreferrer"><img loading="lazy" class="alignnone size-full wp-image-98" src="../fileData/PDF_32.png" alt="" width="32" height="32" /></a>
            </p>
            </p>
        </center>
        <hr />
        <p>
            PENSEC William <br /><br />
            <?php echo $age ?> ans <br /><br />
            Driving licence - Vehicle <br /><br />
            France - Lorient (56100) - Université de Bretagne Sud <br /><br />
        </p>
        <p>
            <hr />
            <center>
                EDUCATION
            </center>
            <hr />

        <ul>
            <li><strong>2021 - </strong></li>
        </ul>
        PhD Thesis in Computer Science : Protection of a processor with DIFT against physical attacks - Université Bretagne Sud - Lorient
        <br /><br />
        <ul>
            <li><strong>2019 - 2021</strong></li>
        </ul>
        Master in Computer Science, specialization in Software for Embedded Systems (LSE) - Université de Bretagne Occidentale - Brest
        <br /><br />
        <ul>
            <li><strong>2015 - 2019</strong></li>
        </ul>
        Bachelor's degree in Computer Science (Computer Science: Foundations and Applications) - Université de Bretagne Occidentale - Brest
        <br /><br />
        <ul>
            <li><strong>2014 - 2015</strong></li>
        </ul>
        First Year Common to Health Studies (Première Années Communes aux Études de Santé - PACES) - Université de Bretagne Occidentale - Brest
        <br /><br />
        <ul>
            <li><strong>2014</strong></li>
        </ul>
        Obtaining the Baccalaureate, S-SVT series, ISN option (Informatique et Sciences du Numérique / Computer Science and Digital Sciences) - Lycée de Cornouaille - Quimper

        </p>
        <p>
            <hr />
            <center>
                SKILLS
            </center>
            <hr />

        <ul>
            <li><strong>Computer Science :</strong></li>
            <ul>
                <li>Programming language : C, C++, Java, JavaScript, Android, Bash, AADL, VHDL, Python, Visual Basic, Ada </li>
                <li>Project management : GitHub</li>
                <li>Web : HTML, CSS, PHP, BootStrap, WordPress</li>
                <li>Data : MySQL, JSON, XML</li>
                <li>Operating Systems : Windows, Linux</li>
                <li>Microcontroller : Arduino, Raspberry Pi</li>
            </ul>

            <li><strong>Languages :</strong></li>
            <ul>
                <li>French : Native speaker</li>
                <li>English : B1/B2 </li>
                <li>Italian : A2/B1</li>
                <li>Spanish : A2</li>
            </ul>
        </ul>
        </p>
        <p>
            <hr />
            <center>
                PROJECTS
            </center>
            <hr />
        <p>
            <center>See the <a href="projets.php">projects</a> page for more information and links to the projects in aforementioned</center>
        </p>
        <ul>
            <li><strong>Academics</strong></li>
            <ul>
                <li><strong>2020 - 2021 (Master 2) :</strong></li>
                <ul>
                    <li>
                        Creation of a 3D drone simulator from the INET library of OMNeT++ - C++.
                    </li>
                    <li>
                        Android/IoT application : Connected Matrix - Android, Java, NodeJS, Raspberry Pi
                    </li>
                    <li>
                        Optimization of parallel algorithms - C, OpenMP - Compilation Parallelism
                    </li>
                    <li>
                        Runtime detection - VHDL, FPGA, Vivado HLS - System-On-Chip
                    </li>
                    <li>
                        Accelerators on ZedBoard - C++, VHDL, Vivado HLS, FPGA - Co-Design Synthesis
                    </li>
                    <li>
                        Modeling and prototyping with AADL Inspector/Ocarina of an Embedded System - AADL, AADLInspector, Ocarina
                    </li>
                </ul>

                <li><strong>2019 - 2020 (Master 1) :</strong></li>
                <ul>
                    <li>
                        Realization of an integer/chain calculator - JCup, JFlex - Compilation
                    </li>
                    <li>
                        Analysis of a home automation scenario management language (DOMUS) and code production for the SiDo code simulator - JCup, JFlex - Compilation
                    </li>
                    <li>
                        Simulation of an epidemic - OpenCL, MatrixStudio - Massively Parallel Programming (GPU)
                    </li>
                    <li>
                        Websocket robot control - HTML, NodeJS, CSS, BootStrap - Mobile Robotics
                    </li>
                    <li>
                        Implementation of a scheduling simulator - Ada - Real Time System
                    </li>
                </ul>

                <li><strong>2017 - 2019 (Licence 3) :</strong></li>
                <ul>
                    <li>Creating a spreadsheet software - C</li>
                    <li>Creation of a text comparison software - C</li>
                    <li>Robotic projects - Arduino, Scratch</li>
                </ul>
            </ul>
        </ul>

        <ul>
            <li><strong>Personal</strong></li>
            <ul>
                <li>
                    Creation of an Android application for fuel consumption management - Android, MySQL, PHP, BootStrap - 2021
                </li>
                <li>
                    Creation of a website to manage the organization of personal festive events - PHP, JavaScript, MySQL, HTML - 2019/2021
                </li>
                <li>
                    Creation of a website - HTML, CSS, JavaScript - 2016
                </li>
            </ul>
        </ul>
        </p>
        <p>
            <hr />
            <center>
                PROFESSIONAL EXPERIENCE
            </center>
            <hr />

        <ul>
            <li><strong>2021 - UBO (Lab-STICC)</strong></li>
            <ul>
                <li>Cooperation of drones in a heterogeneous system - Intern - Java, C++, ModBus, Raspberry Pi - April 2021 to August 2021</li>
            </ul>

            <li><strong>2020 - UBO (Lab-STICC)</strong></li>
            <ul>
                <li>Simulation of a drone with GPS sensors and accelerometer in C++ - Intern - C++, Java, CARES Framework - May 2020 to June 2020</li>
            </ul>

            <li><strong>2019 - UBO (Lab-STICC)</strong></li>
            <ul>
                <li>Classification of I/O requests for file access optimization on an embedded system - Intern - R, Linux, Bash - June 2019 to July 2019</li>
            </ul>

            <li><strong>2019 - UBO OpenFactory</strong></li>
            <ul>
                <li>Modeling the position of the Brest streetcar in real time - Intern - Arduino, C, Raspberry Pi, Python, JSON, PHP, HTML, Linux - April 2019 to June 2019</li>
            </ul>

            <li><strong>2018 - UBO OpenFactory</strong></li>
            <ul>
                <li>Connected Weather Station - Intern - Arduino, WiFi, Server - May 2018 to July 2018</li>
            </ul>
        </ul>
        </p>
        <p>
            <hr />
            <center>
                POINTS OF INTEREST
            </center>
            <hr />
        <ul>
            <li><strong>Sports : </strong> Swimming (club and leisure), cycling, water sports (kayak, boat, scuba diving)</li>
            <li><strong>Hobbies : </strong> Travel (France, Italy, Spain), Video games, Movies and series, Reading, Music</li>
        </ul>
        </p>
        <p>
            <hr />
            <center>
                CONTACT
            </center>
            <hr />

            <center>
                <div class="fs-4 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    Contact : +33 06.51.36.06.63
                </div>
                <div class="fs-4 mb-3">
                    <script src="js/script.js"></script>
                </div>
                <div class="fs-4 mb-3">
                    <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                        William PENSEC
                    </a>
                </div>
            </center>
        </p>
    </div>
</div>

<?php
include "template/footer.php";
?>