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
      <h1 class="headline headline--large">solitude</h1>
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
                      $today = date('Ymd');
                      $homepageEvents = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type'=> 'event',
                        'meta_key' => 'event_date',
                        'ordeby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                              'key' => 'event_date',
                              'compare' => '>=',
                              'value' => $today,
                              'type' => 'numeric'  
                            )
                        )
                      ));

                      while($homepageEvents->have_posts()){
                      $homepageEvents->the_post();?>
                          <div class="event-summary">
                              <a href="<?php the_permalink();?>" class="event-summary__date t-center">
                                  <span class="event-summary__month"><?php
                                  $eventDate = new DateTime(get_field('event_date', false, false));
                                  echo $eventDate->format('M');

                                  /*$eventDate = new DateTime(the_field("event_date"));
                                  echo $eventDate->format('M');*/
                                  ?></span>
                                  <span class="event-summary__day"><?php echo $eventDate->format('d')?></span>
                              </a>
                              <div class="event-summary__content">
                                  <h5 class="event-summary__title headline headline--tiny">
                                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                  </h5>
                                  <p><?php if (has_excerpt()){
                                      echo get_the_excerpt();
                                  } else {
                                      echo wp_trim_words(get_the_content(), 18);
                                  } ?> 
                                  <br>
                                  <a href="<?php the_permalink()?>" class="nu gray">Learn more</a></p>
                              </div>
                          </div>
                      <?php }  
                      ?>

                    
                      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event')?>" class="btn btn--blue">View All Events</a></p>
                  </div>
                </div>
              </div>
          </div>
      </div>
     
     <!--Second Column-->
      <div class="col-6">
          <div class="full-width-split__two">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                  <h2 class="headline headline--small-plus t-center">Blogs From Our Artist's</h2>
                 <?php                  
                      $today = date('Ymd');
                      $homepageBlogs = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type'=> 'post',
                        'meta_key' => 'blog_date',
                        'ordeby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                              'key' => 'blog_date',
                              'compare' => '>=',
                              'value' => $today,
                              'type' => 'numeric'  
                            )
                        )
                      ));

                    while($homepageBlogs->have_posts()){
                      $homepageBlogs->the_post();?>
                        <div class="event-summary">
                            <a href="<?php the_permalink(); ?>" class="event-summary__date t-center">
                                <span class="event-summary__month"><?php
                                $blogDate = new DateTime(get_field('blog_date', false, false));
                                echo $blogDate->format('M');

                                /*$eventDate = new DateTime(the_field("event_date"));
                                echo $eventDate->format('M');*/
                                ?></span>
                                <span class="event-summary__day"><?php echo $blogDate->format('d')?></span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p><?php if (has_excerpt()){
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 18);
                                } ?>
                                <br>
                                <a href="<?php the_permalink()?>" class="nu gray">Learn more</a></p>
                            </div>
                        </div>
                    <?php } wp_reset_postdata();
                  ?>

                  <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('post');?>" class="btn btn--yellow">View All Blog Posts</a></p>
              </div>
              </div>
              </div>
          </div>
      </div>

  </div>
</div>


<div class="row">

<!--third Column-->
<div class="col-6">
          <div class="full-width-split__two">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                  <h2 class="headline headline--small-plus t-center">visual Art's</h2>
                  <?php 
                    
                  $today = date('Ymd');
                  $homepageArt = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_type'=> 'art',
                    'meta_key' => 'arts_date',
                    'ordeby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                          'key' => 'arts_date',
                          'compare' => '>=',
                          'value' => $today,
                          'type' => 'numeric'  
                        )
                    )
                  ));

                  while($homepageArt->have_posts()) {
                      $homepageArt->the_post();?>

                      <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                            <span class="event-summary__month"><?php
                                $artDate = new DateTime(get_field('arts_date', false, false));
                                echo $artDate->format('M');

                                /*$eventDate = new DateTime(the_field("event_date"));
                                echo $eventDate->format('M');*/
                                ?></span>
                                <span class="event-summary__day"><?php echo $blogDate->format('d')?></span>
                            </a>
                          <div class="event-summary__content">
                              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                              } else {
                                echo wp_trim_words(get_the_content(), 18);
                              }/*echo wp_trim_words(get_the_content(), 18);*/ ?>
                              <br>
                              <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                          </div>
                      </div>

                    <?php  } wp_reset_postdata();
                  ?>

                  <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('art');?>" class="btn btn--yellow">View All Artists</a></p>
            </div>
          </div>
        </div>
  </div>

  <!--fourth Column-->
  <div class="col-6">
      <div class="full-width-split group">
          <div class="full-width-split__one">
            <div class="full-width-split__inner_border">
              <div class="full-width-split__inner">
                      <h2 class="headline headline--small-plus t-center">blogs about Music</h2>
                 
                      <?php 
                    
                    $today = date('Ymd');
                    $homepageMusic = new WP_Query(array(
                      'posts_per_page' => 2,
                      'post_type'=> 'music',
                      'meta_key' => 'music_date',
                      'ordeby' => 'meta_value_num',
                      'order' => 'ASC',
                      'meta_query' => array(
                          array(
                            'key' => 'music_date',
                            'compare' => '>=',
                            'value' => $today,
                            'type' => 'numeric'  
                          )
                      )
                    ));
  
                    while($homepageMusic->have_posts()) {
                        $homepageMusic->the_post();?>
  
                        <div class="event-summary">
                              <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                              <span class="event-summary__month"><?php
                                  $musicDate = new DateTime(get_field('music_date', false, false));
                                  echo $musicDate->format('M');
  
                                  /*$eventDate = new DateTime(the_field("event_date"));
                                  echo $eventDate->format('M');*/
                                  ?></span>
                                  <span class="event-summary__day"><?php echo $musicDate->format('d')?></span>
                              </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php if(has_excerpt()){
                                  echo get_the_excerpt();
                                } else {
                                  echo wp_trim_words(get_the_content(), 18);
                                }/*echo wp_trim_words(get_the_content(), 18);*/ ?>
                                <br>
                                <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
                            </div>
                        </div>
  
                      <?php  } wp_reset_postdata();
                    ?>
                      
                      <?php/*
                        $homepageEvents = new wp_Query(array(
                          'posts_per_page' => 2,
                          'post_type' => 'music'
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
                              } echo wp_trim_words(get_the_content(), 18); ?>
                              <br>
                              <a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
                            </div>
                          </div>

                        <?}*/
                      ?>

                      
                      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('music')?>" class="btn btn--blue">View All Music</a></p>
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