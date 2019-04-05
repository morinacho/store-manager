<?php 
	require_once APP_ROUTE . '/views/modules/header.php';
	$user = $param['user']
?>	
<div class="row justify-content-center mt-4">
	<div class="col-2">
		<img src="<?php echo URL_ROUTE . '/images/' . $user->buyer_image; ?>" class="card-img-top" alt="...">
		<p class="text-center"><?php echo $user->buyer_name . " " . $user->buyer_lastname; ?></p>
	</div>
	<div class="col-8 mt-5">
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Compras</a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pagos</a>
				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Encargos</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><h1>Compras</h1></div>
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><h1>Pagos</h1></div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><h1>Encargos</h1></div>
		</div>
	</div>

</div>



<?php require_once APP_ROUTE . '/views/modules/footer.php'; ?>