<!--start product details-->
<section class="section-padding">
    <div class="container">
        <div class="d-flex align-items-center px-3 py-2 border mb-4">
            <div class="ms-auto">
                <a href="<?= base_url('products'); ?>" class="btn btn-light btn-ecomm">Continue Shopping</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12 col-xl-12">

                <?php
                if (empty($carts)) { ?>
                    <h3>Empty Shopping Cart!</h3>
                <?php } else { ?>
                    <table class="table">
                        <tr id="main_heading">
                            <td width="2%">No</td>
                            <td width="10%">Product Photos</td>
                            <td width="25%">Product Name</td>
                            <td width="17%">Product Price</td>
                            <td width="8%">Qty</td>
                            <td width="20%">Total</td>
                            <td width="18%">Action</td>
                        </tr>
                        <?php
                        $i = 1;
                        foreach ($carts as $cart) { ?>
                            <form action="<?= base_url('cart/edit/') ?><?= $cart['id_cart'] ?>" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" class="form-control input-sm" name="price" value="<?= $cart['price']; ?>" />
                                    <td><?= $i++; ?></td>
                                    <td><img class="img-responsive" src="<?= base_url() ?>asset/images/product/<?= $cart['photo'] ?>" width="150px" /></td>
                                    <td><?= $cart['name']; ?></td>
                                    <td>Rp. <?= number_format($cart['price'], 0, ",", "."); ?></td>
                                    <td><input type="text" class="form-control input-sm" name="qty" value="<?= $cart['qty']; ?>" /></td>
                                    <td>Rp. <?= number_format($cart['subtotal'], 0, ",", ".") ?></td>
                                    <td>
                                        <button class='btn btn-sm btn-success' type="submit">Update</button>
                                        <a href="<?= base_url('cart/delete/') ?><?= $cart['id_cart'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </form>
                        <?php } ?>
                        <tr>
                            <td colspan="3"><b>Order Total: Rp. <?= number_format($grandtotal['grandtotal'], 0, ",", ".") ?></b></td>
                            <td colspan="4" align="right">
                                <a href="<?= base_url('checkout') ?>" class='btn btn-sm btn-primary'>Check Out</a>
                        </tr>
                    </table>
                <?php } ?>

            </div>
        </div>
        <!--end row-->
    </div>
</section>
<!--start product details-->