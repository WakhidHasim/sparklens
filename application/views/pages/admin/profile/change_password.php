<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Edit Profile</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('admin/dashboard') ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/profile') ?>">Profile</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="">Update Password</a>
                </li>
            </ul>
        </div>

        <?php
        if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php } else if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success" role="alert">
            </div>
        <?php } ?>

        <form action="<?= base_url('admin/profile/change_password') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password" aria-describedby="currentPasswordHelp">
                <?= form_error('current_password', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password1" aria-describedby="newPasswordHelp">
                <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="new_password2" aria-describedby="confirmPasswordHelp">
                <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3">Update Password</button>
        </form>
        <a href="<?= base_url('admin/profile') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
    </div>
</div>