<!-- List Item -->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8" style="padding: 10px;">
            <span class="head">Hasil Pencaraian "<?= $_GET['search'] ?? '' ?>"
                <?php
                if (array_key_exists('category', $_GET)) {
                    echo 'pada ' . $_GET['category'];
                }
                ?>
            </span>
            <a class="navbar-brand bg-dark text-white p-2 ml-3 rounded" href="<?= base_url('home') ?>">
			    Back
		    </a>
        </div>
        <div class="col-lg-4 d-flex justify-content-end align-items-center">
            <form style="width: fit-content;" action="<?= base_url('/home/search_product') ?>" method="GET">
                <input type="text" class="artho-search-box" name="search" placeholder="Find Product...">
                <?php
                if (array_key_exists('category', $_GET)) { ?>
                    <input type="text" name="category" readonly hidden value="<?= $_GET['category'] ?>">
                <?php } ?>
                <input type="submit" class="btn-dark px-2 p-1 rounded-pill" value="Search">            
            </form>
        </div>
    </div>
    <hr>

    <?php
    if (count($products) > 0) { ?>
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
    <?php } else { ?>

        Sayang sekali data tidak ditemukan :(

    <?php } ?>


</div>
<!-- End of List Item -->

<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->