<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
                <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                    <i class="fa fa-search"></i>
                </a>
            </li>
            <li class="nav-item hidden-caret">
                <a class="nav-link" href="<?= base_url('admin/transaction') ?>" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="notification"><?= $notif_orders ?></span>
                </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="<?= base_url() ?>asset/templates/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="<?= base_url() ?>asset/templates/admin/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                <div class="u-text">
                                    <h4><?= $user['name'] ?></h4>
                                    <p class="text-muted"><?= $user['email'] ?></p><a href="<?= base_url('logout') ?>" class="btn btn-xs btn-danger btn-sm">Logout</a>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
</div>