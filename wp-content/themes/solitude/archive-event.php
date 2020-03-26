<?php get_header();?>

<div class="page-banner wrapper">
        <div class="page-banner__bg-image" style="background-image: url('https://media3.giphy.com/media/1k4PPf8zKsAqHogX9y/giphy.webp?cid=ecf05e4790f82a964945726fb9119511c086916560425711&rid=giphy.webp');  background-repeat: repeat; background-size:initial;"></div>

        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">All events</h1>
          <div class="page-banner__intro">
                <p>see what is going on is our world.</p>
          </div>
        </div>  
</div>

<div class="container container--narrow page-section">
<?php

while(have_posts()){
the_post();?>
                      
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
echo paginate_links();
?>
</div>

<?php get_footer();?>