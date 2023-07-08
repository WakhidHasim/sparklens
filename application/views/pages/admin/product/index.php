<div class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Product</h4>
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
                    <a href="<?= base_url('admin/products') ?>">Product</a>
                </li>
            </ul>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Product</h4>
                        <a href="<?= base_url('admin/product/create') ?>" class="btn btn-primary btn-round ml-auto">
                            <i class=" fa fa-plus mr-1"></i>
                            Add Data
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Name</th>
                                    <th>Product Photos</th>
                                    <th>Product Description</th>
                                    <th>Product Price</th>
                                    <th>Product Stock</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($products as $product) { ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>
                                        <td>
                                            <?= $product['name'] ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <img src="<?= base_url() ?>asset/images/product/<?= $product['photo'] ?>" style="width: 200px;">
                                        </td>
                                        <td>
                                            <?= $product['description'] ?>
                                        </td>
                                        <td>
                                            <?= $product['price'] ?>
                                        </td>
                                        <td>
                                            <?= $product['stock'] ?>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('admin/product/glb/') ?><?= $product['id_product'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Add Glb File">
                                                    <i class="fas fa-plus-circle"></i>
                                                </a>

                                                <a href="<?= base_url('admin/product/edit/') ?><?= $product['id_product'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Product">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('admin/product/delete/') ?><?= $product['id_product'] ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-delete" data-original-title="Delete Product" product="DELETE">
                                                    <i class="fa fa-trash-alt"></i>
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