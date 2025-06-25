<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <title>Dr. William PENSEC - Site personnel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Site personnel">
    <meta name="author" content="Dr. William PENSEC">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Icons and fonts + flags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/751e653695.js" crossorigin="anonymous"></script>
    <!-- FAVICONS & Manifest -->
    <link rel="apple-touch-icon" sizes="180x180" href="../logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../logo/favicon-16x16.png">
    <link rel="manifest" href="../logo/site.webmanifest">
    <style>
        :root {
            --background-color: #121212;
            --text-color: #ffffff;
            --nav-background-color: #343a40;
            --nav-text-color: #ffffff;
            --dropdown-background-color: #343a40;
            --dropdown-text-color: #ffffff;
            --jumbotron-background-color: #343a40;
            --jumbotron-text-color: #ffffff;
            --footer-background-color: #343a40;
            --footer-text-color: #ffffff;
            --table-background-color: #343a40;
            --table-text-color: #ffffff;
            --table-striped-background-color: #2c3136;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar {
            background-color: var(--nav-background-color);
        }

        .navbar-nav .nav-link {
            color: var(--nav-text-color);
        }

        .dropdown-menu {
            background-color: var(--dropdown-background-color);
        }

        .dropdown-item {
            color: var(--dropdown-text-color);
        }

        .jumbotron {
            background-color: var(--jumbotron-background-color);
            color: var(--jumbotron-text-color);
        }

        .footer {
            background-color: var(--footer-background-color);
            color: var(--footer-text-color);
        }

        .table {
            background-color: var(--table-background-color);
            color: var(--table-text-color);
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: var(--table-striped-background-color);
        }

        body.light-mode {
            --background-color: #ffffff;
            --text-color: #000000;
            --nav-background-color: #f8f9fa;
            --nav-text-color: #000000;
            --dropdown-background-color: #f8f9fa;
            --dropdown-text-color: #000000;
            --jumbotron-background-color: #f8f9fa;
            --jumbotron-text-color: #000000;
            --footer-background-color: #f8f9fa;
            --footer-text-color: #000000;
            --table-background-color: #ffffff;
            --table-text-color: #000000;
            --table-striped-background-color: #f2f2f2;
        }

        .btn-linkedin {
            background: #0E76A8;
            border-radius: 0;
            color: #fff;
            border-width: 1px;
            border-style: solid;
            border-color: #084461;
        }

        .btn-linkedin:link, .btn-linkedin:visited {
            color: #fff;
        }

        .btn-linkedin:active, .btn-linkedin:hover {
            background: #084461;
            color: #fff;
        }

        i a .ai {
            font-size: 1.5em;
        }

        .progress {
            height: 25px;
        }

        .justified-text {
            text-align: justify;
        }

        .custom-nav-link {
            color: #ffffff !important;
            transition: color 0.3s ease;
        }

        .custom-nav-link:hover {
            color: #adb5bd !important;
        }

        .custom-nav-link i {
            color: #ffffff !important;
        }

        .custom-nav-link:hover i {
            color: #adb5bd !important;
        }

        .nav-item {
            border-right: 1px solid #ccc;
            padding-right: 5px;
        }

        .drop {
            border-right: 0px solid black;
            padding-right: 0px;
        }

        .dropdown-menu {
            background-color: #343a40 !important;
        }

        .dropdown-item {
            color: #ffffff !important;
        }

        .dropdown-item:hover {
            background-color: #495057 !important;
            color: #ffffff !important;
        }

        .active {
            font-weight: bold !important;
            color: #4da1ff !important;
        }

        .active:hover {
            color: #1a75ff !important;
        }

        .active i {
            color: #4da1ff !important;
        }

        .active:hover i {
            color: #1a75ff !important;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-container {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .equal-columns th, .equal-columns td {
            width: calc(100% / var(--column-count));
        }

        .bordered-table th, .bordered-table td {
            border: 1px solid #dee2e6;
        }

        .year-heading {
            margin-top: 20px;
            color: blue;
        }

        table a {
            color: black;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }

        .custom-table th:first-child, .custom-table td:first-child {
            width: 50%;
        }

        .custom-table th:not(:first-child), .custom-table td:not(:first-child) {
            width: calc(50% / 3);
        }

        .large-icon {
            font-size: 35px;
        }

        .light-mode {
            background-color: #ffffff !important;
            color: #000000 !important;
        }

        .light-mode .navbar-nav .nav-link {
            color: #000000 !important;
        }

        .light-mode .navbar-nav .nav-link i {
            color: #000000 !important;
        }

        .light-mode .dropdown-menu {
            background-color: #f8f9fa !important;
        }

        .light-mode .dropdown-item {
            color: #000000 !important;
        }
    </style>
