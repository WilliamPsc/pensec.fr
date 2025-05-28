<?php
include "template/header.php";
include "template/menu.php";
?>

<style>
    .text-justify {
        text-align: justify;
    }

    .table th,
    .table td {
        vertical-align: middle;
        text-align: center;
    }

    .table thead {
        background-color: #4CAF50;
        color: white;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table td {
        font-size: 1.1rem;
    }

  .large-icon {
    font-size: 35px;
  }
</style>

<br><br>
<div class="container">
    <h2 class="text-center">Soutenance de thèse</h2>
    <h5 class="text-center">19 décembre 2024</h5>
    <p class="text-center">
        <a href="../assets/these/TRUSTIFT_Manuscrit_William.pdf" target="_blank" alt="Manuscrit PDF" style="text-decoration: none;">
            <i class="fas fa-file-pdf large-icon" style="color: #d9534f;"></i>
        </a>
        <a href="https://hal.science/tel-04862037/" target="_blank" alt="Manuscrit PDF" style="text-decoration: none;">
            <i class="ai ai-hal ai-2x large-icon" style="margin-left: 20px;"></i>
        </a>
        <a href="../assets/these/slidesThese_TrustIFT_William_PENSEC.pdf" target="_blank" alt="Diapositives de la soutenance" style="text-decoration: none;">
            <i class="fas fa-file-powerpoint large-icon" style="margin-left: 20px; color: #f77b00;"></i>
        </a>
        <a href="https://www.youtube.com/watch?v=Qs29I_-iC1s" target="_blank" alt="Vidéo YouTube de la soutenance" style="text-decoration: none;">
            <i class="fab fa-youtube large-icon" style="margin-left: 20px; color: red;"></i>
        </a>
    </p>
    <hr>

    <h3 class="text-justify">Extension de la Protection des Processeurs Contre les Menaces Physiques et Logicielles par la Sécurisation du Mécanisme DIFT Contre les Attaques par Injections de Fautes</h3>
    <div class="text-justify">
        La multiplication des objets connectés dans des domaines tels que la santé ou l'industrie soulève d'importantes préoccupations en termes de sécurité. Ces systèmes, traitant des données sensibles, sont vulnérables aux attaques logicielles et physiques en raison de leur connectivité réseau et de leur proximité avec les attaquants.
        Le suivi dynamique des flux d'informations (DIFT) détecte les attaques logicielles, comme les maliciels, en étiquetant et en analysant le flux de données durant l'exécution d'un programme. Les attaques par injection de fautes (FIA) induisent des erreurs (par exemple, via l'utilisation d'impulsions laser) perturbant le comportement et contournant les mécanismes de sécurité. Les FIA sont critiques dans les systèmes embarqués et cryptographiques, où les vulnérabilités peuvent compromettre les données. Bien que de nombreuses études aient exploré les vulnérabilités des FIA, aucune n'a ciblé les mécanismes DIFT.
        Nous travaillons sur le processeur D-RI5CY, implémentant un DIFT matériel in-core. Nous évaluons l'impact des FIA sur son efficacité. Pour ce faire, nous avons conçu et développé FISSA, un outil permettant de simuler des injections de fautes au niveau RTL. Nous avons identifié un ensemble de registres sensibles aux FIA et avons implémenté et comparé trois protections : la parité simple pour la détection, le code de Hamming pour la correction d'erreurs sur un bit, et SECDED pour détecter les erreurs sur deux bits. Différentes stratégies d'implémentation de ces protections ont été étudiées, et évaluées au regard de leur impact sur la surface, et les performances, et en termes de sécurité face à différents modèles de fautes.
    </div>
    <br />
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
    <hr>
    <h3 class="text-center">Vidéo de la soutenance</h3>
    <iframe width="100%" height="720" src="https://www.youtube.com/embed/Qs29I_-iC1s?si=PGkbnKpnR2-j8W7I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <br /><br />
</div>

<?php
    $dateMajFile = date("d/m/Y.", filemtime(basename(__FILE__)));
include "template/footer.php";
?>