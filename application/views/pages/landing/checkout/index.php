<div class="py-4 border-bottom">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('cart') ?>">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
</div>

<!--start product details-->
<section class="section-padding">
    <div class="container">
        <div class="d-flex align-items-center px-3 py-2 border mb-4">
            <div class="text-start">
                <h4 class="mb-0 h4 fw-bold">Checkout</h4>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12 col-lg-8 col-xl-8">
                <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Personal Details</h6>
                <div class="card rounded-0">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?= base_url('transaction/send') ?>" method="post" name="frmCO" id="frmCO" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="recipient_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control rounded-0" id="recipient_name" name="recipient_name" value="<?= set_value('recipient_name') ?>" autofocus>
                                    <?= form_error('recipient_name', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-9">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control rounded-0" id="phone_number" name="phone_number" value="<?= set_value('phone_number') ?>" autofocus>
                                    <?= form_error('phone_number', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-3">
                                    <label for="postal_code" class="form-label">Postal Code</label>
                                    <input type="number" class="form-control rounded-0" id="postal_code" name="postal_code" value="<?= set_value('postal_code') ?>" autofocus>
                                    <?= form_error('postal_code', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Address (Must Be Complete!)</label>
                                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="address"><?= set_value('address') ?></textarea>
                                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="foto">Proof Of Payment (.jpg .jpeg .png)</label>
                                        <img class="proof-of-payment-preview img-fluid mb-3 mt-3 col-4" style="display: none;">
                                        <div class="mb-3 mt-3">
                                            <input class="form-control" type="file" id="proof_of_payment" name="proof_of_payment" accept="image/jpg, image/jpeg, image/png" onchange="proofOfPaymentPreview(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-dark btn-ecomm py-3 px-5">Order</button>
                                </div>
                            </div><!--end row-->
                            <!--end row-->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card rounded-0 mb-3">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Order Summary</h5>
                        <?php
                        foreach ($carts as $cart) { ?>
                            <div class="hstack align-items-center justify-content-between">
                                <input type="hidden" class="form-control rounded-0" id="cart_id" name="cart_id[]">
                                <input type="hidden" class="form-control rounded-0" id="cart_id" name="cart_id[]">
                                <input type="hidden" class="form-control rounded-0" id="id_product" name="id_product[]">
                                <p class="mb-0"><?= $cart['name'] ?> x <?= $cart['qty'] ?></p>
                                <p class="mb-0">Rp. <?= number_format($cart['price'], 0, ",", ".")  ?></p>
                            </div>
                            <hr>
                        <?php } ?>
                        <div class="hstack align-items-center justify-content-between fw-bold text-content">
                            <p class="mb-0">Total Amount</p>
                            <p class="mb-0">Rp. <?= number_format($grandtotal['grandtotal'], 0, ",", ".") ?></p>
                        </div>
                        <hr>
                        <p class="fw-bold mb-4">Please make payment via the account number below:</p>
                        <p><strong>BNI - 1978xxxxxxxxxxxx</strong></p>
                        <p><strong>BRI - 1978xxxxxxxxxxxx</strong></p>
                        <p><strong>BCA - 1978xxxxxxxxxxxx</strong></p>
                    </div>
                </div>
            </div>
            </form>
        </div><!--end row-->
    </div>
</section>
<!--start product details-->