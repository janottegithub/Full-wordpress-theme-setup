<?php get_header();?>

<div class="page-banner wrapper">
        <div class="page-banner__bg-image" style="background-image: url('http://localhost:8000/wp-content/uploads/2020/03/giphy5.gif');  background-repeat: repeat; background-size:initial;"></div>

        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">All Musicians</h1>
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
        <!--
        <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Mar</span>
            <span class="event-summary__day">25</span>
        </a>
        -->
        <img class="previeuw-image" src="http://localhost:8000/wp-content/uploads/2020/03/hqdefault.jpg" alt="Avatar">
        <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
        </div>
    </div>

<?php }
echo paginate_links();
?>
</div>

<?php get_footer();?>