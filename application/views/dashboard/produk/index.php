<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="card-title" style="font-weight: bold;">Data Produk</h3>
        </div>
        <!-- Trigger Button PopUp -->
        <div class="col-md-6" style="text-align: right;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahproduk">
                Tambah Produk
            </button>
        </div>
        <!-- PopUp Start-->
        <div class="modal fade" id="tambahproduk" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form role="form" action="<?= base_url('produk/addProduk') ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Nama Produk</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="Kacamata Keren"
                                        name="nama">
                                </div>
                            </div>



                            <div class="col mb-3">
                                <label for="formFile" class="form-label">Foto Produk <small class="text-muted">(.jpg
                                        .jpeg
                                        .png)</small>
                                </label>
                                <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png"
                                    id="formFile" name="foto_produk">
                            </div>


                            <!-- <div class="col mb-3">
                                <label for="formFile" class="form-label">3D Model <small class="text-muted">(.glb)</small>
                                </label>
                                <input class="form-control" type="file" id="formFile" name="model_3d">
                            </div> -->



                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Harga</label>
                                <input type="text" id="nameBasic" class="form-control" placeholder="150000"
                                    name="harga">
                            </div>
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Stok</label>
                                <input type="text" id="nameBasic" class="form-control" placeholder="500" name="stok">
                            </div>
                            <div class="col mb-3"><label for="exampleFormControlTextarea1"
                                    class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- PopUp End-->
    </div>

    <!-- Responsive Table -->
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($produk as $value): ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value['nama'] ?>
                            </td>
                            <td style="text-align: center;">
                                <img src="<?= base_url('assets/images/') ?><?= $value['foto_produk'] ?>"
                                    style="width: 100px; height: 80px;">
                            </td>
                            <td>
                                <?= $value['harga'] ?>
                            </td>
                            <td>
                                <?= $value['stok'] ?>
                            </td>
                            <td>
                                <?= $value['deskripsi'] ?>
                            </td>
                            <td>
                                <div class="justify-content-md-center">
                                    <!-- AR Edit Button -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#ARmodel">AR Model</button>
                                    <!-- AR Edit PopUp start -->
                                    <div class="modal fade" id="ARmodel" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form role="form" action="<?= base_url('glb_upload/do_upload') ?>" method="POST"
                                                enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Tambah Model 3D AR
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="formFile" class="form-label">3D Model <small
                                                                        class="text-muted">(.glb)</small>
                                                                </label>
                                                                <input class="form-control" type="file" id="formFile"
                                                                    name="file_glb">
                                                            </div>
                                                        </div>
                                                        <div class="col mb-3">
                                                            <label for="nameBasic" class="form-label">Nama File 3D Model
                                                                .glb</label>
                                                            <input type="text" id="nameBasic" class="form-control"
                                                                placeholder="glasses_1" name="model_3d">
                                                        </div>
                                                        <div class="alert alert-warning" role="alert">
                                                            Pastikan nama file .glb sama persis dengan nama file 3D model!
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            value="simpan">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- AR Edit PopUp end -->
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>