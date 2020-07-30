<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beatlife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
          <div class="header-container ">
              
              <!-- <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png"></a> -->
			  <div class="tunein">
				Escúchenos tambien en <a href="http://tunein.com/radio/Beat-Life-Panam%C3%A1-s288068" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tunein.png" alt="Tune In Radio"></a>
				</div>
              <div class="header-right flex-container-sb">
			    
                <div class="header-contact">
                  <!-- <a href="http://ondabravaradio.com/" title="Ondabrava Radio" class="icon-ondabrava"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-ondabrava.png" alt="Ondabrava Radio"></a> -->
				   <a href="https://mytuner-radio.com/radio/beat-life-panama-449724" title="my tuner radio" class="icon-tuner-radio"><img src="<?php echo get_template_directory_uri(); ?>/img/mytunner2.png" alt="my-tuner-radio"></a>
				  <a href="https://www.facebook.com/beatlifepanama"><i class="fa fa-facebook"></i></a>
                  <a href="https://twitter.com/beatpanama"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.instagram.com/beatlifepanama"><i class="fa fa-instagram"></i></a>
                  <a href="#contact-popup" class="contact-popup-link"><i class="fa fa-envelope-o"></i><span class="text">Contact Us</span></a>
                </div>
                <!-- <div class="header-btn-menu">
                   <button id="btn-menu" class="nav-btn-menu">
                       <i class="fa fa-bars"></i>
                   </button>
                </div> -->
              </div>
              
          </div>
          
      </header>
      <div class="nav-container">
          <?php
			wp_nav_menu(array(
				'theme_location' => 'header',
				'menu_id' => 'nav-menu',
				'container' => 'nav',
				'container_class' => 'nav-menu',
				'container_id' => '',
				'menu_class' => 'nav-menu-ul',
			));
			?>
        
    </div>
	
