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
                <a href="<?= base_url('profile/edit') ?>" class="btn btn-outline-dark btn-ecomm px-5"><i class="bi bi-pencil me-2"></i>Edit</a>
            </div>
        </div>
    </div>
</div>