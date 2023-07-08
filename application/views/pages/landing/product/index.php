<!--start product-->
<section class="product-tab-section section-padding bg-light">
    <div class="container">
        <div class="text-center pb-3">
            <h3 class="mb-0 h3 fw-bold">Products Sparklens</h3>
            <p class="mb-0 text-capitalize">Click the camera icon to try the product in real-time using Augmented Reality face tracking</p>
        </div>
        <hr>
        <div class="tab-content tabular-product">
            <div class="tab-pane fade show active" id="new-arrival">
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    <?php
                    foreach ($products as $product) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <form method="post" action="<?= base_url('cart/add') ?>" method="post" accept-charset="utf-8">
                                    <div class="position-relative overflow-hidden">
                                        <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('id_user') ?>" />
                                            <input type="hidden" name="product_id" value="<?= $product['id_product'] ?>" />
                                            <input type="hidden" name="page" value="products" />
                                            <input type="hidden" name="qty" value="1" />
                                            <?php
                                            if ($product['stock'] > 0) { ?>
                                                <button type="submit"><i class="bi bi-cart"></i></button>
                                            <?php } ?>
                                            <a href="<?= base_url('product/ar/') . $product['slug']; ?>"><i class="bi bi-camera"></i></a>
                                        </div>
                                        <a href="<?= base_url('product/') . $product['slug']; ?>">
                                            <img src="<?= base_url() ?>asset/images/product/<?= $product['photo'] ?>" class="card-img-top" alt="...">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="product-info text-center">
                                            <h6 class="mb-1 fw-bold product-name"><?= $product['name'] ?></h6>
                                            <p class="mb-0 h6 fw-bold product-price">Rp. <?= number_format($product['price'], 2, ",", ".") ?></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="product-pagination mt-4">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</section>
<!--end product-->