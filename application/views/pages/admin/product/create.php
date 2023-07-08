<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Add Product</h4>
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
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="">Add Product</a>
                </li>
            </ul>
        </div>

        <form action="<?= base_url('admin/product/create'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="<?= set_value('name') ?>">
                <?= form_error('name', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="photo">Product Photos (.jpg .jpeg .png)</label>
                <img class="product-photo-preview img-fluid mb-3 col-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/jpg, image/jpeg, image/png" onchange="productPhotoPreview()">
                    <label class="custom-file-label" for="photo">Choose file</label>
                </div>
                <?= form_error('photo', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"><?= set_value('description') ?></textarea>
                <?= form_error('description', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="priceHelp" value="<?= set_value('price') ?>">
                <?= form_error('price', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="stock">Product Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stockHelp" value="<?= set_value('stock') ?>">
                <?= form_error('stock', '<small class="text-danger">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3">Add</button>
        </form>
    </div>
</div>