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
    <h2 class="text-center"><u>Postdoctorate researcher</u></h2>
    <div class="table-responsive-md">
        <h4 class="text-center">Security assessment on FPGA implementation of neural networks on RISC-V architecture</h4>
        <br><br>
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td class="align-middle text-center">
                        <i class="fa-solid fa-phone"></i> Contact :
                    </td>
                    <td class="align-middle text-center">+33 04.77.91.57.59 (Pro)</td>
                    <td class="align-middle text-center">
                        <i class="fa-regular fa-envelope"></i> Email :
                    </td>
                    <td class="align-middle text-center">
                        <script src="../assets/js/mail.js"></script>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center">
                        <i class="fa-brands fa-google-scholar"></i> <a href="https://scholar.google.com/citations?user=AJE3er8AAAAJ" target="_blank">Google Scholar :</a>
                    </td>
                    <td class="align-middle text-center"><?php echo "$nb_citations citations / $nb_publications publications"; ?></td>
                    <td class="align-middle text-center">
                        <i class="bi bi-bank"></i> Institution :
                    </td>
                    <td class="align-middle text-center">
                        <a href="https://laboratoirehubertcurien.univ-st-etienne.fr/en/teams/secure-embedded-systems-hardware-architectures.html" target="_blank">Université Jean Monnet -<br> UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) -<br> SESAM Team - Saint-Étienne</a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-brands fa-github"></i> GitHub: <a href="https://github.com/WilliamPsc/" target="_blank">WilliamPsc</a>
                    </td>
                    <td class="align-middle text-center" colspan="2">
                        <a href="https://www.linkedin.com/in/william-pensec-7464a217b/" target="_blank" class="btn btn-info" role="button">
                            <i class="fa-brands fa-linkedin"></i> LinkedIn
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-brands fa-orcid"></i> <a href="https://orcid.org/0009-0006-0234-8213" target="_blank">ORCID : 0009-0006-0234-8213</a>
                    </td>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-solid fa-chart-line"></i> H-Index : <?php echo "$hindex"; ?> / Index i10 : <?php echo "$index10"; ?>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle text-center" colspan="2">
                        <i class="fa-solid fa-magnifying-glass"></i> Research interests:
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
            From September 2025, I will be an Associate Professor at the Université of Montpellier, South of France. I will be attached to the Laboratory of Computer Science, Robotic and Microelectronic of Montpellier (Laboratoire d'Informatique, de Robotique et de Micro-électronique de Montpellier - LIRMM). I will teach at the Engineering school of Polytech Montpellier in the Electronic and Industrial Computing department in both specialities Microelectronics and Automatic (MEA), as well as, Embedded Systems (SE).
        </p>

        <p class="justified-text">
            Since October 2024 until August 2025, I am a postdoctoral researcher at the Université Jean Monnet, in Saint-Étienne, in the SESAM team of the Laboratoire Hubert Curien. My current research focuses on evaluating the security of FPGA implementations of neural networks, with an objective of securing them against fault injection attacks.
        </p>

        <p class="justified-text">
            From 2021 to 2024, I did a PhD thesis in computer science at the Université Bretagne Sud, as part of the ARCAD team at the Laboratoire des Sciences et Techniques de l'Information, de la Communication et de la Connaissance (Lab-STICC) in Lorient. My work focused on extending processor protection against physical and software threats by securing the Dynamic Information Flow Tracking (DIFT) mechanism against fault injection attacks.
        </p>

        <p class="justified-text">
            I am also the author or co-author of several conference papers published in several international conferences (Sensors S&P, DSD, ISVLSI).
        </p>
    </div>

    <div class="table-responsive-md">
        <iframe style="width: 100%; height: 350px; border: 1px solid black;" src="https://www.openstreetmap.org/export/embed.html?bbox=4.384360313415528%2C45.4522172679292%2C4.387900829315186%2C45.45382787736185&amp;layer=mapnik&amp;marker=45.4530225783951%2C4.3861305713653564"></iframe>
        <br><small><a href="https://www.openstreetmap.org/?mlat=45.453023&amp;mlon=4.386131#map=19/45.453023/4.386131" target="_blank">Display a larger map</a></small>
    </div>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>