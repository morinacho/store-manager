<!doctype html>
<html>
	<head>
		<meta charset="utf_8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta http-equiv="X-UA-Compatible" content="id=edge">
		<title><?php echo SITENAME; ?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap-grid.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="<?php echo URL_ROUTE ?>/css/login.css">
		<style>
			body{
				 
			}
		</style>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<section id="main" style="margin-top:8% ;">
				<header>
					<span class="avatar"><img src="<?php echo URL_ROUTE ?>/images/avatar.jpg" alt="" /></span>
					<form action="<?php echo URL_ROUTE ?>auth/login" method="post" target="_top">
						<div class="form-group"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="material-icons">person</i></div>
								</div>
								<input type="email" name="user-email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><i class="material-icons">lock</i></div>
								</div>
								<input type="password" name="user-password" class="form-control" placeholder="Contraseña">
							</div>
						</div>
						<button type="submit" name="login">Acceder</button>
					</form>
				</header>
			</section>

			<!-- Footer -->
			<footer id="footer" style="margin-top:8% ;">
				<ul class="copyright">
					<li>&copy; Store Manager V 2.3</li>
				</ul>
			</footer> 
		</div>

		<!-- Scripts -->
		<script>
			if ('addEventListener' in window) {
				window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
				document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
			}
		</script>
	</body>
</html>