</head>
<body>
    <div class="container p-5 my-5 border jumbotron text-center" id="titre" style="margin-bottom:0">
        <h1>Dr William PENSEC</h1>
        <h5>Docteur en Informatique et Architectures Numériques</h5>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ps-4 align-items-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.pensec.fr/fr/index">
                <img src="https://www.pensec.fr/logo/favicon-32x32.png" alt="Accueil" class="rounded-circle d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="https://www.pensec.fr/fr/index"><i class="bi bi-house me-1"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="https://www.pensec.fr/fr/cv"><i class="fas fa-user-tie me-1"></i> Curriculum Vitae</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="https://www.pensec.fr/fr/enseignements"><i class="fa-solid fa-building-columns me-1"></i> Université</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="https://www.pensec.fr/fr/conferences"><i class="fas fa-book-reader me-1"></i> Conférences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="https://www.pensec.fr/fr/publications"><i class="fas fa-book me-1"></i> Publications</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-link fs-5" href="#" id="theme-toggle">
                            <i class="fas fa-moon me-2" id="theme-icon"></i> Dark Mode
                        </a>
                    </li>
                    <li class="nav-item drop dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="langages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-fr me-2"></span> Français
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="langages">
                            <a class="dropdown-item" href="https://www.pensec.fr/en/"><span class="flag-icon flag-icon-gb me-2"></span> English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <h2 class="text-center"><u>Chercheur post-doctorant</u></h2>
        <div class="table-responsive-md">
            <h4 class="text-center">Évaluation de la sécurité des implémentations FPGA de réseaux neuronaux sur RISC-V</h4>
            <br><br>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-solid fa-phone me-1"></i> Contact :
                        </td>
                        <td class="align-middle text-center">+33 04.77.91.57.59 (Pro)</td>
                        <td class="align-middle text-center">
                            <i class="fa-regular fa-envelope me-1"></i> Email :
                        </td>
                        <td class="align-middle text-center">
                            <script src="../assets/js/mail.js"></script>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <i class="fa-brands fa-google-scholar me-1"></i> <a href="https://scholar.google.com/citations?user=AJE3er8AAAAJ" target="_blank">Google Scholar :</a>
                        </td>
                        <td class="align-middle text-center">10 citations / 16 publications</td>
                        <td class="align-middle text-center">
                            <i class="bi bi-bank me-1"></i> Institution :
                        </td>
                        <td class="align-middle text-center">
                            <a href="https://laboratoirehubertcurien.univ-st-etienne.fr/en/teams/secure-embedded-systems-hardware-architectures.html" target="_blank">Université Jean Monnet -<br> UMR CNRS 5516, Laboratoire Hubert Curien (LabHC) -<br> Équipe SESAM - Saint-Étienne</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-brands fa-github me-1"></i> GitHub : <a href="https://github.com/WilliamPsc/" target="_blank">WilliamPsc</a>
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
                            <i class="fa-solid fa-chart-line me-1"></i> H-Index : 2 / Index i10 : 0
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center" colspan="2">
                            <i class="fa-solid fa-magnifying-glass me-1"></i> Domaines de recherche :
                        </td>
                        <td class="align-middle" colspan="2">
                            <ul>
                                <li>Sécurité matérielle des systèmes embarqués / processeurs RISC-V.</li>
                                <li>Attaques physiques (principalement injections de fautes).</li>
                                <li>Sécurité des implémentations de réseaux de neurones.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <h3 class="text-center">Biographie</h3>
            <p class="justified-text">
                A partir de septembre 2025, je serai Maître de Conférences à l'Université de Montpellier, rattaché au Laboratoire d'Informatique, de Robotique et de Micro-électronique de Montpellier (LIRMM). J'enseignerai à Polytech Montpellier dans le département Électronique et Informatique Industrielle (EII) pour les spécialités Micro-Électronique et Automatique (MEA) et Systèmes Embarqués (SE).
            </p>
            <p class="justified-text">
                Depuis octobre 2024 jusqu'à août 2025, je suis chercheur postdoctoral à l’Université Jean Monnet, à Saint-Étienne, au sein de l’équipe SESAM du Laboratoire Hubert Curien. Ma recherche actuelle porte sur l’évaluation de la sécurité des implémentations de réseaux de neurones embarqués, avec comme objectif leur sécurisation contre les attaques par injection de fautes (laser).
            </p>
            <p class="justified-text">
                De 2021 à 2024, j’ai réalisé une thèse de doctorat en informatique à l’Université Bretagne Sud, au sein de l’équipe ARCAD du Laboratoire des Sciences et Techniques de l'Information, de la Communication et de la Connaissance (Lab-STICC), à Lorient. Mes travaux ont porté sur l’extension de la protection des processeurs contre les menaces physiques et logicielles, via la sécurisation du mécanisme DIFT (Dynamic Information Flow Tracking) face aux attaques par injections de fautes. J'ai soutenu cette thèse de Doctorat en décembre 2024, à Lorient.
            </p>
            <p class="justified-text">
                Je suis également l'auteur ou coauteur de plusieurs articles de conférences publiés dans plusieurs conférences internationales (Sensors S&P, DSD, ISVLSI).
            </p>
        </div>
        <div class="table-responsive-md">
            <iframe style="width: 100%; height: 350px; border: 1px solid black;" src="https://www.openstreetmap.org/export/embed.html?bbox=4.384360313415528%2C45.4522172679292%2C4.387900829315186%2C45.45382787736185&amp;layer=mapnik&amp;marker=45.4530225783951%2C4.3861305713653564"></iframe>
            <br><small><a href="https://www.openstreetmap.org/?mlat=45.453023&amp;mlon=4.386131#map=19/45.453023/4.386131" target="_blank">Afficher une carte plus grande</a></small>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-body-secondary jumbotron text-center">
        <a href="https://www.pensec.fr/fr" target="_blank" style="color:black;">Dr. William PENSEC</a>
        <br> Chercheur post-doctorant
        <br> 2017 - 2025
        <br> Version 3.1
        <br><br>
        <p style="font-size: 10px; margin-bottom: auto"> Dernière mise à jour : 16/06/2025. </p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const body = document.body;

            themeToggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (body.classList.contains('light-mode')) {
                    body.classList.remove('light-mode');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                    themeToggle.innerHTML = '<i class="fas fa-moon me-2"></i> Dark Mode';
                } else {
                    body.classList.add('light-mode');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                    themeToggle.innerHTML = '<i class="fas fa-sun me-2"></i> Light Mode';
                }
            });
        });
    </script>
</body>
</html>
