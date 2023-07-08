<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="page-inner">
        <div class="card-body p-lg-5">
            <h5 class="mb-0 fw-bold">Order Details</h5>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Transaction Date</td>
                            <td> <?= formatDateIndo(date($transaction['transaction_date'])) ?></td>
                        </tr>
                        <tr>
                            <td>Recipient Name</td>
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
        </div>

        <?php
        if (empty($transaction['expedition']) && empty($transaction['receipt_number'])) { ?>
            <form action="<?= base_url('admin/transaction/') ?><?= $transaction['id_transaction'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Expedition</label>
                    <select class="form-control" name="expedition">
                        <option value="">Choose</option>
                        <?php
                        foreach ($expeditions as $expedition) { ?>
                            <option value="<?= $expedition['expedition'] ?>"><?= $expedition['expedition'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="receipt_number">Receipt Number</label>
                    <input type="number" class="form-control" id="receipt_number" name="receipt_number" aria-describedby="receipt_numberHelp" value="<?= set_value('receipt_number') ?>">
                    <?= form_error('receipt_number', '<small class="text-danger">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-success float-right mb-3">Add</button>
            </form>
        <?php } ?>
        <a href="<?= base_url('admin/transaction/shipped') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
    </div>
</div>