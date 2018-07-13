<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uaevakuator
 */

get_header();
?>


<!-- category header -->
<section class="category">
	<div class="container">
		<div class="flex flex-between">
			<div class="category__left">
				<!-- tel -->
				<div class="category__tel flex flex-items">
					<div class="category__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-11.png" alt="">
					</div>
					<ul class="category__num">
						<li>
							<a href="tel:<?php 
									the_field('telephone_1');
								?>">
								<?php 
									the_field('telephone_1');
								?>
							</a>
						</li>
						<li>
							<a href="tel:<?php 
									the_field('telephone_2');
								?>">
								<?php 
									the_field('telephone_2');
								?>
							</a>
						</li>
					</ul>
				</div>
				<ul class="country">
					<li><a href="#">UA</a></li>
					<li><a href="#">RU</a></li>
					<li>24/7 — 365 круглосуточно</li>
				</ul>
				<h1>Натяжные <span>потолки</span></h1>
				<p class="category-text"><?php the_field('title') ?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/header-car.png" alt="">
			</div>

			
		</div>
	</div>
</section>

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

<!-- item -->
<section class="order order2">
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

<section class="spec">
	<div class="container">
		<h4><span>ПРЕИМУЩЕСТВА</span> <?php the_field('specific'); ?></h4>
		<div class="flex flex-between flex-wrap">
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-2.png" alt="">
				</div>
				<h6>Стоимость</h6>
				<p>В сравнении с другими потолочными покрытиями, такими как штукатурка, гипсокартонные конструкции, у натяжных потолков самая низкая цена.</p>
			</div>
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-3.png" alt="">
				</div>
				<h6>Время установки</h6>
				<p>Скорость монтажа натяжного потолка в разы быстрее, чем потолка из других материалов.</p>
			</div>
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-4.png" alt="">
				</div>
				<h6>Не требуют ухода</h6>
				<p>Без особой надобности натяжные потолки не нуждаются в уходе. Плёнка не удерживает на себе частицы пыли, так как она абсолютно гладкая.</p>
			</div>
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-5.png" alt="">
				</div>
				<h6>Долговечность</h6>
				<p>Потолки не выгорают, не провисают, не трескаются. Их не нужно подкрашивать или подшпаклёвывать. Срок эксплуатации – более 20 лет.</p>
			</div>
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-6.png" alt="">
				</div>
				<h6>Цветовая гамма</h6>
				<p>Благодаря огромному количеству цветовых оттенков – более 180, каждый сможет подобрать цвет потолка на свой вкус.</p>
			</div>
			<div class="item">
				<div class="item__img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/product-7.png" alt="">
				</div>
				<h6>Прочность</h6>
				<p>Могут выдержать до 100 литров воды на метр квадратный.</p>
			</div>
		</div>
	</div>
</section>

<!-- потолки -->
<?php get_template_part( 'inc/roof'); ?>

<section class="eva">
	<div class="container">
		<h4><?php the_title(); ?></h4>
		<div class="eva__text">
			<div class="content">
				<div class="rating">
					<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				</div>
				<?php
				while ( have_posts() ) :
					the_post();

					the_content();

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</section>

<!-- Карта покрытия -->
<?php get_template_part( 'inc/category-region'); ?>

<!-- Галерея -->
<?php get_template_part( 'inc/gallery'); ?>


<!-- Блок с перезвоном -->
<?php get_template_part( 'inc/call'); ?>



<?php
get_footer();


