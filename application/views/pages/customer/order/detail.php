<div class="col-12 col-xl-9">
    <div class="card rounded-0">
        <div class="card-body p-lg-5">
            <h5 class="mb-0 fw-bold">Order Details</h5>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td><?= $transaction['recipient_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?= $transaction['phone_number'] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?= $transaction['address'] ?></td>
                        </tr>
                        <tr>
                            <td>Postal Code</td>
                            <td><?= $transaction['postal_code'] ?></td>
                        </tr>
                        <?php
                        if (!empty($transaction['expedition'])) { ?>
                            <tr>
                                <td>Expedition</td>
                                <td><?= $transaction['expedition'] ?></td>
                            </tr>
                        <?php } ?>
                        <?php
                        if (!empty($transaction['receipt_number'])) { ?>
                            <tr>
                                <td>Receipt Number</td>
                                <td><?= $transaction['receipt_number'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>Product</td>
                            <td>
                                <ol>
                                    <?php
                                    foreach ($transaction_details as $detail) { ?>
                                        <li><?= $detail['name'] ?> x <?= $detail['qty'] ?></li>
                                    <?php } ?>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="">
                <a href="<?= base_url('orders') ?>" class="btn btn-outline-dark btn-ecomm px-5"><i class="bi bi-box-arrow-in-left"></i> Back</a>
                <?php
                if ($transaction['transaction_status_id'] === '3') { ?>
                    <a href="<?= base_url('order/accept/') ?><?= $transaction['id_transaction'] ?>" class="btn btn-outline-dark btn-ecomm px-5">Accept</a>
                <?php }  ?>
            </div>
        </div>
    </div>
</div>