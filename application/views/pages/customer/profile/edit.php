<div class="col-12 col-xl-7">
    <div class="card rounded-0">
        <div class="card-body p-lg-5">
            <h5 class="mb-0 fw-bold">Edit Profile</h5>
            <hr>
            <form action="<?= base_url('profile/edit') ?>" method="post">
                <div class="row row-cols-1 g-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-0" id="name" name="name" value="<?= $profile['name'] ?>">
                            <label for="name">Full Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" class="form-control rounded-0" id="email" name="email" value="<?= $profile['email'] ?>">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark py-3 btn-ecomm w-100">Save Profile</button>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('profile/change_password') ?>" class="btn btn-outline-dark py-3 btn-ecomm w-100">Change Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>