	<!-- Start Header Area -->
	<header class="header_area sticky-header">
	    <div class="main_menu">
	        <nav class="navbar navbar-expand-lg navbar-light main_box">
	            <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <a class="navbar-brand logo_h" href="<?= base_url('#'); ?>"><img src="assets/user/img/logo.png" alt=""></a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
	                    <ul class="nav navbar-nav menu_nav navbar-left">
	                        <li class="nav-item active"><a class="nav-link" href="<?= base_url('home'); ?>">Home</a></li>
	                        <li class="nav-item submenu dropdown">
	                            <a href="<?= base_url('#'); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produk</a>
	                        </li>
	                        <li class="nav-item submenu dropdown">
	                            <a href="<?= base_url('#'); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
	                        </li>
	                    </ul>
	                    <!-- Keranjang Belanja -->
	                    <ul class="nav navbar-nav ml-auto">
	                        <li class="nav-item"><a href="<?= base_url('assets/user/#'); ?>" class="cart"><span class="ti-shopping-cart"></span></a></li>
	                    </ul>
	                </div>
	            </div>
	        </nav>
	    </div>
	</header>
	<!-- End Header Area -->