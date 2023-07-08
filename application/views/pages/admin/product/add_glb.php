<div class="content">
    <div class="page-inner">
        <form action="<?= base_url('admin/product/glb/') . $product['id_product'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="glb">GLB File (.glb)</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="glb" name="glb">
                    <label class="custom-file-label" for="glb">Choose file</label>
                </div>
                <?= form_error('glb', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" aria-describedby="positionHelp" <?php if (empty($product['position'])) { ?> value="<?= set_value('position') ?>" <?php } else { ?> value="<?= $product['position'] ?>" <?php } ?>>
                <?= form_error('position', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="scale">Scale</label>
                <input type="text" class="form-control" id="scale" name="scale" aria-describedby="scaleHelp" <?php if (empty($product['scale'])) { ?> value="<?= set_value('scale') ?>" <?php } else { ?> value="<?= $product['scale'] ?>" <?php } ?>>
                <?= form_error('scale', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="form-group">
                <label for="rotation">Rotation</label>
                <input type="text" class="form-control" id="rotation" name="rotation" aria-describedby="rotationHelp" <?php if (empty($product['rotation'])) { ?> value="<?= set_value('rotation') ?>" <?php } else { ?> value="<?= $product['rotation'] ?>" <?php } ?>>
                <?= form_error('rotation', '<small class="text-danger">', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-success float-right mb-3">Add</button>
        </form>
        <a href="<?= base_url('admin/product') ?>" class="btn btn-warning float-right mb-3 mr-3">Back</a>
    </div>
</div>