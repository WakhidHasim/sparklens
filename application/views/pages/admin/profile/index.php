<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">My Profile</h4>
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
            </ul>
        </div>

        <div class="col-12 col-xl-9">
            <div class="card rounded-0">
                <div class="card-body p-lg-5">
                    <h5 class="mb-0 fw-bold">Profile Details</h5>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Full Name</td>
                                    <td><?= $profile['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $profile['email'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="">
                        <a href="<?= base_url('admin/profile/edit') ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit Profile</a>
                        <a href="<?= base_url('admin/profile/change_password') ?>" class="btn btn-warning px-3">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>