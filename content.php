<?php if(page_title() === 'about' && page_title() === 'Kontakt') { ?>
	<div class="container-fluid content page <?php echo page_title(); ?>-content" id="page-content">
		<?php 
			the_content();
		?>
	</div>
<?php } else { ?>
	<?php 
		/**
		 * getting specific sections
		 */
		load_components([
			'headers/home',
			'headers/features'
		]);
	?>
<?php } ?>