<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()) {
					foreach ($keranjang as $items) {
						$grand_total = $grand_total + $items['subtotal'];
					}

					echo "<h4>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
				?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>

			<form method="post" action="<?php echo base_url('index.php/dashboard/proses_pesanan') ?> " enctype="multipart/form-data" class="needs-validation">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<textarea type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="No. Telepon Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control" name="pengiriman">
						<option value="JNE">JNE</option>
						<option value="JNT">JNT</option>
						<option value="Pos Indonesia">Pos Indonesia</option>
						<option value="SiCepat">SiCepat</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control" name="bank">
						<option value="BRI - xxxxx">BRI - xxxxx</option>
						<option value="BNI - xxxxx">BNI - xxxxx</option>
						<option value="BCA - xxxxx">BCA - xxxxx</option>
						<option value="Mandiri - xxxxx">Mandiri - xxxxx</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-4">Pesan</button>
			</form>

		<?php
				} else {
					echo "<h4>Keranjang Belanja Anda Masih Kosong";
				}
		?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>