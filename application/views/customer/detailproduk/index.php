<!--================Single Product Area =================-->
<br><br>
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="single-prd-item">
                    <img class="img-fluid" src="assets/user/img/category/s-p1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>Kacamata 1</h3>
                    <h2>Rp.120.000</h2>
                    <ul class="list">
                        <li><a href="<?= base_url('#'); ?>"><span>Stok</span> : 500</a></li>
                    </ul>
                    <p> Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
                        something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
                        during the winter.</p>
                    <div class="product_count">
                        <label for="qty">Quantity:</label>
                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="<?= base_url('#'); ?>">Add to Cart</a>
                        <a class="primary-btn" href="<?= base_url('#'); ?>">Coba AR!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!-- Start related-product Area -->
<br><br><br>
<!-- End related-product Area -->