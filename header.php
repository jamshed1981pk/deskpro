<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<header>
<nav>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
                   
          <div class="nav-collapse">
          <!--start Top nav Bar left side  -->	
           <ul class="nav">
           <li class="tel"></li>
            <li class="usa"></li>
              <li><strong class="usano">1-888-DESKPRO</strong></li>
              <li class="or">or</li>
               <li class="uk"></li>
              <li><strong class="ukno">000-434-2345</strong></li>
            </ul>
      <!--End Top nav Bar left side  -->	


<!--start Top nav Bar Right Side  -->		
<div class="rightside">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav ">%3$s</ul>' ) ); ?>
</div>
<!--End Top nav Bar  -->			
                         
     <ul class="nav pull-right">
     <li class="seprator"></li>
      <li class="uk"></li>
      <li><strong class="english">English</strong></li>
         <li class="seprator"></li>
              <li class="login"><a href="wp-login.php">Login</a></li>
     </ul>  
          </div><!--/.nav-collapse -->
        </div><!--/container -->
        
      </div>
      
    </div>
  </nav>
<!--start 2nd Top nav Bar with logo  -->
   <div class="container">
  <div class="row logobar">
<div class="logo span4"><a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/Deskpro_logo.png"></a></div>
<div class="span6">

<?php wp_nav_menu( array('menu' => 'pages','items_wrap' => '<ul class="nav nav nav-pills">%3$s</ul>'  )); ?> </div>
<div class="span2"><?php get_search_form(); ?></div>
</div>
 </div><!--/container -->

<!--End 2nd Top nav Bar with logo -->	
</header>      
 
