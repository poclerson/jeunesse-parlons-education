<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('education_insight_hide_show') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'education_insight_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $education_insight_slide_post[] = $mod;
            }
          }
           if( !empty($education_insight_slide_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $education_insight_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2><?php the_title();?></h2>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( education_insight_string_limit_words( $excerpt, 40 )); ?></p>
                <div class="slider-btn mt-4 mt-md-5">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('Learn More','nursery-kindergarten'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <section id="middle-sec" class="py-5">
    <div class="container">
      <?php if( get_theme_mod('education_insight_mid_section_heading','') != '' ){ ?>
        <h3><?php echo esc_html(get_theme_mod('education_insight_mid_section_heading','')); ?></h3>
      <?php }?>
      <div class="middle-sec-inner">
        <div class="row"> 
          <?php
            for ( $s = 1; $s <= 4; $s++ ) {
              $mod =  get_theme_mod( 'education_insight_middle_sec_settigs'.$s );
              if ( 'page-none-selected' != $mod ) {
                $education_insight_post[] = $mod;
              }
            }
             if( !empty($education_insight_post) ) :
            $args = array(
              'post_type' =>array('post','page'),
              'post__in' => $education_insight_post
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $s = 1;
          ?>
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-lg-3 col-md-6 pl-lg-0 pl-md-0">
              <div class="<?php echo('mid-inner-box').$s ?> mb-3">
                <?php if( get_theme_mod('education_insight_mid_section_icon'.$s) != '' ){ ?>
                  <i class="<?php echo esc_html(get_theme_mod('education_insight_mid_section_icon'.$s)); ?>"></i>
                <?php }?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( education_insight_string_limit_words( $excerpt, 30 )); ?></p>
              </div>
            </div>
          <?php $s++; endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>