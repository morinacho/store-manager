<!-- Modal -->
<div class="modal fade" id="create-product" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Agregar producto</h5>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="<?php echo URL_ROUTE ?>users/store" method="post"  enctype="multipart/form" target="_top">
				<div class="modal-body row">
					<div class="col-6">
						<div class="form-group">
							<input type="text" class="form-control" id="product-name" name="product-name" placeholder="Nombre">
						</div>
						<div class="form-group"> 
							<div class="input-group mb-2">
								<select class="form-control" id="product-waist" name="product-waist">
									<option selected disabled>Talle</option>
									<?php foreach ($param['waist'] as $waist) : ?>
									<option><?php echo $waist->waist_name ?></option>
									<?php endforeach; ?>
								</select>
								<div class="input-group-prepend">
									<div class="input-group-text"><a href="javascript:void(0);" class="material-icons text-decoration-none" data-toggle="modal" data-target="#create-waist">add</a> </div>
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="input-group mb-2">
								<select class="form-control" id="product-category" name="product-category">
									<option selected disabled>Categoria</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<div class="input-group-prepend">
									<div class="input-group-text"><a href="javascript:void(0);" class="material-icons text-decoration-none" data-toggle="modal" data-target="#create-product">add</a> </div>
								</div>
							</div>	
						</div>	 
						<div class="form-group">
							<textarea class="form-control" id="product-details" name="product-details" maxlength="250" rows="1" placeholder="Detalles del producto"></textarea>
						</div> 				
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="ml-4" id="product-pic" for="product-img"></label>
							<input type="file" class="form-control-file" id="product-img"> 
						</div>
					</div>
					
					<div class="form-group col-6">
						<input type="number" class="form-control" id="product-purchase_price" name="product-purchase-price" placeholder="Precio de compra"> 
					</div>
					<div class="form-group col-6">
						<input type="number" class="form-control" id="product-sale-price" name="product-sale-price" placeholder="Precio de venta"> 
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<input type="submit" class="btn btn-primary" value="Confirmar">
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
	
	require_once APP_ROUTE . '/views/waist/create.php';  

?>