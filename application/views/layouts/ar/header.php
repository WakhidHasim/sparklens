<!doctype html>
<html lang="en" class="light-theme">

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

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/templates/landing/plugins/toastr/toastr.min.css">

    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://libs.zappar.com/zappar-aframe/0.2.3/zappar-aframe.js"></script>

    <?php
    if ($this->uri->segment(1) === 'product') { ?>
        <title><?= $product['name']; ?></title>
    <?php } else { ?>
        <title>Sparklens | <?= $title ?></title>
    <?php } ?>

</head>

<body>
    <!--start top header-->
    <header class="top-header">