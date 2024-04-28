<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <title>William PENSEC - Site personnel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Site personnel">
    <meta name="author" content="William PENSEC">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/751e653695.js" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="../logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../logo/favicon-16x16.png">
    <link rel="manifest" href="../logo/site.webmanifest">

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
    </style>
</head>

<body>
    <div class="jumbotron text-center" id="titre" style="margin-bottom:0">
        <?php
        $_SESSION['baseURL'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
        $_SESSION['language'] = "fr";
        ?>
        <h1>William PENSEC</h1>
        <p>SITE PERSONNEL</p>
    </div>