<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<!-- Logo -->
	<a class="navbar-brand" href="<?php echo URL_ROUTE ?>">Store Manager</a>

	<!-- Button on small -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse justify-content-end" id="navbarToggle">

		<!-- Menu -->
		<ul class="navbar-nav mt-2 mt-lg-0">
			<li class="nav-item ml-3 active">
				<a class="nav-link" href="<?php echo URL_ROUTE ?>">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item ml-3">
				<a class="nav-link" href="<?php echo URL_ROUTE ?>products">Productos</a>
			</li>
			<li class="nav-item ml-3">
				<a class="nav-link" href="<?php echo URL_ROUTE ?>sales">Ventas</a>
			</li>
			<li class="nav-item ml-3">
				<a class="nav-link" href="<?php echo URL_ROUTE ?>users">Clientes</a>
			</li>
			<li class="nav-item ml-3">
				<a class="nav-link" href="<?php echo URL_ROUTE ?>orders">Encargos</a>
			</li>

			<!-- Notification -->
			<li class="nav-item dropdown ml-4">
				<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons">notifications</span></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">None</a>
				</div>
			</li>

			<!-- Menu -->
			<li class="nav-item dropdown ml-1">
				<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons">settings</span></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Metricas</a>
					<a class="dropdown-item" href="#">Configuración</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo URL_ROUTE ?>auth/logout"">Salir</a>
				</div>
			</li>
		</ul>

		<!-- Search 
		<form class="form-inline my-2 my-lg-0">
			<div class="input-group mb-0">
				<input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button type="submit" class="input-group-text" id="basic-addon2"><span class="material-icons">search</span></button>
				</div>
			</div>
		</form>
		-->
	</div>
</nav> 