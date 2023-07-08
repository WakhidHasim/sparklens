<nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
    <a class="navbar-brand d-none d-xl-inline" href="<?= base_url() ?>"><img src="<?= base_url() ?>asset/images/sparklens/logo.png" class="logo-img" alt=""></a>
    <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
        <i class="bi bi-list"></i>
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <div class="offcanvas-logo"><img src="<?= base_url() ?>asset/images/sparklens/logo.png" class="logo-img" alt="">
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body primary-menu">
            <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products') ?>">Products</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="navbar-nav secondary-menu flex-row">
        <?php
        if ($this->session->userdata('email')) { ?>
            <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <a class="nav-link position-relative" href="<?= base_url('cart') ?>">
                    <div class="cart-badge">0</div>
                    <i class="bi bi-cart"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="bi bi-person-circle"></i></a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a href="<?= base_url('login') ?>" class="btn btn-outline-dark btn-ecomm">Login</a>
            </li>
        <?php } ?>
    </ul>
</nav>
</header>
<!--end top headers

<!--start page content-->
<div class="page-content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>