<?php
/**
 * Template Name: Pods - Search By Size Page
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */
get_header(); 
while ( have_posts() ) : the_post();
global $post;

//$custom = get_post_meta($post->ID, 's_cat_tubs');
//$cat_tubs = $custom[0];
//if($cat_tubs=='') $cat_tubs = array();

//$serieslanding = ( $post->ID == 1894 );

?>
<script type="text/javascript">
	function goToByScroll(link){
	      // Remove "link" from the ID
	      // Scroll
	    jQuery('html,body').animate({
	        scrollTop: jQuery(link).offset().top - 50},
	        'slow');
	}
	
	jQuery(document).ready(function(){
		jQuery(".srcollto").click(function(e) { 
		      // Prevent a page reload when a link is pressed
		    e.preventDefault(); 
		      // Call the scroll function
		    goToByScroll(jQuery(this).attr('href'));           
		});	
	});
	
</script>
 <div class="cols podscols">
    <div class="main col w730"><div class="main-title">
        <?php the_post_thumbnail();
		?></div>
        <div class="inner">
        <?php //if ( $serieslanding )  {
			
		//} else { ?>
            <div class="headline">
                <div class="description w670 noline">
                	<h1><?php the_title(''); ?></h1>
                    <?php echo sundance_shortdesc($post->post_content, true); ?>
                </div>
                <br class="clear" />
            </div>
            <div class="tubslink">
            	<ul>
            		<li><a class="srcollto" href="#tubs_1">6+ people</a></li>
            		<li><a class="srcollto" href="#tubs_2">5-6 people</a></li>
            		<li><a class="srcollto" href="#tubs_3">4-5 people</a></li>
            		<li><a class="srcollto" href="#tubs_4">2-3 people</a></li>
            	</ul>
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
                       <?php //echo sundance_series_tubs($cat_tubs, $post->ID); ?>
                       <?php
                       		echo '<table class="tubGrid">';
	                       		if( have_rows('spas_repeater') ):
									$tubsc = 0;
								 	while ( have_rows('spas_repeater') ) : the_row();
								        ?>
								        <tr id="tubs_<?php echo ++$tubsc;?>"><td colspan="4"><h4><?php the_sub_field('spas_title'); ?></h4></td></tr>
								        <?php 
											// check for rows (sub repeater)
											if( have_rows('featured_spas') ): ?>
												<?php 
												// loop through rows (sub repeater)
													$c = 0;
													$trclosed = true;
													
													while( have_rows('featured_spas') ): the_row();
													$o = '';
													$c += 1;
													
													if ( $c%4 == 1 ) {
														$o .= '<tr>';
														$trclosed = false;
													}
													$spa_id = get_sub_field('featured_spa');
													$t = array();
													$t['name'] = get_the_title($spa_id);
													$custom = get_post_meta($spa_id, 's_specs', false);
													$specs = $custom[0];
													$t['seats'] = $specs['seats'];
													$t['dim_us'] = $specs['dim_us'];
													$t['dim_int'] = $specs['dim_int'];
													$bazaarvoiceID = $specs['product_id'];
													$custom = get_post_meta($spa_id, 's_jets');
													$tub_jets = $custom[0];
													$total_jets = 0;
													foreach($tub_jets as $tub_jet)
													{
														$total_jets += intval($tub_jet);
													}
													
													$t['jets'] = $total_jets;
													$t['vol'] = str_replace(array('US', 'us'), array('', ''), $specs['vol_us']);
													$t['url'] = get_permalink($spa_id);
													$t['seats'] = $specs['seats'];
													$o .= '<td width="168">';
														$o .= '<a href="'. esc_url($t['url']) .'">';
														$o .= '<div class="tubThumb ' . esc_attr( strtolower( preg_replace( '/[^A-Za-z0-9]/', '', str_replace('&trade;','',$t['name'] ) ) ) ) . '" >
																	<div class="tubViewDetails"></div>';
																	if(get_field('tub_badge', $spa_id) && get_field('tub_badge', $spa_id) != 'na')
																		$o .= '<span class="spabadge badge-medium '.get_field('tub_badge', $spa_id).'"></span>';			
														$o .= '</div>';						
														//$o .= '<div class="tubThumb ' . esc_attr( strtolower( preg_replace( '/[^A-Za-z0-9]/', '', str_replace('&trade;','',$t['name'] ) ) ) ) . '" ><div class="tubViewDetails"></div></div>';
														$o .= '<div id="BVRRInlineRating-' . $bazaarvoiceID . '"></div>';
														$o .= '<span class="h3">'. esc_attr($t['name']) .'</span>';
														$o .= '<span class="p">Seats: '. esc_attr($t['seats']) .'</span>';
														$o .= '<span class="p">Dimensions:<br/> '. esc_attr($t['dim_us']) .'<br/><small>('. esc_attr($t['dim_int']) .')</small></span>';
														$o .= '<span class="p">Series: '. esc_attr(sundance_series($spa_id)) .'</span>';
														//$o .= '<span class="p"><img src="'. get_bloginfo('template_url') .'/images/icons/view-details-arrow.png" border="0" class="det" /></span>';
														$o .= '<span class="p"><div class="view-details"></div></span>';
														//if (class_exists('MultiPostThumbnails')) {
														//	$o .= MultiPostThumbnails::get_the_post_thumbnail('s_spa', 'overhead-large', $i, 'overhead-mid', array('class'=>'ov'));
														//}
														$o .= '</a>';
													$o .= '</td>';
													if ( $c%4 == 0 ) {
														$o .= '</tr>';
														$trclosed = true;
													}
													echo $o;
													//$c++;
												?>
														
												<?php 
													endwhile;
													if(!$trclosed)
													{
														echo '</tr>';
													} 
												?>
											<?php endif; //if( get_sub_field('items') ): ?>
								        <?php
								    endwhile;
								else :
								endif;
							echo '</table>';								
                       ?>
                    </div>
                </div>
                <br class="clear" />
            </div>
            <?php //} ?>                        
        </div>
    </div>
    <?php get_sidebar('pods'); ?>
</div>
<br class="clear" />
<?php
endwhile;

get_footer(); ?>
