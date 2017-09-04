<div class="container-fluid content page <?php echo page_title(); ?>-content" id="page-content">
	<?php 

		if(page_title() === 'Home'){

			?> 

				<h2 class="text-center">Brug for et nyt website</h2>
				<h4 class="text-center">eller måske brug for hjælp til en mindre opgave</h4>
				<h5 class="text-center">Tag kontakt til mig <a href="/contact">her</a></h5>

			<?php


		} else {
			the_content();
		}
	 ?>
</div>