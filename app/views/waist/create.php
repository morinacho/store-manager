<!-- Modal -->
<div class="modal fade" id="create-waist" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Agregar producto</h5>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="<?php echo URL_ROUTE ?>waists/store" method="post" target="_top">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="waist-name" name="waist-name" placeholder="Nombre">
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<input type="submit" class="btn btn-primary" name="create-waist" value="Confirmar">
				</div>
			</form>
		</div>
	</div>
</div>