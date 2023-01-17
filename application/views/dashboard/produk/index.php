<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="card-title" style="font-weight: bold;">Data Produk</h3>
        </div>
        <!-- Trigger Button PopUp -->
        <div class="col-md-6" style="text-align: right;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambah Produk
            </button>
        </div>
        <!-- PopUp Start-->
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form role="form" action="<?= base_url('produk/addProduk') ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Tambah Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Nama Produk</label>
                                    <input type="text" id="nameBasic" class="form-control" placeholder="Kacamata Keren">
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="formFile" class="form-label">Foto Produk <small class="text-muted">(.jpg
                                        .jpeg
                                        .png)</small>
                                </label>
                                <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png"
                                    name="image" id="formFile">
                            </div>
                            <div class="col mb-3">
                                <label for="formFile" class="form-label">3D Model AR <small class="text-muted">(.gltf
                                        folder)</small>
                                </label>
                                <input class="form-control" type="file" accept="model/gltf+json, model/gltf-binary"
                                    name="3dmodel" webkitdirectory directory multiple id="formFile">
                            </div>
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Harga</label>
                                <input type="text" id="nameBasic" class="form-control" placeholder="150000">
                            </div>
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Stok</label>
                                <input type="text" id="nameBasic" class="form-control" placeholder="500">
                            </div>
                            <div class="col mb-3"><label for="exampleFormControlTextarea1"
                                    class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                        </div>
                    </div>
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
                            <td><?= $no++; ?></td>
                            <td><?= $value['nama_produk'] ?></td>
                            <td style="text-align: center;">
                                <img src="<?= base_url('assets/upload_produk/') ?><?= $value['foto_produk'] ?>" style="width: 100px; height: 80px;">
                            </td>
                            <td><?= $value['harga'] ?></td>
                            <td><?= $value['stok'] ?></td>
                            <td><?= $value['deskripsi_produk'] ?></td>
                            <td>
                                <div class="justify-content-md-center">
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
    <div class="modal fade" id="tambah">
        <div class="modal-dialog">
            <form role="form" action="<?= base_url('produk/addProduk') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <select class="form-control" name="id_kategori_fk">
                                <option value="">Pilih</option>
                                <?php foreach ($kategori as $val) { ?>
                                    <option value="<?= $val['id_kategori'] ?>">
                                        <?= $val['nama_kategori'] ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label for="custom-file">Foto Produk</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="foto_produk">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Config AR</label>
                            <input type="text" class="form-control" name="config_AR">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Produk</label>
                            <input type="text" class="form-control" name="deskripsi_produk">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>