<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i>Tambah Barang</button>

    <table class="table table-bordered table-hover table-striped table-borderless">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        foreach ($jml_brg as $brg) : ?>

            <tr>
                <td><?php echo ++$start ?></td>
                <td><?php echo $brg['nama_barang']; ?></td>
                <td><?php echo $brg['keterangan'] ?></td>
                <td><?php echo $brg['kategori'] ?></td>
                <td><?php echo $brg['harga'] ?></td>
                <td><?php echo $brg['stok'] ?></td>
                <td><?php echo anchor('admin/data_barang/edit/' . $brg['id_brg'], '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('admin/data_barang/hapus/' . $brg['id_brg'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>

        <?php endforeach ?>
    </table>

    <?= $this->pagination->create_links(); ?>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/admin/data_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form=group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="form=group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form=group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option>Bunga Tangan</option>
                            <option>Bunga Meja</option>
                            <option>Bunga Standing</option>
                        </select>
                    </div>

                    <div class="form=group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form=group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form=group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>