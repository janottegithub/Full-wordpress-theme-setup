<?php get_header();?>

<div class="page-banner wrapper">
        <div class="page-banner__bg-image" style="background-image: url('https://media3.giphy.com/media/1k4PPf8zKsAqHogX9y/giphy.webp?cid=ecf05e4790f82a964945726fb9119511c086916560425711&rid=giphy.webp');  background-repeat: repeat; background-size:initial;"></div>
        <div class="page-banner__bg-image" style="background-image: url('https://media3.giphy.com/media/1k4PPf8zKsAqHogX9y/giphy.webp?cid=ecf05e4790f82a964945726fb9119511c086916560425711&rid=giphy.webp');  background-repeat: repeat; background-size:initial;"></div>

        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"> <h1>Welcome to our blog!</h1></h1>
          <div class="page-banner__intro">
              <p>Keep up with our latest news.</p>
          </div>
        </div>  
</div>

<div class="container container--narrow page-section">
<?php
while(have_posts()){
the_post();?>
<div class="post-item">
  <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="metabox">
    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ')?></p>
  </div>
  <div class="generic-content">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue reading</a></p>
  </div>
</div>
<?php }
?>
</div>

<?php get_footer();?>