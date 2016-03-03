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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://plus.google.com/107104241400965217576/posts" rel="publisher" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
		<?php wp_title( '' ); ?>
		<?php
		if ( $_GET['bvrrp'] )
			echo ' Reviews';
		if ( $_GET['bvqap'] )
			echo ' Questions';
		?>
	</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/custom.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,700,900' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
    	wp_enqueue_script('jquery');
		wp_head(); 
    ?>
    <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
  </head>
  
<body <?php body_class(); ?>>

	<?php custom_data_layer(); ?>
	
	<?php google_tag_manager(); ?>

	<?php google_tag_manager_criteo(); ?>

    <section class="wrapper headercontainer">
  		<div class="container">
  			<div class="row">
  				<div class="col-xs-12 col-sm-12 col-md-3">
  					<h1 class="logo"><a href="<?php bloginfo('url'); ?>">logo</a></h1>
  				</div>
  				<div class="col-xs-12 col-sm-12 col-md-9">
  					<ul class="toplist">
  						<li class="listborder"><a href="<?php bloginfo('url'); ?>/request-literature/">Free Brochure</a></li>
  						<li><a href="<?php bloginfo('url'); ?>/hot-tub-dealer-locator/">Nearest Dealer</a></li>
  						<li>
  							<form id="dealer-finder" method="post" action="<?php bloginfo('url'); ?>/hot-tub-dealer-locator/cities/">
								<input type="text" class="zip btn-start" name="zip" id="zip" placeholder="zip/postal code" />
								<input name="zipcodeSearch" value="1" type="hidden">
							</form>
  						</li>
  					</ul>
  					<div class="clear"></div>
  					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<?php 
											wp_nav_menu( array(
										        'menu'       => 'mainmenu',
										        'depth'      => 2,
										        'container'  => false,
										        'menu_class' => 'nav navbar-nav',
										        'fallback_cb' => 'wp_page_menu',
										        //Process nav menu using our custom nav walker
										        'walker' => new wp_bootstrap_navwalker())
										    ); 
										?>
										<?php /* ?>
										<ul class="nav navbar-nav">
											<li class="listborder dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SPA</a>
												<ul class="dropdown-menu">
													<li><a href="<?php bloginfo('url'); ?>/selectseries/">Select Series<sup>&trade;</sup></a></li>
													<li><a href="<?php bloginfo('url'); ?>/880series/">880 Series<sup>&trade;</sup></a></li>
													<li><a href="<?php bloginfo('url'); ?>/780series/">780 Series<sup>&trade;</sup></a></li>
													<li><a href="<?php bloginfo('url'); ?>/680series/">680 Series<sup>&trade;</sup></a></li>
												</ul>
											</li>
											<li class="listborder">
												<a href="<?php bloginfo('url'); ?>/about-us/">ABOUT US</a>
											</li>
											<li class="listborder dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACCESSORIES</a>
													<ul class="dropdown-menu">
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/spa-steps/">Steps</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/spa-scents/">SunScents</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/spa-cleaner/">Water Purification</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/spa-filters/">Spa Filters for Your Hot Tub</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/cover-lifters/">Spa Cover Lifters &amp; Accessories</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/spa-equipment/">Accessories Bazaar</a>
														</li>
														<li>
															<a href="<?php bloginfo('url'); ?>/accessories/sunstrong-covers/">Sunstrong™ Covers</a>
														</li>
													</ul>
											</li>
											<li class="listborder">
												<a href="<?php bloginfo('url'); ?>/customer-care/">OWNER</a>
											</li>
											<li class="listborder">
												<a href="<?php bloginfo('url'); ?>/get-a-quote/">GET PRICING</a>
											</li>
											<li class="search">
												<a href="#">SEARCH</a>
											</li>	
										</ul><?php */ ?>
							</div>
						</div><!-- /.container-fluid -->
					</nav>
  				</div>
  			</div>
  		</div>
  	</section>
