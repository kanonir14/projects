<?php/*
 * Template name: Front page
 */
?>
 <?php get_header(); ?>

<header class="header">
	<div class="container">
		<div class="header-title">
			<div class="arrow-left"></div>
			<h1>Натяжные потолки <span>в любой точке Украины</span></h1>
			<div class="btn-wrap">
				<a href="#" class="btn btn-orange"><span>Заказать консультацию</span></a>
			</div>
			<div class="arrow-right"></div>
		</div>
		
	</div>
</header>


<!-- item -->

<section class="order">
	<div class="container">
		<h4>Как заказать натяжной потолок</h4>
		<div class="row flex flex-between">
			<div class="item">
				<div class="order__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/img-1.png" alt="">
				</div>
				<div class="order__info">
					Выберите <br>город / район
				</div>
			</div>
			<div class="item">
				<div class="order__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/img-2.png" alt="">
				</div>
				<div class="order__info">
					позвонить <br>по указаным <br>номерам
				</div>
			</div>
			<div class="item">
				<div class="order__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/img-3.png" alt="">
				</div>
				<div class="order__info">
					Наши <br>специалисты <br>уже в пути
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Карта покрытия -->
<?php get_template_part( 'inc/region'); ?>


<!-- Наши услуги -->
<section class="service">
	<div class="container">
		<h4>Почему <span>выбирают</span> нас</h4>
		<p class="service__info">Мы всегда стремимся лучше и ближе к клиентам. За годы мы заработали хорошую положительную репутацию, но это нас не остановило с каждым днем мы улучшаем качество наших услуг! Ниже только некоторые причины почему выбирают нас:</p>
		<div class="flex flex-between flex-wrap">
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-1.png" alt="">
				</div>
				<div class="item__text">
					<h5>Квалифицированные <br>операторы</h5>
					<p>В нашей команде работают только высококвалифицированные операторы и водители.</p>
				</div>
			</div>
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.png" alt="">
				</div>
				<div class="item__text">
					<h5>Качество <br>и надежность</h5>
					<p>Вся наша спецтехника проходит своевременный технический осмотр и необходимое обслуживание.</p>
				</div>
			</div>
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-3.png" alt="">
				</div>
				<div class="item__text">
					<h5>Оперативное <br>обслуживание</h5>
					<p>Подача в течении часа! предоставление спецтехники строго в оговоренное сроки!</p>
				</div>
			</div>
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-4.png" alt="">
				</div>
				<div class="item__text">
					<h5>Скидки!</h5>
					<p>Постоянным клиентам на всю нашу спецтехнику предоставляется гибкая система скидок!</p>
				</div>
			</div>
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-5.png" alt="">
				</div>
				<div class="item__text">
					<h5>Оптимальная <br>стоимость</h5>
					<p>Лучшая стоимость услуг спецтехники и аренды спецтехники для решения вашей задачи.</p>
				</div>
			</div>
			<div class="item flex">
				<div class="item__icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-6.png" alt="">
				</div>
				<div class="item__text">
					<h5>Любая форма <br>оплаты</h5>
					<p>Оплата услуг спецтехники проводиться любым удобным для вас способом: наличными, переводом на карту, с ндс, без ндс.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="eva">
	<div class="container">
		<h4><?php the_title(); ?></h4>
		<div class="eva__text">
			<div class="content">
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
	</div>
</section>


<!-- потолки -->
<?php get_template_part( 'inc/roof'); ?>

<!-- Галерея -->
<?php get_template_part( 'inc/gallery'); ?>

<!-- Колл центр -->
<?php get_template_part( 'inc/call'); ?>

 <?php get_footer(); ?>