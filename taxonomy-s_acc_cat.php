<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */

get_header(); ?>
<div class="cols">
<div class="main col w730">
<div class="main-title">
<?php echo apply_filters('taxonomy-images-queried-term-image', '', array('taxonomy'=>'s_acc_cat', 'image_size' => 'original')); ?>
<h1><?php single_cat_title(); ?></h1>
</div>
<div class="col w240 leftMenu">
<div class="inner">
<ul>
<?php echo sundance_acc_cats(); ?>
</ul>
<div class="share"><?php if(function_exists('sharethis_button')) sharethis_button(); ?></div>
</div>
</div>
<div class="col w480 last">
<?php echo category_description();
global $wp_query;
$args = array_merge( $wp_query->query, array( 'posts_per_page' => -1, 'numberposts' => -1 ) );
query_posts($args);
//echo '<pre style="display:none">'. print_r($wp_query,true) .'</pre>';
while ( have_posts() ) : the_post(); ?>
<div class="acc">
<?php the_post_thumbnail('accthm', array('class'=>'alignleft')) ?>
<h3><?php the_title() ?></h3>
<?php the_content(); ?>
</div>
<?php endwhile; // End the loop. Whew. ?>
</div>
</div>
<?php
get_sidebar('generic');
?>
</div>
<br class="clear" />
<?php get_footer(); ?>
