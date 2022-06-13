<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-horver table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th colspan="4">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><img class="img-fluid" src="<?php echo base_url("assets/bukti_pembayaran/").$inv->bukti_pembayaran ?>" alt=""></td>
            
            <?php if($inv->status_pembayaran == "selesai"){ ?>
                <td><p class="alert alert-info">Diterima</p></td>
            <?php }else{ ?>
                <td><?php echo anchor('admin/invoice/rubah_status/'.$inv->id, '<div class="btn btn-sm btn-info">Terima</div>') ?></td>
            <?php } ?>
            <td><a class="btn btn-success btn-sm" href="<?php echo base_url("assets/bukti_pembayaran/").$inv->bukti_pembayaran ?>" download>Download Bukti</td>
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            <td><?php echo anchor('admin/invoice/hapus/'.$inv->id, '<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>