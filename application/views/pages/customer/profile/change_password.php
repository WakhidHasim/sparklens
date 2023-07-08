<div class="col-12 col-xl-7">
    <div class="card rounded-0">
        <div class="card-body p-lg-5">
            <?php
            if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                </div>
            <?php } else if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php } ?>
            <h5 class="mb-0 fw-bold">Change Password</h5>
            <hr>
            <form action="<?= base_url('profile/change_password') ?>" method="post">
                <div class="row row-cols-1 g-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-0" id="password" name="current_password">
                            <label for="password">Current Password</label>
                            <?= form_error('current_password', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-0" id="password1" name="new_password1">
                            <label for="password1">New Password</label>
                            <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-0" id="password2" name="new_password2">
                            <label for="password2">Confirm Password</label>
                            <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark py-3 btn-ecomm w-100">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>