<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uaevakuator
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/fancybox/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<meta content="initial-scale=1, width=device-width" name="viewport">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
