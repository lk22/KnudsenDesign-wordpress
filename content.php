<?php if(!page_title() === 'Home') { ?>
<div class="container-fluid content page <?php echo page_title(); ?>-content" id="page-content">
	<?php 

		if(page_title() === 'Home'){

			?> 
				
			<?php

		} else {
			the_content();
		}
	 ?>
</div>
<?php } else { ?>

	<?php load_pages([]);?>

<?php } ?>