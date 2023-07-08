<div class="col-12 col-xl-9">
    <div class="card rounded-0 bg-light">
        <div class="card-body">
            <div class="d-flex flex-wrap flex-row align-items-center gap-3">
                <div class="profile-email flex-grow-1">
                    <p class="mb-0 fw-bold text-content"><?= $profile['email'] ?></p>
                </div>
                <div class="edit-button align-self-start">
                    <a href="<?= base_url('profile/edit') ?>" class="btn btn-outline-dark btn-ecomm"><i class="bi bi-pencil-fill me-2"></i>Edit Profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-3 g-4 pt-4">
        <div class="col">
            <a href="account-orders.html">
                <div class="card rounded-0">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <div class="fs-2 mb-3 text-content"><i class="bi bi-box-seam"></i></div>
                            <h6 class="mb-0">Orders</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="<?= base_url('profile') ?>">
                <div class="card rounded-0">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <div class="fs-2 mb-3 text-content"><i class="bi bi-person"></i></div>
                            <h6 class="mb-0">Profile Details</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--end row-->
</div>