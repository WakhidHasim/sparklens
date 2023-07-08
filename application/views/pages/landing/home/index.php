<!--start carousel-->
<section class="slider-section">
    <div class="carousel-inner">
        <div class="carousel-item active bg-purple">
            <div class="row d-flex align-items-center">
                <div class="col d-none d-lg-flex justify-content-center">
                    <div class="">
                        <h1 class="h1 text-white fw-bold">The Future of Shopping! </h1>
                        <p class="text-white fw-bold">Experience a new way of shopping <br> by trying products in real-time using <u>Augmented Reality</u> technology <br> that you can use on all SparkLens eyewear products.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <img src="<?= base_url() ?>asset/images/sparklens/banner-img.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
</section>
<!--end carousel-->

<!--start features-->
<section class="product-thumb-slider section-padding">
    <div class="container">
        <div class="text-center pb-3">
            <h3 class="mb-0 h3 fw-bold">What We Offer!</h3>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 g-4">
            <div class="col d-flex">
                <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">
                    <div class="card-body text-center">
                        <div class="h1 fw-bold my-2 text-primary">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold">Free Delivery</h5>
                        <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card depth border-0 rounded-0 border-bottom border-danger border-3 w-100">
                    <div class="card-body text-center">
                        <div class="h1 fw-bold my-2 text-danger">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <h5 class="fw-bold">Secure Payment</h5>
                        <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card depth border-0 rounded-0 border-bottom border-success border-3 w-100">
                    <div class="card-body text-center">
                        <div class="h1 fw-bold my-2 text-success">
                            <i class="bi bi-minecart-loaded"></i>
                        </div>
                        <h5 class="fw-bold">Free Returns</h5>
                        <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card depth border-0 rounded-0 border-bottom border-warning border-3 w-100">
                    <div class="card-body text-center">
                        <div class="h1 fw-bold my-2 text-warning">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="fw-bold">24/7 Support</h5>
                        <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</section>
<!--end features-->

<!--start tabular product-->
<section class="product-tab-section section-padding bg-light" id="latest_product">
    <div class="container">
        <div class="text-center pb-3">
            <h3 class="mb-0 h3 fw-bold">Latest Products</h3>
            <p class="mb-0 mt-3 text-capitalize">Click the camera icon to try the product in real-time using Augmented Reality face tracking</p>
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
                                            <input type="hidden" name="page" value="home" />
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

            <div class="mt-3 text-center">
                <a href="<?= base_url('products') ?>" class="btn btn-dark btn-ecomm">See More</a>
            </div>
        </div>
    </div>
</section>
<!--end tabular product-->