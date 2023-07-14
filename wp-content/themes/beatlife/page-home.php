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


<div class="main">

  <div class="banner">
    <div class="banner-container">
      <div class="banner-info">
        <div class="banner-logo">

          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-bl2020.png">
        </div>
        <div class="player">

          <div class="player-container">
            <?php dynamic_sidebar('sidebar-player'); ?>

            <span class="text-play">Dale play para escuchar <i class="fa fa-play"></i></span>
            <div id="player">
              <!-- <audio controls preload="none" autoplay class="player-mobile">
                <source src="https://cast4.asurahosting.com/proxy/ondabra2/stream" type="audio/aac"></audio> -->


            </div>

          </div>
        </div>
        <div class="banner-anuncios">

          <?php
          $args = array(
            'post_type' => 'anuncio',
            'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'posts_per_page' => 10,

          );
          $items = new WP_Query($args);
          if ($items->have_posts()) {
          ?>
            <div class="anuncio-slider ">
              <?php while ($items->have_posts()) {
                $items->the_post();
              ?>



                <?php if (has_post_thumbnail()) :
                  $id = get_post_thumbnail_id($post->ID);
                  $thumb_url = wp_get_attachment_image_src($id, 'large', true);
                ?>


                  <div class="anuncio-slide">
                    <?php if (rwmb_meta('rw_anuncio_url')) : ?>
                      <a href="<?php echo esc_url(rwmb_meta('rw_anuncio_url')); ?>" target="_blank">
                        <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="<?php the_title() ?>">
                      </a>
                    <?php else : ?>

                      <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="<?php the_title() ?>">

                    <?php endif ?>

                  </div>


                <?php endif; ?>






              <?php

              } ?>
            </div>




          <?php
          }
          ?>
        </div>



      </div>

    </div>

  </div>


</div>

<?php

get_footer();
