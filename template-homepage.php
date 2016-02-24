<?php
/**
 * Template Name: HomePage
 *
 * @package Sundance
 * @subpackage Sundance
 * @since Sundance 2.0
 */

get_header('bootstrap'); ?>
	<section class="wrapper bannercontainer">
  		<?php echo do_shortcode('[rev_slider alias="homepageslider"]'); ?>
  	</section>
  	<section class="wrapper minicontainer podscont">
  		<div class="container smallcontainer">
  			<div class="row ">
  				<div class="col-xs-12 col-sm-6 col-md-3">
  					<a href="<?php bloginfo('url'); ?>/best-selling"><div class="selling hovercard">
  						<div class="bestselling">
  				<h3>BEST SELLING</h3>
  				</div>
  				</div></a>
  				</div>
  				<div class="col-xs-12 col-sm-6 col-md-3">
  					<a href="<?php bloginfo('url'); ?>/low-profile"><div class="therapy hovercard">
  						<div class="bestherapy">
  				<h3>LOW PROFILE</h3>
  				</div>
  				</div></a> 				
  				</div>
  				<div class="col-xs-12 col-sm-6 col-md-3">
  				<a href="<?php bloginfo('url'); ?>/energy-efficient"><div class="entertaining hovercard">
  						<div class="mostentertaining">
  				<h3>ENERGY EFFICIENT</h3>
  				</div>
  				</div></a> 				
  				</div> 				
  				<div class="col-xs-12 col-sm-6 col-md-3">
  				<a href="<?php bloginfo('url'); ?>/search-by-size"><div class="search hovercard">
  						<div class="mostsearch">
  				<h3>SEARCH BY SIZE</h3>
  				</div>
  				</div></a> 	
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="wrapper whitecontainer">
  		<div class="container smallcontainer">
  			<div class="row whitecontent">
  				<div class="col-xs-12 col-sm-12 col-md-6 firstcontent">
  					<div class="row">
  						<div class="col-xs-12 col-sm-8 col-md-7 padl0 xpadr0">
  							<h3>Find Your Nearest Dealer</h3>
  							<ul class="dealerlist">
	  							<li>Get guidance finding the right spa for you</li>
	  							<li>Test spas wet and dry</li>
  							</ul>
  							<form id="dealer-finder" method="post" action="<?php bloginfo('url'); ?>/hot-tub-dealer-locator/cities/">
  								<input type="firstname" class="form-control" name="zip" id="zip" placeholder=" Enter your zip code">
  								<button type="submit" class="blue btn-start">LOCATE DEALER</button>
  							</form>
  						</div>
  						<div class="col-xs-12 col-sm-4 col-md-5 padl0 padr0">
  							<img class="ximg-responsive" src="<?php bloginfo('template_url'); ?>/bootstrap/images/dealer_image.jpg">
  						</div>
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-12 col-md-6">
  					<div class="row">
  						<div class="col-xs-12 col-sm-8 col-md-7 padr0">
  							<h3>Free Brochure</h3>
  							<ul class="brochurelist">
	  							<li>Compare spa models at a glance</li>
	  							<li>Explore benefits of Sundance<sup>&reg;</sup> hydrotherapy</li>
	  							<li>Learn why owners buy again and again</li>
	  						</ul>	
	  						<a href="<?php bloginfo('url'); ?>/request-literature/" class="btn btn-primary btn-blue">GET BROCHURE</a>
  						</div>
  						<div class="col-xs-12 col-sm-4 col-md-5 padl0 padr0">
  							<img class="ximg-responsive" src="<?php bloginfo('template_url'); ?>/bootstrap/images/small_logo.png">
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="wrapper smallcontainer">
  		<div class="container smallcontainer">
  			<div class="row smallcontent">
  				<div class="col-xs-12 col-sm-5 col-md-3">
  					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/bootstrap/images/truck.png">
  				</div>
  				<div class="col-xs-12 col-sm-7 col-md-5">
  					<h1><span>Truckload Savings Event</span></h1>
  					<p>Take advantage of the season's best discounts!</p>
  				</div>
  				<div class="col-xs-12 col-sm-12 col-md-4 dreambtncont text-center">
  					<a href="#" class="btn btn-primary btn-blue btn-big">GET THE SPA OF YOUR DREAMS</a>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="wrapper groupcontainer">
  		<div class="container bigcontainer">
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-4 shawor">
  					  			
  				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4 iphone">
  					</div>
  				<div class="col-xs-12 col-sm-4 col-md-4 bed">
	  				 
  				</div>
  			</div>
  			<div class="row hydrotherapy">
  				<div class="col-xs-12 col-sm-4 col-md-4">
	  				<h1>Hydrotherapy</h1>
	  				<p>Understand the healing benefits of Sundance<sup>&reg;</sup> hydrotherapy.</p>
  				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h1>SunSmart<sup>&reg;</sup> WiFi App</h1>
  					<p>The SunSmart<sup>&reg;</sup> WiFi Kit lets you stay in tune with your spa remotely.</p>	
  				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h1>Warranty</h1>
  					<p>Our industry-leading Sundance<sup>&reg;</sup> Spas warranty has you covered.</p>
  				</div>
  			</div>
  		</section>
  		<section class="wrapper tipscontainer"></section>
  		<section class="wrapper paracontainer">
	  		<div class="container smallcontainer">
	  			<div class="row paracontent">
	  				<div class="col-xs-12 col-sm-6 col-md-6">
	  					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/bootstrap/images/group_bath.png">
	  				</div>
	  				<div class="col-xs-12 col-sm-6 col-md-6">
	  					<div class="row">
	  						<div class="col-xs-12"> 					
	  						<p><span>YOU CAN BELIEVE IN A SUNDANCE<sup>&reg;</sup> SPA.</span> Established in 1979, Sundance Spas has been recognized internationally with more awards and honors than any other spa company. our exclusive components, processes, and features include the famous line of patented Fluidix<sup>&trade;</sup> jets. We are committed to using environmentally sale equipment and practices. Read about our distinguished history of spa innovation in the Sundance Spas brochure.</p>
	  					</div>
	  					</div> 					
	  					<div class="row">
	  						<div class="col-xs-12">
	  						<img class="img-responsive partnerlogo" src="<?php bloginfo('template_url'); ?>/bootstrap/images/partnerlogo.jpg">
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="row news">
	  				<div class="col-xs-12 col-sm-4 col-md-4">
	  					<h1>Blog</h1>
	  					<p>From news on the best ways to care for your spa to how to get a better night's sleep. Learn and stay informed with our Sundance Spas...<a href="<?php echo get_bloginfo('url'); ?>/spa-blog/">Read More</a>.</p>
	  				</div>
	  				<div class="col-xs-12 col-sm-4 col-md-4">
	  					<h1>Online Financing</h1>
	  					<p><a href="<?php bloginfo('url'); ?>/financing/"><span>Qualify for online financing now.</span></a> *Not valid with other not promotional offers. Restrictions apply. See participating dealers for complete terms and conditions. Financing available on approved credit.</p>
	  				</div>
	  				<div class="col-xs-12 col-sm-4 col-md-4 tub blogcat">
	  					<h1>Categories</h1>
	  					<?php
							if ( false === ( $special_query_results = get_transient( 'wp_list_categories' ) ) ) {
								// It wasn't there, so regenerate the data and save the transient
								$special_query_results = wp_list_categories('title_li=&echo=0');
								set_transient( 'wp_list_categories', $special_query_results, 60*60*12 );
							}
							// Use the data like you would have normally...
							$wp_list_categories = get_transient( 'wp_list_categories' );
							echo '<ul class="categories">'.$wp_list_categories.'</ul>';
						?>	
	  				</div>
	  			</div>
	  		</div>
	  	</section>
<?php get_footer('bootstrap'); ?>
