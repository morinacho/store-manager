<div class="grid">
	<?php foreach ($param['users'] as $user) : if (!$user->buyer_locked){ ?>
		<!-- Vertical -->
			<div class="card ml-3 mb-3  <?php if ($user->buyer_defaulter){ echo 'border-warning';}?> grid-view" style="width: 10rem;">
				<a href="<?php echo URL_ROUTE ?>users/show/<?php echo $user->buyer_id ?>"> 
					<img src="<?php echo URL_ROUTE . '/images/' . $user->buyer_image; ?>" class="card-img-top" alt="...">
					<div class="card-img-overlay mt-5">  
						<p class="card-title text-center text-truncate mt-5" style="font-size:  0.96em"><?php echo $user->buyer_name . ' ' . $user->buyer_lastname ?></p> 
					</div>
				</a>
			</div>
		
		<!-- Horizontal -->
		<div class="card mb-3 <?php if ($user->buyer_defaulter){ echo 'border-warning';}?> list-view" style="max-width: 480px;">
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
<i class="material-icons">view_module</i>
<i class="material-icons">view_stream</i>
<i class="material-icons">edit</i>
<i class="material-icons">person_add</i>
<i class="material-icons">text_rotate_vertical</i>
<i class="material-icons">filter_list</i>
<i class="material-icons">sort</i>
<i class="material-icons">insert_invitation</i>
<i class="material-icons">vertical_align_bottom</i>
<i class="material-icons">vertical_align_top</i>
<i class="material-icons">block</i>