<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partial/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partial/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partial/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partial/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/produk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($produk as $produk): ?>
									<tr>
										<td width="150">
											<?php echo $produk->nama ?>
										</td>
										<td>
											<?php echo $produk->harga ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/product/'.$produk->image) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($produk->deksripsi, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/products/edit/'.$produk->produk_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$produk->produk_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partial/sticky.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partial/schrolltop.php") ?>
	<?php $this->load->view("admin/_partial/modal.php") ?>

	<?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>
