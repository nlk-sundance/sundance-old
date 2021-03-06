<?php
/**
 * Spa Series template
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */

/**
 * http_response_code / status_header fix for tub pages
 *
 * We are bypassing all the 404fix function mess and just directly embedding on single tub pages for now. The whole build/system for generating pages is a nightmare!
 * @see https://ninthlink.atlassian.net/browse/JAC-870
 *
 */
if( function_exists('http_response_code') ) {
    http_response_code(200);
} else {
    status_header(200);
}


get_header(); 
while ( have_posts() ) : the_post();
global $post;

$custom = get_post_meta($post->ID);
$cat_tubs = unserialize(fix_serialized_data($custom['s_cat_tubs'][0]));

if($cat_tubs=='') $cat_tubs = array();

$serieslanding = ( $post->ID == 1894 );

?>
 <div class="cols">
    <div class="main col w730"><div class="main-title">
        <?php
		the_post_thumbnail();
		if ( $serieslanding ) {
			echo '<h1>';
			the_title('');
			echo '</h1>';
		}
		?></div>
        <div class="inner">
        <?php if ( $serieslanding )  {
			// hot-tubs-and-spas : transient s_tubcats_landing
			//if ( true ) { //false === ( $special_query_results = get_transient( 's_tubcats_landing' ) ) ) {
				global $tubcats;
				$o = '';
				foreach ( $tubcats as $i => $c ) {
					$series = get_post($i);
					$o .= '<div class="tubSeries interactive" id="'. esc_attr($c['name']) .'-Series">';
					$o .= '<div class="overhead">';
					if (class_exists('MultiPostThumbnails') && isset($c['tubs'][0]) ) {
						$o .= MultiPostThumbnails::get_the_post_thumbnail('s_spa', 'overhead-large', $c['tubs'][0]['id'], 'overhead-mid');
					}
					$o .= '</div>';
					$o .= '<div class="description" id="'. esc_attr($c['name']) .'-Series-Spas">';
					if($c['name'] == 'Select')
					{
						$o .= '<h1><a href="'. get_permalink($i) .'"><strong>'. esc_attr($c['name']) .'</strong> Series<sup>&reg;</sup> Spas</a></h1>';	
					}
					else {
						$o .= '<h1><a href="'. get_permalink($i) .'"><strong>'. esc_attr($c['name']) .'</strong> Series&trade; Spas</a></h1>';
					}
					$o .= $series->post_excerpt;
					$o .= '<div class="details">';
					$o .= '<a class="openDetails" href="#'. esc_attr($c['name']) .'-Series-Spas">View Details</a>';
					$o .= '<a class="closeDetails" href="#'. esc_attr($c['name']) .'-Series">View Details</a>';
					$o .= sundance_series_tubs($c['tubs'], $i);
					$o .= '</div></div><br class="clear" /></div>';
				}
				
				set_transient( 's_tubcats_landing', $o, 60*60*12 );
			//}
			// Use the data like you would have normally...
			//$o = get_transient( 's_tubcats_landing' );
			echo $o;
			
			the_content(); // retargeting
		} else { ?>
            <div class="headline">
                <div class="model">
                    <h1><?php the_title(''); ?></h1>
                    <h2>Series<?php if(get_the_title() == 'Select'){ echo '<sup>&reg</sup>'; } ?> Spas</h2>
                </div>
                <div class="description w480 noline">
                    <?php echo sundance_shortdesc($post->post_content, true); ?>
                </div>
                <br class="clear" />
            </div>
            <div class="tubSeries">
                <!--div class="overhead">
                <?php
				if (class_exists('MultiPostThumbnails')) {
					$firsttub = true;
					foreach ( $cat_tubs as $i => $t ) {
						if ( $firsttub ) {
						MultiPostThumbnails::the_post_thumbnail('s_spa', 'overhead-large', $i, 'overhead-mid');
						$firsttub = false;
						break;
						}
					}
				}
				?>
                </div-->
                <div class="description">
                    <div class="details">
                       <?php echo sundance_series_tubs($cat_tubs, $post->ID); ?>
                    </div>
                </div>
                <br class="clear" />
            </div>
            <?php } ?>                        
        </div>
    </div>
    <?php get_sidebar('generic'); ?>
</div>
<br class="clear" />
<?php
endwhile;
get_footer(); ?>
