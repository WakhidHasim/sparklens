<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?= base_url() ?>asset/images/sparklens/favicon.png" type="image/webp" />

    <!-- CSS files -->
    <link href="<?= base_url() ?>asset/templates/landing/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/templates/landing/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/templates/landing/plugins/slick/slick-theme.css" />

    <link href="<?= base_url() ?>asset/templates/landing/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/templates/landing/css/dark-theme.css" rel="stylesheet">

    <title>Sparklens | <?= $title ?></title>
</head>

<body class="">

    <!--page loader-->
    <div class="loader-wrapper">
        <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!--end loader-->