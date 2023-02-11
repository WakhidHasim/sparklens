<!--================Detail Product Area =================-->
<br><br>
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="single-prd-item">
                    <img class="img-fluid" src="<?= base_url('assets/images/') ?><?= $detail_produk['foto_produk'] ?>" alt="">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $detail_produk['nama'] ?></h3>
                    <h2><?= $detail_produk['harga']; ?></h2>
                    <ul class="list">
                        <li><a href="<?= base_url('#'); ?>"><span>Stok</span> : <?= $detail_produk['stok']; ?></a></li>
                    </ul>
                    <p>
                        <?= $detail_produk['deskripsi']; ?>
                    </p>
                    <div class="product_count">
                        <label for="qty">Quantity:</label>
                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="<?= base_url('#'); ?>">Add to Cart</a>
                        <a class="primary-btn" href="<?= base_url('arpage'); ?>">Coba AR!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Detail Product Area =================-->
<br><br><br>