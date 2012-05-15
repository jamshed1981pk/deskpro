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
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<div class="fullbgheader">
<div class="container">
    <div class="container-fluid">
    <div class="row-fluid">
    <div class="span9">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bx_styles/bx_styles.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxSlider.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider1').bxSlider();
  });
</script>
    <div class="slideruptitle"><span class="badge numbering">1</span><span class="title">Powerful, beautiful, affordable, multi–channel helpdesk software with your choice of hosting in our cloud or on your server.</span> </div>
        <div class="slideruptitle"><span class="badge">2</span><span>Your last helpdesk software purchase. Sorry competitors. </span></div>
    <div class="slider" id="slider1">
    <?php $query = new WP_Query( 'post_type=slider');
		while ( $query->have_posts() ) : $query->the_post(); ?>
             <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail();
} 
?>
    <?php endwhile; wp_reset_query(); ?>
    </div>
    <!--Slider content-->
    
    
    
    </div>
    <div class="span3 well">
    <!--download content-->
    </div>
    </div>
    </div>
   <div class="hero-unit"></div>
 <div class="row-fluid">
 <div class="span3">
 <div class="box"></div>
 <h1>Tickets & Email </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
 <h1>Self Service </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
  <h1>Live Chat  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
   
 <div class="box"></div>
 <h1>Branding  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
 
 </div>   
<div class="row-fluid">
 <div class="span3">
 <div class="box"></div>
 <h1>Our Cloud or Your Server  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
 <h1>Integrate & SSO </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
  <h1>Multi–Lingual </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
   
 <div class="box"></div>
 <h1>Branding  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
 
 </div>
<div class="row-fluid">
 <div class="span3">
 <div class="box"></div>
 <h1>Tickets & Email </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
 <h1>Self Service </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
 <div class="box"></div>
  <h1>Live Chat  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
  <div class="span3">
   
 <div class="box"></div>
 <h1>Branding  </h1>
  <p>By managing your email with Desk.com's real-time Agent, you and your team can coordinate responses to ensure customers receive a single, consistent answer.</p>
 </div>
 
 </div>  
<div class="row-fluid"></div>   
     <div class="row-fluid"></div>      
    </div>

</div>
		


<?php get_footer(); ?>