<!--start page content-->
<div class="page-content">
    <!--start breadcrumb-->
    <div class="py-4 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('products') ?>">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Detail Page</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <!--start product details-->
    <section class="py-4">
        <div class="container">
            <form method="post" action="<?= base_url('cart/add') ?>" method="post" accept-charset="utf-8">
                <div class="row g-4">
                    <div class="col-12 col-xl-7">
                        <div class="product-images">
                            <div class="row row-cols-2 g-3">
                                <div class="col">
                                    <div class="img-thumb-container overflow-hidden position-relative" data-fancybox="gallery" data-src="<?= base_url() ?>asset/images/product/<?= $product['photo'] ?>">
                                        <img src="<?= base_url() ?>asset/images/product/<?= $product['photo'] ?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="product-info">
                            <h4 class="product-title fw-bold mb-1"><?= $product['name'] ?></h4>
                            <hr class="my-3">
                            <div class="product-info">
                                <h6 class="fw-bold mb-3">Product Details</h6>
                                <p class="mb-1"><?= $product['description'] ?></p>
                                <p class="mb-1">Stock = <?= $product['stock'] ?></p>
                                <p class="mb-1">Price = Rp. <?= number_format($product['price'], 2, ",", ".") ?></p>
                            </div>
                            <hr class="my-3">
                            <div class="cart-buttons mt-3">
                                <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('id_user') ?>" />
                                    <input type="hidden" name="product_id" value="<?= $product['id_product'] ?>" />
                                    <input type="hidden" name="qty" value="1" />
                                    <input type="hidden" name="page" value="detail" />
                                    <input type="hidden" name="slug" value="<?= $product['slug'] ?>" />
                                    <button type="submit" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i class="bi bi-cart"></i> Add to Cart</button>
                                    <a href="<?= base_url('product/ar/') . $product['slug']; ?>" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i class="bi bi-camera""></i> Try AR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
            </form>
        </div>
    </section>
    <!--start product details-->
</div>
<!--end page content-->