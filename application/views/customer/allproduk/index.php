<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-center">
            <div class="col-first">
                <h1>Semua Produk</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<section class="produk" id="produk">
    <div class="single-product-slider">
        <div class="container"> <br><br><br>
            <div class="row">
                <?php foreach ($produk_terbaru as $val) { ?>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= base_url('assets/images/') . $val->foto_produk ?>"
                                alt="IMG-PRODUCT">
                            <div class="product-details">
                                <a href="<?= base_url('product'); ?>">
                                    <h6>
                                        <?= $val->nama ?>
                                    </h6>
                                </a>
                                <div class="price">
                                    <h6>Rp. <?= $val->harga ?>,-</h6>
                                    <h6 class="l-through">Rp. 999.999,-</h6>
                                </div>
                                <div class="prd-bottom">
                                    <a href="<?= base_url('#'); ?>" class="social-info">
                                        <span class="ti-shopping-cart"></span>
                                        <p class="hover-text">Keranjang</p>
                                    </a>
                                    <a href="<?= base_url('#'); ?>" class="social-info">
                                        <span class="lnr lnr-camera"></span>
                                        <p class="hover-text">Coba AR!</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                ; ?>
            </div>

            <!-- NEXT PAGE BUTTON -->
            <!-- <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">
                                <span class="lnr lnr-chevron-left"></span>
                            </span>
                        </a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">
                                <span class="lnr lnr-chevron-right"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>
    </div>
</section>