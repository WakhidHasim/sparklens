<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="card-title" style="font-weight: bold;">Data Produk</h3>
        </div>
        <div class="col-md-6" style="text-align: right;">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Produk</button>
        </div>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <div class="justify-content-md-center">
                                <button class="btn btn-warning">Edit</button>
                            </div>
                        </td>
                    </tr>
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
                                <?php
                                foreach ($kategori as $val) { ?>
                                    <option value="<?= $val['id_kategori'] ?>"><?= $val['nama_kategori'] ?></option>
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