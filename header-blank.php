<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php wp_title( '' ); ?>
	<?php
	if ( $_GET['bvrrp'] )
		echo ' Reviews';
	if ( $_GET['bvqap'] )
		echo ' Questions';
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://plus.google.com/107104241400965217576/posts" rel="publisher" />
<!--[if lte IE 8]>
	<script type="text/javascript">
		document.createElement('section');
	</script>
<![endif]-->
<?php
	wp_head();
?>
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectivizr-1.0.2/selectivizr-min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>

	<?php custom_data_layer(); ?>
	
	<?php google_tag_manager(); ?>

	<?php google_tag_manager_criteo(); ?>

    <div class="bd">
    	<div class="wrap">
