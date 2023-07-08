<!--start page content-->
<div class="page-content">
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
                            <hr>
                            <form method="POST" action="<?= base_url('register') ?>">
                                <div class=" row g-4">
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control rounded-0" id="name" name="name" value="<?= set_value('name') ?>" autofocus>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-0" id="email" name="email" value="<?= set_value('email') ?>" autofocus>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-0" id="password" name="password1" autofocus>
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-12">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control rounded-0" id="confirmPassword" name="password2" autofocus>
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-12">
                                        <hr class="my-0">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Register</button>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0 rounded-0 w-100">Already have an account? <a href="<?= base_url('login') ?>" class="text-danger">Login</a></p>
                                    </div>
                                </div><!---end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </section>
</div>
<!--end page content-->