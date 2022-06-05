<div class="container">

	<!-- Alert -->
	<?php $this->load->view('layouts/_alert') ?>
	<!-- End of alert -->

	<!-- Hero -->
	<div class="row mt-5">		
		<div class="col">
			<img src="<?= base_url() ?>/images/product/<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['name'] ?>" style="width: 330px">
		</div>
		<div class="col-5">
			<h2 class="font-weight-bold"><?= $product['name'] ?></h2>
			<h4 class="font-weight-normal"><?=  ucfirst($product['edition']) ?> Category</h4>
			<br> <br>
			<p><?= character_limiter($product['description'], 200) ?></p>
			<a href="#description" class="text-info font-weight-bold">View more</a>
			<br> <br>
			<p class="font-weight-bold">Category</p>
			<h5><span class="badge badge-info badge-pill p-2"><?=  ucfirst($product['edition']) ?></span></h5>
		</div>
		<div class="col">
			<div class="card">
				<div class="card-body text-center">
					<h2 class="text-center text-warning price mt-4 mb-4">Rp.<?= number_format($product['price']); ?></h2>
					<form action="<?= base_url('cart/add') ?>" method="POST">
						<input type="hidden" name="product_id" value="<?= $product['id'] ?>">
						<button type="submit" class="btn btn-large btn-success btn-block badge-pill mb-4">ADD TO CART</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of hero -->

	<!-- Summary -->
	<div class="row mt-5 mb-2">
		<div class="col">
			<h3 id="description">Description</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col bg-light p-5">
			<?= $product['description'] ?>
		</div>
	</div>
	<!-- End of summary -->

	<!-- Details -->
	<div class="row mt-5 mb-2">
		<div class="col">
			<h3>Details</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col bg-light p-5">
			<?= $product['requirements'] ?>
		</div>
	</div>
	<!-- End of Details -->
</div>

<?php $this->load->view('layouts/_footer') ?>
