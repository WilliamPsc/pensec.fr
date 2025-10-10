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
    <h2 class="text-center"><u>Associate Professor</u></h2>
    <div class="table-responsive-md">
        <h4 class="text-center">CNU (National Council of Universities) Section 61</h4>
        <br><br>
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td class="align-middle text-center">
                        <i class="fa-solid fa-phone me-1"></i> Contact:
                    </td>
                    <td class="align-middle text-center">+33 XXXXXXX (Pro)</td>
                    <td class="align-middle text-center">
                        <i class="fa-regular fa-envelope me-1"></i> Email:
                    </td>
                    <td class="align-middle text-center">
                        <script src="../assets/js/mail.js"></script>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center">
                        <i class="fa-brands fa-google-scholar me-1"></i> <a href="https://scholar.google.com/citations?user=AJE3er8AAAAJ" target="_blank">Google Scholar:</a>
                    </td>
                    <td class="align-middle text-center"><?php echo "$nb_citations citations / $nb_publications publications"; ?></td>
                    <td class="align-middle text-center">
                        <i class="bi bi-bank me-1"></i> Institution:
                    </td>
                    <td class="align-middle text-center">
                        <a href="https://www.lirmm.fr/equipes/adac" target="_blank">University of Montpellier - UMR CNRS 5506, LIRMM -<br> ADAC Team - Montpellier, France</a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-brands fa-github me-1"></i> GitHub: <a href="https://github.com/WilliamPsc/" target="_blank">WilliamPsc</a>
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
                        <i class="fa-solid fa-chart-line me-1"></i> H-Index: <?php echo "$hindex"; ?> / Index i10: <?php echo "$index10"; ?>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-solid fa-magnifying-glass me-1"></i> Research interests:
                    </td>
                    <td class="align-middle" colspan="2">
                        <ul>
                            <li>Hardware security for embedded systems / RISC-V processors.</li>
                            <li>Physical attacks (mainly fault injections).</li>
                            <li>Security of neural network implementations.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <h3 class="text-center">Biography</h3>
        <p class="justified-text">
            Since 1 September 2025, I am an Associate Professor at the University of Montpellier, attached to the Montpellier Laboratory of Computer Science, Robotics and Microelectronics (LIRMM), within the ADAC team. I teach at the Montpellier University Polytechnic School (Polytech Montpellier) in the Industrial Electronics and Computer Science (EII) department, for Microelectronics and automation (MEA) engineering students.
        </p>
        <div class="row text-center mb-3">
            <div class="col-4">
                <a href="https://www.lirmm.fr/equipes/adac/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/LogoLIRMMlong.png" class="img-fluid w-50" alt="Logo LIRMM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.umontpellier.fr/" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/logo_um_2022_rouge_RVB.png" class="img-fluid w-50" alt="Logo UM">
                </a>
            </div>
            <div class="col-4">
                <a href="https://www.polytech.umontpellier.fr/formation/cycle-ingenieur/microelectronique-et-automatique" target="_blank" rel="noopener noreferrer">
                    <img src="../assets/img/logo/Logo_polytech_montpellier.png" class="img-fluid w-50" alt="Logo Polytech">
                </a>
            </div>
        </div>

        <p class="justified-text">
            Between October 2024 and August 2025, I was a post-doctoral researcher at Jean Monnet University in Saint-Étienne, working with the SESAM team, at the Hubert Curien Laboratory. My research focused on evaluating the security of embedded neural network implementations, with the aim of securing them against fault injection attacks (laser). I worked using random or trained Keras neural networks (MNIST or IRIS). During this postdoctoral fellowship, I developed a tool to simulate these faults in order to obtain an equivalent model.
        </p>
        <div class="row text-center mb-3">
            <div class="col-6 offset-3">
                <div class="row">
                    <div class="col-6">
                        <a href="https://laboratoirehubertcurien.univ-st-etienne.fr/en/teams/secure-embedded-systems-hardware-architectures.html" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/logo/labHC.png" class="img-fluid w-75" alt="Logo LABHC">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.univ-st-etienne.fr/fr/index.html/" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/logo/ujm.png" class="img-fluid w-50" alt="Logo UJM">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <p class="justified-text">
            From 2021 to 2024, I completed a PhD thesis in computer science at the University of South Brittany, within the ARCAD team of the Laboratory of Information, Communication and Knowledge Sciences and Techniques (Lab-STICC) in Lorient. My work focused on extending processor protection against physical and software threats by securing a DIFT (Dynamic Information Flow Tracking) mechanism against fault injection attacks. I defended my doctoral thesis in December 2024 in Lorient.
        </p>
        <div class="row text-center mb-3">
            <div class="col-6 offset-3">
                <div class="row">
                    <div class="col-6">
                        <a href="https://labsticc.fr/fr/equipes/arcad" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/logo/labsticc.png" class="img-fluid w-50" alt="Logo LABSTICC">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.univ-ubs.fr/fr/" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/img/logo/ubs.png" class="img-fluid w-50" alt="Logo UBS">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <p class="justified-text">
            I am also the author or co-author of several conference papers published in several international conferences.
        </p>
    </div>

    <div class="table-responsive-md">
        <iframe style="width: 100%; height: 350px; border: 1px solid black;" src="https://www.openstreetmap.org/export/embed.html?bbox=3.838584423065186%2C43.636608987796755%2C3.8430637121200566%2C43.63827063033982&amp;layer=mapnik&amp;marker=43.63743981481206%2C3.840824067592621"></iframe>
        <br /><small><a href="https://www.openstreetmap.org/?mlat=43.637440&amp;mlon=3.840824#map=19/43.637440/3.840824" target="_blank">Display a larger map</a></small>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>