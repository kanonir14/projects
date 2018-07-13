<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uaevakuator
 */

?>


<div class="pre-footer">
	<div class="container">
		<h4>Областные центры Украины</h4>
		<div class="row flex flex-between">
			<?php wp_nav_menu( array(
				'menu' => 'Region',
				'container' => 'ul',
				'container_class' => 'pre-footer__list',
				'menu_class' => 'pre-footer__list'
				)); 
			?>
			<div class="pre-footer__info flex flex-between">
				<div class="btn-wrap">
					<a class="btn-blue" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-9.png" alt=""> На главную страницу</a>
				</div>
				<div class="text">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icon-12.png" alt="">
					<p class="text-title">Свободных специалистов</p>
					<div class="count">1201</div>
				</div>
			</div>
		</div>
	</div>
	<p class="copyright">© 2011-2018 Подача эвакуатора в любую точку Украины. Все права защищены. </p>
</div>

<footer class="footer">
	<div class="container">
		<div class="footer-info flex flex-center">
			<p><img src="img/icon-10.png" alt=""></p>
			<p>подача эвакуатора в любую точку украины</p>
		</div>
		<a class="arrow" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></a>
	</div>
	
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js" type="text/javascript"></script>	

<?php wp_footer(); ?>
</body>
</html>


