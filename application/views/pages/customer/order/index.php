<div class="col-12 col-xl-9">
    <?php
    foreach ($transactions as $transaction) { ?>
        <div class="card rounded-0 mb-3">
            <div class="card-body">
                <div class="d-flex flex-column flex-xl-row gap-3">
                    <div class="product-info flex-grow-1">
                        <h5 class="fw-bold mb-1"></h5>
                        <p class="mb-1">Recipient Name : <?= $transaction['recipient_name'] ?></p>
                        <p class="mb-1">Address : <?= $transaction['address'] ?>, <?= $transaction['postal_code'] ?></p>
                        <p class="mb-1">Date : <?= formatDateIndo(date($transaction['transaction_date'])) ?></p>
                        <div class="mt-3 hstack gap-2">
                            <?php
                            if (!empty($transaction['expedition'])) { ?>
                                <button type="button" class="btn btn-sm border rounded-0">Expedition : <?= $transaction['expedition'] ?></button>
                            <?php } ?>
                            <?php
                            if (!empty($transaction['receipt_number'])) { ?>
                                <button type="button" class="btn btn-sm border rounded-0">Receipt Number : <?= $transaction['receipt_number'] ?></button>
                            <?php } ?>
                            <button type="button" class="btn btn-sm border rounded-0">Status : <?= $transaction['transaction_status'] ?></button>
                        </div>
                    </div>
                    <div class="d-none d-xl-block vr"></div>
                    <div class="d-grid align-self-start align-self-xl-center">
                        <a href="<?= base_url('orders/detail/') ?><?= $transaction['id_transaction'] ?>" class="btn btn-outline-dark btn-ecomm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if (empty($transactions)) { ?>
        <h3>Empty Orders!</h3>
    <?php } ?>
</div>