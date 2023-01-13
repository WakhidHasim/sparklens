<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 my-auto">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <a href="<?= base_url('home'); ?>">
                            <img src="<?= base_url(); ?>assets/user/img/big_logo.png" class="navbar-brand-img" width="200">
                        </a>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form role="form" method="POST" action="<?= base_url('auth') ?>">
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
                            </div>
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" id="password" name="password">
                            </div>
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Login</button>
                        </div>
                        <div class="text-center">
                            <h5 class="text-default">Belum Punya Akun ? <a href="<?= base_url('auth/register') ?>">Daftar Disini !</a></h5>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>