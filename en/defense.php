<?php
include "template/header.php";
include "template/menu.php";
?>

<style>
    .text-justify {
        text-align: justify;
    }
</style>

<br><br>
<div class="container">
    <h2 class="text-center">PhD Defense</h2>
    <hr>

    <h3>Enhanced Processor Defence Against Physical and Software Threats by Securing DIFT Against Fault Injection Attacks</h3>
    <div class="text-justify">
        The expansion of the Internet of Things (IoT) in sectors such as healthcare and industry is concurrently increasing the attack surface and giving rise to significant security concerns. These systems, which process sensitive data, are susceptible to both software and physical attacks due to their network connectivity and proximity to potential attackers.
        Dynamic Information Flow Tracking (DIFT) is a method of detecting software attacks, such as malware, by tagging and analysing the data flow during the execution of a program. Fault injection attacks (FIAs) induce errors (for example, through the use of laser pulses) that disrupt the normal functioning of a system and bypass security mechanisms. FIAs are of particular importance in the context of embedded and cryptographic systems, where vulnerabilities can lead to the compromise of data. Despite the existence of numerous studies examining FIA vulnerabilities, none have focused on DIFT mechanisms.
        Our research is focused on the D-RI5CY processor, implementing an in-core hardware DIFT. The present study is concerned with evaluating the impact of FIAs on the effectiveness of DIFT. To this end, we have designed and developed FISSA, a tool for simulating fault injections at the RTL level. A set of FIA-sensitive registers was identified, and three protections were implemented and compared: single parity for detection, Hamming Code for single-bit error correction, and SECDED for double-bit error detection. The implementation of these protections was studied using different strategies, which were evaluated in terms of their impact on the area, and performance overhead and level of security facing different fault models.
    </div>

    <br /><br />
    <hr><br />
    <h3 class="text-center">Jury de soutenance</h3>
    <table class="table table-striped table-bordered table-hover shadow-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Grade</th>
                <th>Établissement</th>
                <th>Rôle dans le jury</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pr. Jean-Max DUTERTRE</td>
                <td>Professeur Titulaire</td>
                <td>Ecole des Mines de Saint-Étienne</td>
                <td>Président du jury</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pr. Lejla BATINA</td>
                <td>Professeure des Universités</td>
                <td>Université de Radboub (Pays-Bas)</td>
                <td>Rapporteuse</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pr. Vincent BEROULLE</td>
                <td>Professeur des Universités</td>
                <td>INP et Université Grenoble Alpes</td>
                <td>Rapporteur</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pr. Nele MENTENS</td>
                <td>Professeure des Universités</td>
                <td>Université de Leiden (Pays-Bas) et KU Leuven (Belgique)</td>
                <td>Rapporteuse</td>
            </tr>
            <tr>
                <td>5</td>
                <td>DR/Pr. Francesco REGAZZONI</td>
                <td>Directeur de Recherche / Professeur des Universités</td>
                <td>Université d'Amsterdam (Pays-Bas) et Université de Suisse italienne (Suisse)</td>
                <td>Examinateur</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pr. Guy GOGNIAT</td>
                <td>Professeur des Universités</td>
                <td>Université Bretagne Sud</td>
                <td>Directeur de thèse</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Dr. Vianney LAPÔTRE</td>
                <td>Maitre de Conférences HDR</td>
                <td>Université Bretagne Sud</td>
                <td>Co-Directeur de thèse</td>
            </tr>
        </tbody>
    </table>

    <br />
</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>