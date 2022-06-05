<!-- List Item -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="font-weight-bold">Menu</h1>
			<div class="col-lg-12" style="padding: 0px;">
				<div class="row justify-content-center">
					<div class="ml-3"><a href="<?= base_url('/home/search_product?category=Coffee') ?>"><button class="btn-dark rounded-pill px-3"><i class="fas fa-coffee"></i><br>Coffee</button></a></div>
					<div class="ml-3"><a href="<?= base_url('/home/search_product?category=Non-Coffee') ?>"><button class="btn-dark rounded-pill px-3"><i class="fas fa-beer"></i><br>Non-Coffee</button></a></div>
					<div class="ml-3"><a href="<?= base_url('/home/search_product?category=Snack') ?>"><button class="btn-dark rounded-pill px-3"><i class="fas fa-cheese"></i><br>Snack</button></a></div>
				</div>
				<div class="row justify-content-end">
					<form style="width: fit-content;" style="width:70%" action="<?= base_url('/home/search_product') ?>" method="GET">
						<input style="width: 70%;" type="text" class="artho-search-box" name="search" placeholder="Find Product...">
						<input type="submit" class="btn-dark px-2 p-1 rounded-pill" value="Search">
					</form>
				</div>
			</div>
			<hr>
		</div>
	</div>

	<div class="row mb-5">
		<?php foreach ($products as $product) : ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mt-2">
				<div class="card shadow" style="border-radius: 30px;">
					<img src="<?= base_url() ?>/images/product/<?= $product['image'] ?>" class="card-img-top" style="border-radius:30px;" alt="<?= $product['name'] ?>">
					<div class="card-body">
						<h6 class="card-title font-weight-bold"><?= $product['name'] ?></h6>
						<h6 class="text-muted"><?= ucfirst($product['edition']) ?> Category</h6>
						<h3 class="text-right text-warning price mt-2">Rp.<?= number_format($product['price']); ?></h3>
						<form action="<?= base_url('cart/add') ?>" method="POST">
							<input type="hidden" name="product_id" value="<?= $product['id'] ?>">
							<button type="submit" class="btn btn-large btn-success btn-block badge-pill mt-3">ADD TO CART</button>
						</form>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- End of List Item -->

<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->