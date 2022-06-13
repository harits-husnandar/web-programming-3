<div class="container-fluid">

    <div class="row text-center mt-4">

        <?php foreach ($bunga_tangan as $brg) : ?>

            <div class="col-md-3">
                <div class="card mb-3 shadow-lg p-1 bg-body rounded lol">
                    <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="..." style="width: 246px; height: 164px; object-fit:cover ;border: 1px outset #00FFAB;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $brg->nama_barang ?></h5>

                        <div class="h5 px-3 py-2 mb-3 text-warning">Rp.<?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                        <?php echo anchor(
                            'dashboard/tambah_ke_keranjang_1/' . $brg->id_brg,
                            '<div class="btn btn-sm btn-outline-primary mb-4"">Tambah ke Keranjang</div>'
                        ) ?>
                        <?php echo anchor(
                            'dashboard/detail/' . $brg->id_brg,
                            '<div class="btn btn-sm btn-outline-success mb-4">Detail</div>'
                        ) ?>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <?= $this->pagination->create_links(); ?>
    </div>
</div>