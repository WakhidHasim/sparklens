<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-center">
            <div class="col-first">
                <h1>Keranjang Belanja</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="assets/user/img/cart/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Kacamata 1</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.120.000</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i
                                            class="lnr lnr-chevron-up"></i></button>
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i
                                            class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.240.000</h5>
                            </td>
                            <td>
                                <span class="ti-close"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="assets/user/img/cart/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Kacamata 2</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.120.000</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i
                                            class="lnr lnr-chevron-up"></i></button>
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i
                                            class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.240.000</h5>
                            </td>
                            <td>
                                <span class="ti-close"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="assets/user/img/cart/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Kacamata 3</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.120.000</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i
                                            class="lnr lnr-chevron-up"></i></button>
                                    <button
                                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i
                                            class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.240.000</h5>
                            </td>
                            <td>
                                <span class="ti-close"></span>
                            </td>
                        </tr>
                        <tr class="bottom_button">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <h5>Total Belanja</h5>
                            </td>
                            <td>
                                <h5>Rp.720.000</h5>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="primary-btn" href="checkout">Checkout</a>
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->