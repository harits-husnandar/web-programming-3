<div class="container-fluid">
	<div class="row">
        <div class="col-md-12 text-center">
            <h1 style="margin-top: 40px;">Bukti invoice pembayaran</h1>
        </div>
		<div class="col-md-8" style="margin-left: auto;margin-right: auto;">
			<div class="card">
				<div class="card-header bg-success text-white">
					Invoice Pemesanan Produk
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<b>Nama Pemesan</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->nama ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Alamat Pengiriman</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->alamat ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Nama bank</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->bank ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Jenis Pengiriman</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->pengiriman ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Tanggal Pemesanan</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->tgl_pesan ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Batas Pembayaran</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $invoice->batas_bayar ?></p>
						</div>

						<div></div>

						<div class="col-md-6">
							<b>Jumlah Pembayaran</b>
						</div>
						<div class="col-md-1">:</div>
						<div class="col-md-5">
							<p><?php echo $total_pesanan ?></p>
						</div>

						<div></div>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8" style="margin-top:30px;margin-left: auto;margin-right: auto;">
			<div class="card">
				<div class="card-header bg-info text-white">
					Produk yang dipesan
				</div>
				<div class="card-body">
					<table style="width: 100%;" class="table-striped">
                        <thead>
                            <tr>
                                <th>Nama barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pesanan AS $see) ?>
                            <tr>
                                <td><?= $see->nama_barang ?></td>
                                <td><?= $see->jumlah ?></td>
                                <td><?= $see->harga ?></td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
    </div>
</div>
<script>
    window.print();
</script>