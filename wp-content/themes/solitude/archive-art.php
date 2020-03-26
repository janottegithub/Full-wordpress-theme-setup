<?php get_header();?>

<div class="page-banner wrapper">
        <div class="page-banner__bg-image" style="background-image: url('http://localhost:8000/wp-content/uploads/2020/03/balls.gif');  background-repeat: repeat; background-size:initial;"></div>

        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">All Arts</h1>
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
                    <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                    <span class="event-summary__month"><?php
                        $blogDate = new DateTime(get_field('arts_date', false, false));
                        echo $blogDate->format('M');
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
</div>

<?php get_footer();?>