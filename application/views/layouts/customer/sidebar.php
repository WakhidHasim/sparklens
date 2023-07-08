<section class="section-padding">
    <div class="container">
        <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
        <div class="row">
            <div class="col-12 col-xl-3 filter-column">
                <nav class="navbar navbar-expand-xl flex-wrap p-0">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">
                                Account</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body account-menu">
                            <div class="list-group w-100 rounded-0">
                                <a href="<?= base_url('dashboard') ?>" class="list-group-item <?= $this->uri->segment(1) === 'dashboard' ? 'active"' : '' ?>"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                                <a href="<?= base_url('orders') ?>" class="list-group-item <?= $this->uri->segment(1) === 'orders' ? 'active"' : '' ?>"><i class="bi bi-box-seam me-2"></i>Orders</a>
                                <a href="<?= base_url('profile') ?>" class="list-group-item <?= $this->uri->segment(1) === 'profile' ? 'active"' : '' ?>"><i class="bi bi-person me-2"></i>Profile Details</a>
                                <a href="<?= base_url('logout') ?>" class="list-group-item"><i class="bi bi-power me-2"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>