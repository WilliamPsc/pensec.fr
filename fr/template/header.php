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

    <?php
    $baseURL = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
    $http = (empty($_SERVER['HTTPS']) ? 'http' : 'https');
    $langue = substr($_SERVER['REQUEST_URI'], 1, 2);
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
            /* White color for nav links */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .custom-nav-link:hover {
            color: #adb5bd !important;
            /* Light gray color on hover */
        }

        .custom-nav-link i {
            color: #ffffff !important;
            /* White color for icons */
        }

        .custom-nav-link:hover i {
            color: #adb5bd !important;
            /* Light gray color for icons on hover */
        }

        .nav-item {
            border-right: 1px solid #ccc;
            /* Ajoute une bordure à droite */
            padding-right: 5px;
            /* Ajoute un peu d'espace à l'intérieur à droite */
        }

        .drop {
            border-right: 0px solid black;
            /* Ajoute une bordure à droite */
            padding-right: 0px;
            /* Ajoute un peu d'espace à l'intérieur à droite */
        }

        .dropdown-menu {
            background-color: #343a40 !important;
            /* Dark background for dropdown menu */
        }

        .dropdown-item {
            color: #ffffff !important;
            /* White color for dropdown items */
        }

        .dropdown-item:hover {
            background-color: #495057 !important;
            /* Darker background on hover */
            color: #ffffff !important;
            /* White color for dropdown items on hover */
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

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-container {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .equal-columns th,
        .equal-columns td {
            width: calc(100% / var(--column-count));
        }

        .bordered-table th,
        .bordered-table td {
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

        .custom-table th:first-child,
        .custom-table td:first-child {
            width: 50%;
        }

        .custom-table th:not(:first-child),
        .custom-table td:not(:first-child) {
            width: calc(50% / 3);
        }

        .large-icon {
            font-size: 35px;
        }
    </style>
</head>

<body>
    <div class="container p-5 my-5 border jumbotron text-center" id="titre" style="margin-bottom:0">
        <h1>Dr. William PENSEC</h1>
        <h5>Docteur en Informatique et Architectures Numériques</h5>
        <h5>Maître de Conférences</h5>
    </div>