<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Checkout Success</h5>	
				<div class="card-body">
					<h4><strong>Order Number : <?= $content['invoice'] ?></strong></h4>
					<p>Thank you for shopping.</p>
					<br>
					<p>Please Payment to Casher</p>
					<ol>
						<li>Total payment <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
