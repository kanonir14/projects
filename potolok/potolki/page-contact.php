<?php 
/*
 * Template name: Page Contact
 */
?>

<?php get_header(); ?>

	<section class="coop">
		<div class="container">

			<h3>Натяжные потолки <span class="orange">в любой точке Украины</span></h3>

			<div class="coop-title">
				<div class="arrow-left"></div>
				<h1>Приглашение <span>к сотрудничеству</span></h1>
				<div class="btn-wrap">
					<a href="#forma" class="btn btn-orange btn-contact"><span>Отправить заявку</span></a>
				</div>
				<div class="arrow-right"></div>
			</div>
			
		</div>
	</section>

	<section class="information">
		<div class="container">
			<div class="content">
				<h4><?php the_title(); ?></h4>

				<?php
				while ( have_posts() ) :
					the_post();

					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</section>

	<!-- forma -->
	<div class="form">
		<div class="container">
			<div class="row flex flex-between flex-items">
				<div class="form-text">
					<p class="form-title">Заполинте форму</p>
					<p class="form-descr">и мы ответим на все интересующие вас вопросы</p>
				</div>
				<div class="form-link" id="forma">
					<?php echo do_shortcode( '[contact-form-7 id="138" title="Форма обратной связи"]' ); ?>
					<div class="form-privacy">* Ваши данные никогда не будут переданы 3-м лицам</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>