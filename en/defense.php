<?php
include "template/header.php";
include "template/menu.php";
?>

<br><br>
<div class="container">
    <h2 class="text-center">PhD Defense</h2>
    <h5 class="text-center">December 19, 2024</h5>
    <p class="text-center">
        <a href="../assets/these/TRUSTIFT_Manuscrit_William.pdf" target="_blank" style="text-decoration: none;">
            <i class="fas fa-file-pdf large-icon" style="color: #d9534f;"></i>
        </a>
        <a href="https://hal.science/tel-04862037/" target="_blank" style="text-decoration: none;">
            <i class="ai ai-hal ai-2x large-icon" style="margin-left: 20px;"></i>
        </a>
        <a href="../assets/these/slidesThese_TrustIFT_William_PENSEC.pdf" target="_blank" style="text-decoration: none;">
            <i class="fas fa-file-powerpoint large-icon" style="margin-left: 20px; color: #f77b00;"></i>
        </a>
        <a href="https://www.youtube.com/watch?v=Qs29I_-iC1s" target="_blank" style="text-decoration: none;">
            <i class="fab fa-youtube large-icon" style="margin-left: 20px; color: red;"></i>
        </a>
    </p>
    <hr>

    <h3>Enhanced Processor Defence Against Physical and Software Threats by Securing DIFT Against Fault Injection Attacks</h3>
    <div class="text-justify">
        Embedded security is more and more crucial with the huge increase of IoT devices, enhancing efficiency and addressing challenges like industrial change and health. However, their widespread use also increases the attack surface, raising significant security concerns. These systems, handling sensitive data, are vulnerable to both software and physical attacks due to their network connectivity and proximity to attackers.
        Dynamic Information Flow Tracking (DIFT) detects software attacks, such as buffer overflows, by tagging and tracking data at runtime. Fault Injection Attacks (FIA) deliberately introduce hardware errors to disrupt normal operation and bypass security mechanisms. These faults can be introduced physically (e.g., via voltage or lasers). FIAs are concerning in embedded and cryptographic systems, where low-level faults can compromise sensitive data. Although many studies have explored FIA vulnerabilities, none have targeted DIFT mechanisms. 
        Our research focuses on the D-RI5CY processor, which implements a hardware in-core DIFT. We assess the impact of FIAs on DIFT's effectiveness in this processor. Through fault injection simulations, using FISSA, a tool developed to facilitate fault evaluation, we identify vulnerable hardware registers and implement three countermeasures: simple parity for error detection, Hamming Code for single-bit error correction, and SECDED to detect double-bit errors. These were optimised by grouping registers to minimise redundancy overhead. We further evaluated multiple register group compositions to enhance countermeasures against complex fault models, developing four strategies to improve error detection and correction efficiency.
    </div>
    <br>
    <hr><br>
    <h3 class="text-center">PhD Thesis examination members</h3>
    <table class="table table-striped table-bordered table-hover shadow-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Position</th>
                <th>Institution</th>
                <th>Role in the jury</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pr. Jean-Max DUTERTRE</td>
                <td>Full Professor</td>
                <td>Ecole des Mines de Saint-Étienne (France)</td>
                <td>Chairman of the jury</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pr. Lejla BATINA</td>
                <td>Full Professor</td>
                <td>Radboub University (Netherlands)</td>
                <td>Reviewer</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pr. Vincent BEROULLE</td>
                <td>Full Professor</td>
                <td>INP and Université Grenoble Alpes (France)</td>
                <td>Reviewer</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pr. Nele MENTENS</td>
                <td>Full Professor</td>
                <td>Leiden University (Netherlands) and KU Leuven (Belgium)</td>
                <td>Reviewer</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pr. Francesco REGAZZONI</td>
                <td>Senior Researcher</td>
                <td>Amsterdam University (Netherlands) and Università della Svizzera italiana (Switzerland)</td>
                <td>Examinator</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pr. Guy GOGNIAT</td>
                <td>Full Professor</td>
                <td>Université Bretagne Sud (France)</td>
                <td>Thesis Director</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Dr. Vianney LAPÔTRE</td>
                <td>Associate Professor</td>
                <td>Université Bretagne Sud (France)</td>
                <td>Thesis Co-director</td>
            </tr>
        </tbody>
    </table>
    <br>
    <hr>
    <h3 class="text-center">PhD Defense YouTube video</h3>
    <iframe style="width: 100%; height: 720px; border: 1px solid black;" src="https://www.youtube.com/embed/Qs29I_-iC1s?si=PGkbnKpnR2-j8W7I" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <br><br>
</div>

<?php
$dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>