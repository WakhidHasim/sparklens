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
                    <a href="">Edit Profile</a>
                </li>
            </ul>
        </div>

        <form action="<?= base_url('admin/profile/edit') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?= $profile['name'] ?>">
                <?= form_error('name', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $profile['email'] ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3">Edit</button>
        </form>
        <a href="<?= base_url('admin/profile') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
    </div>
</div>