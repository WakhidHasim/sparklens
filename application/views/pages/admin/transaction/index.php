<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Transaction</h4>
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
                    <a href="<?= base_url('admin/products') ?>">Transaction</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Incoming Orders Data</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Recipient Name</th>
                                    <th>Phone Number</th>
                                    <th>Transaction Date</th>
                                    <th>Proof Of Payment</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($transactions as $transaction) { ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $transaction['recipient_name'] ?>
                                        </td>
                                        <td>
                                            <?= $transaction['phone_number'] ?>
                                        </td>
                                        <td>
                                            <?= formatDateIndo(date($transaction['transaction_date'])) ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <img src="<?= base_url() ?>asset/images/proof_of_payment/<?= $transaction['proof_of_payment'] ?>" style="width: 200px;">
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('admin/transaction/') ?><?= $transaction['id_transaction'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Show Detail Transaction">
                                                    <i class="fas fa-box-open"></i>
                                                </a>
                                                <a href="<?= base_url('admin/transaction/packed/') ?><?= $transaction['id_transaction'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Change Status Packed">
                                                    <i class="fas fa-box"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>