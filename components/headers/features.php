<div class="container-fluid content header features-sections" id="features">
	<h3 class="text-center section-headline">Hvad jeg kan hjælpe dig med</h3>
	<div class="container">
	<?php 

		$features = get_field('features');

		if($features) {
			foreach($features as $feature) {

				?>
		
					<div class="col-sm-6 col-md-4 col-lg-4 feature">
					<div class="overlay">
						<h3 class="text-center caption"><?php echo $feature['caption']; ?></h3>
						<h4 class="text-center description"><?php echo $feature['description']; ?></h4>
					</div>
						<img class="center-block img img-response" height="250" width="250" src="<?php echo $feature['sizes']['medium'];?>" alt="<?php echo $feature['alt']; ?>">
					</div>

				<?php

			}
		}

	 ?>
	 </div>
</div>