<style>
	body {
		background-image: url(images/logo/bg.png);
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
<div class="container pt-5">
	<div class="row justify-content-center mt-5">
		<div class="col-5">
			<div class="card pt-3" style="background-color: rgba(0,0,0, 0.5);">
				<div class="card-body mb-4">
					<div class="row justify-content-center">
						<div class="col-10">
							<form action="<?= base_url('register/register') ?>" method="POST" class="form-signin text-center">
								<?php $this->load->view('layouts/_alert') ?>

								<h1 class="h3 mb-3 text-white font-weight-bold py-5">REGISTER FORM</h1>

								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Nama Anda">
									<?= form_error('name', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<?= form_error('email', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group mb-5">
									<input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password">
									<?= form_error('password2', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>

								<button class="btn btn-success btn-lg btn-block" type="submit">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>