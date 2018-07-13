<section class="call">
	<div class="container">
		<div class="row flex flex-between">
			<div class="call__info">
				<p class="call-title">Остались вопросы?</p>
				<p class="call-descr">Звоните нам в любое время</p>

				<div class="call__tel flex flex-items">
					<div class="call__icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-8.png" alt="">
					</div>
					<div class="main-tel">
						<h6>Диспетчер</h6>
						<a href="tel:<?php the_field('telephone_1');?>" class="tel1"><span><?php the_field('telephone_1');?></a>
						<a href="tel:<?php the_field('telephone_2');?>" class="tel2"><span><?php the_field('telephone_2');?></a>
					</div>
				</div>
			</div>
			<div class="call__img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/girl.jpg" alt="">
			</div>
		</div>
	</div>
</section>