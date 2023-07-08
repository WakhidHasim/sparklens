<!--start page content-->
<div class="page-content">
    <!--start product details-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-body p-4">
                            <h4 class="mb-0 fw-bold text-center">
                                <a class="navbar-brand text-center" href="<?= base_url() ?>">
                                    <img src="<?= base_url() ?>asset/images/sparklens/logo.png" class="logo-img" alt="">
                                </a>
                            </h4>
                            <?php
                            if ($this->session->flashdata('failed')) { ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                    <?= $this->session->flashdata('failed'); ?>
                                </div>
                            <?php } else if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    <?= $this->session->flashdata('success'); ?>
                                </div>
                            <?php } ?>
                            <hr>
                            <form action="<?= base_url('login') ?>" method="POST">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-0" id="email" name="email" value="<?= set_value('email') ?>" autofocus>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-0" id="password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <!-- <div class="col-12">
                                        <a href="javascript:;" class="text-content btn bg-light rounded-0 w-100"><i class="bi bi-lock me-2"></i>Forgot Password</a>
                                    </div> -->
                                    <div class="col-12">
                                        <hr class="my-0">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Login</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0 rounded-0 w-100">Don't have an account? <a href="<?= base_url('register') ?>" class="text-danger">Register</a></p>
                                    </div>
                                </div><!---end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--start product details-->
</div>
<!--end page content-->