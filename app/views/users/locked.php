<div class="grid">
	<?php foreach ($param['users'] as $user) : if ($user->buyer_locked){ ?>
		<!-- Vertical -->
		<div class="card ml-3 mb-3 border-danger grid-view" style="width: 10rem;">
			<img src="<?php echo URL_ROUTE . '/images/' . $user->buyer_image; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"><?php echo $user->buyer_name . ' ' . $user->buyer_lastname ?></h5>
				<p class="card-text"> <?php echo $user->buyer_phone ?></p>
				<p class="card-text"> <?php echo $user->buyer_address ?></p>
				<a href="#" class="btn btn-primary">Ver más</a>
			</div>
		</div>
		<!-- Horizontal -->
		<div class="card mb-3 border-danger list-view" style="max-width: 480px;">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="<?php echo URL_ROUTE . '/images/' . $user->buyer_image; ?>" class="card-img" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?php echo $user->buyer_name . ' ' . $user->buyer_lastname ?></h5>
						<p class="card-text"> <?php echo $user->buyer_phone ?></p>
						<p class="card-text"> <?php echo $user->buyer_address ?></p> 
					</div>
				</div>
			</div>
		</div>  
	<?php } endforeach; ?>	
</div>