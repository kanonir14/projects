<!-- Карта покрытия -->
<section class="maps">
	<div class="container">
		<h4>Карта покрытия</h4>

		<div class="maps__ul">

				<?php wp_nav_menu( array(
					'menu' => 'nav 1',
					'container' => 'ul',
					'container_class' => 'maps__list',
					'menu_class' => 'maps__list',
					'link_before'     => '<span>',
					'link_after'      => '</span>'
					)); 
				?>
				<?php wp_nav_menu( array(
					'menu' => 'nav 2',
					'container' => 'ul',
					'container_class' => 'maps__list',
					'menu_class' => 'maps__list',
					'link_before'     => '<span>',
					'link_after'      => '</span>'
					)); 
				?>
				<?php wp_nav_menu( array(
					'menu' => 'nav 4',
					'container' => 'ul',
					'container_class' => 'maps__list',
					'menu_class' => 'maps__list',
					'link_before'     => '<span>',
					'link_after'      => '</span>'
					)); 
				?>
		</div>
		

		<img src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" alt="">
	</div>
</section>
