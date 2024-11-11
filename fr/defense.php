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
    <h2 class="text-center">Soutenance de thèse</h2>
    <hr>

    <h3>Extension de la Protection des Processeurs Contre les Menaces Physiques et Logicielles par la Sécurisation du Mécanisme DIFT Contre les Attaques par Injections de Fautes</h3>
    <div class="text-justify">
        La multiplication des objets connectés dans des domaines tels que la santé ou l'industrie soulève d'importantes préoccupations en termes de sécurité. Ces systèmes, traitant des données sensibles, sont vulnérables aux attaques logicielles et physiques en raison de leur connectivité réseau et de leur proximité avec les attaquants.
        Le suivi dynamique des flux d'informations (DIFT) détecte les attaques logicielles, comme les maliciels, en étiquetant et en analysant le flux de données durant l'exécution d'un programme. Les attaques par injection de fautes (FIA) induisent des erreurs (par exemple, via l'utilisation d'impulsions laser) perturbant le comportement et contournant les mécanismes de sécurité. Les FIA sont critiques dans les systèmes embarqués et cryptographiques, où les vulnérabilités peuvent compromettre les données. Bien que de nombreuses études aient exploré les vulnérabilités des FIA, aucune n'a ciblé les mécanismes DIFT.
        Nous travaillons sur le processeur D-RI5CY, implémentant un DIFT matériel in-core. Nous évaluons l'impact des FIA sur son efficacité. Pour ce faire, nous avons conçu et développé FISSA, un outil permettant de simuler des injections de fautes au niveau RTL. Nous avons identifié un ensemble de registres sensibles aux FIA et avons implémenté et comparé trois protections : la parité simple pour la détection, le code de Hamming pour la correction d'erreurs sur un bit, et SECDED pour détecter les erreurs sur deux bits. Différentes stratégies d'implémentation de ces protections ont été étudiées, et évaluées au regard de leur impact sur la surface, et les performances, et en termes de sécurité face à différents modèles de fautes.
    </div>

    <br/><br/><hr><br/>
    <h3>Enhanced Processor Defence Against Physical and Software Threats by Securing DIFT Against Fault Injection Attacks</h3>
    <div class="text-justify">
        The expansion of the Internet of Things (IoT) in sectors such as healthcare and industry is concurrently increasing the attack surface and giving rise to significant security concerns. These systems, which process sensitive data, are susceptible to both software and physical attacks due to their network connectivity and proximity to potential attackers.
        Dynamic Information Flow Tracking (DIFT) is a method of detecting software attacks, such as malware, by tagging and analysing the data flow during the execution of a program. Fault injection attacks (FIAs) induce errors (for example, through the use of laser pulses) that disrupt the normal functioning of a system and bypass security mechanisms. FIAs are of particular importance in the context of embedded and cryptographic systems, where vulnerabilities can lead to the compromise of data. Despite the existence of numerous studies examining FIA vulnerabilities, none have focused on DIFT mechanisms.
        Our research is focused on the D-RI5CY processor, implementing an in-core hardware DIFT. The present study is concerned with evaluating the impact of FIAs on the effectiveness of DIFT. To this end, we have designed and developed FISSA, a tool for simulating fault injections at the RTL level. A set of FIA-sensitive registers was identified, and three protections were implemented and compared: single parity for detection, Hamming Code for single-bit error correction, and SECDED for double-bit error detection. The implementation of these protections was studied using different strategies, which were evaluated in terms of their impact on the area, and performance overhead and level of security facing different fault models.
    </div>

</div>

<?php
$dateMajFile = date("d/m/Y H:i.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>