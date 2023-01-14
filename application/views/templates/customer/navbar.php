<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= base_url('home'); ?>"><img src="assets/user/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav navbar-left">
                        <li <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item" ' ?>>
                            <a class="nav-link" href="<?= base_url('home'); ?>">Home</a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'all_produk' ? 'class="nav-item active"' : 'class="nav-item" ' ?>>
                            <a class="nav-link" href="<?= base_url('all_produk'); ?>">Produk</a>
                        </li>
                    </ul>
                    <!-- Keranjang Belanja & Auth -->
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a href="<?= base_url('cart'); ?>" class="cart"><span class="ti-shopping-cart"></span></a></li>
                        <li class="nav-item"><a href="<?= base_url('auth'); ?>" class="auth"><span class="ti-user"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->