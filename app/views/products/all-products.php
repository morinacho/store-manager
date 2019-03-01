<div class="grid">
	<?php foreach ($param['products'] as $product) : if (true){ ?>
		<!-- Vertical -->
			<div class="card ml-3 mb-3 grid-view" style="width: 10rem;">
				<a href="#"> 
					<img src="<?php echo URL_ROUTE . '/images/' . $product->product_image; ?>" class="card-img-top" alt="...">
					<div class="card-img-overlay mt-5"> 
						<p class="card-title text-center text-truncate mt-5" style="font-size:  0.96em"><?php echo $product->product_name ?></p> 
					</div>
				</a>
			</div>
		
		<!-- Horizontal -->
		<div class="card mb-3 list-view" style="max-width: 480px;">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="<?php echo URL_ROUTE . '/images/' . $product->product_image; ?>" class="card-img" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?php echo $product->product_name ?></h5>
						<p class="card-text"> <?php echo $product->product_sale_price ?></p>
						<p class="card-text"> <?php echo $product->product_details ?></p> 
					</div>
				</div>
			</div>
		</div>  
	<?php } endforeach; ?>	
</div>

 	