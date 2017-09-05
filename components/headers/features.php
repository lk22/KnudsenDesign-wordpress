<div class="container-fluid content header features-sections" id="features">
	<h3 class="text-center section-headline">Hvad jeg kan hjælpe dig med</h3>
	<?php 

		$features = get_field('features');

		if($features) {
			foreach($features as $feature) {

				?>
		
					<div class="col-md-4 col-lg-4 feature">
						<img class="center-block img img-response img-circle" src="<?php echo $feature['sizes']['thumbnail']; ?>" alt="<?php echo $feature['alt']; ?>">
						<h3 class="text-center caption"><?php echo $feature['caption']; ?></h3>
						<h4 class="text-center description"><?php echo $feature['description']; ?></h4>
					</div>

				<?php

			}
		}

	 ?>
</div>