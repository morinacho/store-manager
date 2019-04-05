<?php require_once APP_ROUTE . '/views/modules/header.php'; ?>
	
<div class="row mt-5">
	<div class="col-2">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#all-users" role="tab">Todos</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab">Ambos</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab">Joyas</a>
			<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab">Ropa de cama</a>
		</div>
	</div>
	<div class="col-10">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="row justify-content-between">
				<div class="col-4"> <h2> Productos </h2></div>	 

				<div class="col-3 align-content-center">
					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						<div class="btn-group btn-group-sm mr-2 view-button" role="group" aria-label="First group">
							<a href="javascript:void(0);" class="material-icons filter-button-group text-decoration-none" data-filter=".grid-view">view_module</a>
							<a href="javascript:void(0);" class="material-icons filter-button-group text-decoration-none text-reset" data-filter=".list-view">view_stream</a> 
						</div>
						<div class="btn-group  btn-group-sm mr-2" role="group" aria-label="Second group">
							<i class="material-icons">insert_invitation</i>
							<i class="material-icons">vertical_align_bottom</i>
							<i class="material-icons">vertical_align_top</i>
						</div>
						<div class="btn-group btn-group-sm" role="group" aria-label="Third group">
							<a href="javascript:void(0);" class="material-icons text-decoration-none" data-toggle="modal" data-target="#create-product">add_circle</a> 
						</div>
					</div>			
				</div>
			</div>

			<div class="tab-pane fade show active" id="all-users" role="tabpanel"">
				<?php require_once APP_ROUTE . '/views/products/all-products.php'; ?>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel">Ultimos agregados</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel">
				<?php require_once APP_ROUTE . '/views/users/defaulter.php'; ?>
			</div>
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel">
				<?php require_once APP_ROUTE . '/views/users/locked.php'; ?>
			</div>
		</div>
	</div>	 
</div>
	
<?php 
	
	require_once APP_ROUTE . '/views/products/create.php'; 
	require_once APP_ROUTE . '/views/modules/footer.php'; 

?>