<!DOCTYPE html>
<html lang="en">

<head>
    <title>William PENSEC - Personal website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Personal website">
    <meta name="author" content="William PENSEC">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

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
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DBMZKN0Q9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9DBMZKN0Q9');
    </script>
</head>

<body>
    <div class="jumbotron text-center" id="titre" style="margin-bottom:0">
        <?php
        $_SESSION['baseURL'] = "https://pensec.fr/";
        $_SESSION['language'] = "en";
        ?>
        <h1>William PENSEC</h1>
        <p>PERSONAL WEBSITE</p>
    </div>