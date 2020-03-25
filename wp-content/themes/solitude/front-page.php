<?php get_header();?>
<!--
<div id="birds-div">
    <div class="container">
        <h1>birds test</h1>
    </div>
</div>
-->

<div class="page-banner">
  <div class="page-banner__bg-image"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Solitude</h1>
      <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
      <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>Artist</strong> you&rsquo;re interested in?</h3>
      <a href="#" class="btn btn--large btn--blue">Find Your Favourite Artist.</a>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <div class="full-width-split group">
          <div class="full-width-split__one">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
                      
                      <?php
                        $homepageEvents = new wp_Query(array(
                          'posts_per_page' => 2,
                          'post_type' => 'event'
                        ));

                        while($homepageEvents->have_posts()){
                          $homepageEvents->the_post();?>
 
                          <div class="event-summary">
                            <a class="event-summary__date t-center" href="#">
                                <span class="event-summary__month">Mar</span>
                                <span class="event-summary__day">25</span>  
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                        <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                              } else {
                                echo wp_trim_words(get_the_content(), 18);
                              } /*echo wp_trim_words(get_the_content(), 18);*/ ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
                            </div>
                          </div>

                        <?}
                      ?>

                    
                      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event')?>" class="btn btn--blue">View All Events</a></p>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="full-width-split__two">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                  <h2 class="headline headline--small-plus t-center">Blogs From Our Artist's</h2>
                  <?php 
                  $homepagePosts = new wp_Query(array(
                    'posts_per_page' => 2,
                  ));
                    
                  while($homepagePosts->have_posts()) {
                      $homepagePosts->the_post();?>

                      <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                                <span class="event-summary__month"><?php the_time('M')?></span>
                                <span class="event-summary__day"><?php the_time('d')?></span>  
                            </a>
                          <div class="event-summary__content">
                              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                              } else {
                                echo wp_trim_words(get_the_content(), 18);
                              }/*echo wp_trim_words(get_the_content(), 18);*/ ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                          </div>
                      </div>

                    <?php  } wp_reset_postdata();
                  ?>
                  <!--
                  <div class="event-summary">
                      <a class="event-summary__date event-summary__date--beige t-center" href="#">
                          <span class="event-summary__month">Feb</span>
                          <span class="event-summary__day">04</span>  
                      </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
                        <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
                    </div>
                  </div>
                  -->
                  <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('#');?>" class="btn btn--yellow">View All Blog Posts</a></p>
              </div>
              </div>
              </div>
          </div>
      </div>

  </div>
</div>


<div class="row">

<div class="col-6">
          <div class="full-width-split__two">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                  <h2 class="headline headline--small-plus t-center">Art's</h2>
                  <?php 
                  $homepagePosts = new wp_Query(array(
                    'posts_per_page' => 2,
                  ));
                    
                  while($homepagePosts->have_posts()) {
                      $homepagePosts->the_post();?>

                      <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                                <span class="event-summary__month"><?php the_time('M')?></span>
                                <span class="event-summary__day"><?php the_time('d')?></span>  
                            </a>
                          <div class="event-summary__content">
                              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                              } else {
                                echo wp_trim_words(get_the_content(), 18);
                              }/*echo wp_trim_words(get_the_content(), 18);*/ ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                          </div>
                      </div>

                    <?php  } wp_reset_postdata();
                  ?>
                  <!--
                  <div class="event-summary">
                      <a class="event-summary__date event-summary__date--beige t-center" href="#">
                          <span class="event-summary__month">Feb</span>
                          <span class="event-summary__day">04</span>  
                      </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
                        <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
                    </div>
                  </div>
                  -->
                  <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('art');?>" class="btn btn--yellow">View All Blog Posts</a></p>
              </div>
              </div>
              </div>
          </div>

    <div class="col-6">
      <div class="full-width-split group">
          <div class="full-width-split__one">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                      <h2 class="headline headline--small-plus t-center">blogs about Music</h2>
                      
                      <?php
                        $homepageEvents = new wp_Query(array(
                          'posts_per_page' => 2,
                          'post_type' => 'event'
                        ));

                        while($homepageEvents->have_posts()){
                          $homepageEvents->the_post();?>
 
                          <div class="event-summary">
                            <a class="event-summary__date t-center" href="#">
                                <span class="event-summary__month">Mar</span>
                                <span class="event-summary__day">25</span>  
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                        <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                              } else {
                                echo wp_trim_words(get_the_content(), 18);
                              } /*echo wp_trim_words(get_the_content(), 18);*/ ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
                            </div>
                          </div>

                        <?}
                      ?>

                    
                      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event')?>" class="btn btn--blue">View All Events</a></p>
                  </div>
                </div>
              </div>
          </div>
      </div>

  </div>
</div>
</div>


<!--front-page image-slider-->
<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/slider-frontpage/slider1.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">The Main Stage</h2>
        <p class="t-center">All students have free unlimited bus fare.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Discover line up</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/slider-frontpage/slider2.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">The Dome</h2>
        <p class="t-center">Our dentistry program recommends eating apples.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Discover line up</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/slider-frontpage/slider3.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">The Ambys</h2>
        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Discover line up</a></p>
      </div>
    </div>
  </div>
</div>
<!--end of front-page image-slider-->
<!--main post content-->

<div class="container pt-5 pb-5">  
    <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
</div>
<!--main post content-->

<?php get_footer();?>