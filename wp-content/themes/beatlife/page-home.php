<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beatlife
 */

get_header(); ?>
    
	<div class="player">
      test
      <div class="player-container">
       <?php dynamic_sidebar('sidebar-player'); ?>

        <span class="text-play">Dale play para escuchar <i class="fa fa-play"></i></span>
          <div id="player">
            <audio controls preload="none" autoplay class="player-mobile"><source src="http://167.114.210.232:8113/;" type="audio/aac"></audio>
            
          
          </div>

      </div>
    </div>
    <div class="main">

        <div class="banner">
            <div class="banner-container">
            <div class="banner-info">
                <div class="banner-logo">
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-circle.png">
                </div>
                <!-- <h1 class="animated fadeIn">Romantica Stereo</h1> -->
            
            </div>
            
            </div> 
            
        </div>

        
    </div>

<?php

get_footer();
