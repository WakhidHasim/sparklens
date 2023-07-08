<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="user">
            <div class="avatar-sm float-left mr-2">
                <img src="<?= base_url() ?>asset/templates/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <span class="user-level"><?= $user['name'] ?></span>
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="<?= base_url('admin/profile') ?>">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/profile/edit') ?>">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item <?= $this->uri->segment(1) === 'dashboard' ? 'active"' : '' ?>">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(2) === 'products'  ? 'active"' : '' ?>">
                    <a href="<?= base_url('admin/products') ?>">
                        <i class="fas fa-cubes"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item <?= $this->uri->segment(2) === 'transaction' ? 'active"' : '' ?>">
                    <a data-toggle="collapse" href="#transaction">
                        <i class="fas fa-money-bill"></i>
                        <p>Transaction</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="transaction">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('admin/transaction') ?>">
                                    <span class="sub-item">Incoming Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/transaction/packed') ?>">
                                    <span class="sub-item">Order Packed</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/transaction/shipped') ?>">
                                    <span class="sub-item">Order Shipped</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('admin/transaction/received') ?>">
                                    <span class="sub-item">Order Received</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-panel">