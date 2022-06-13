<?php if(empty($_GET['id'])){ ?>
<div class="container-fluid">
	<div class="alert-success">
		<p class="text-center">Selamat, Pesanan Anda telah Berhasil diproses!!!!</p>
	</div>
</div>
<?php } ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
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
							<p><?php echo $pesanan ?></p>
						</div>

						<div></div>

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-primary text-white">
					Informasi Pembayaran
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p>Silahkan melakukan pembayaran melalui nomor rekening di bawah</p>
						</div>
						<div class="col-md-12">
							<hr>BRI - xxxxx</hr>
							<hr>BNI - xxxxx</hr>
							<hr>BCA - xxxxx</hr>
							<hr>Mandiri - xxxxx</hr>
						</div>
						<div class="col-md-12">
							<?php
                                if(empty($invoice->bukti_pembayaran)){
                            ?>
							<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
								data-target="#exampleModal">Upload Bukti Pembayaran</button>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form method="post"
											action="<?php echo base_url('index.php/dashboard/rubah_proses_pesanan?id='.$invoice->id) ?>"
											enctype="multipart/form-data">
											<div class="modal-body">
												<div class="form-group">
													<input type="file" name="bukti_pembayaran" id=""
														class="form-control-file">
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-success">Kirim Bukti</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<?php }else{ ?>
								<?php if($invoice->status_pembayaran == "selesai"){ ?>
									<p class="alert alert-success"><i class="fa fa-info"></i> Pesanan diterima</p>
									<a target="_blank" href="<?= base_url("index.php/dashboard/print_invoice/".$invoice->id) ?>"><button class="btn btn-primary">Print bukti invoice</button></a>
								<?php }else{ ?>
									<p class="alert alert-info"><i class="fa fa-info"></i> Menunggu Konfirmasi</p>
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
