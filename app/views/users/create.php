<!-- Modal -->
<div class="modal fade" id="create-user" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Agregar cliente</h5>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="<?php echo URL_ROUTE ?>users/store" method="post"  enctype="multipart/form" target="_top">
				<div class="modal-body row">
					<div class="col-6">
						<div class="form-group">
							<input type="text" class="form-control" id="user-name" name="user-name" placeholder="Nombre"  >
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="user-lastname" name="user-lastname" placeholder="Apellido"  > 
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id="user-phone" name="user-phone" placeholder="Numero de telefono"> 
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="user-address" name="user-address" placeholder="Direccion"> 
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="ml-4" id="user-pic" for="user-img"></label>
							<input type="file" class="form-control-file" id="user-img"> 
						</div>
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