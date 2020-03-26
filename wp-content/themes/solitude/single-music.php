<?php get_header();?>



    <?php 
    /*if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;*/?>

    <?php while(have_posts()){
    the_post();?>

        <div class="page-banner">
            <div class="page-banner__bg-image"style="background-image: url('http://localhost:8000/wp-content/uploads/2020/03/giphy.gif');  background-repeat: repeat; background-size:initial;;"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title();?></h1>
            <div class="page-banner__intro">
                <p>Learn how the school of your dreams got started.</p>
            </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('music');?>"><i class="fa fa-home" aria-hidden="true"></i> Music home </a> <span class="metabox__main"><?php the_title();?></span></p>
            </div>

            <!--
            <div class="page-links">
            <h2 class="page-links__title"><a href="#">About Us</a></h2>
            <ul class="min-list">
                <li class="current_page_item"><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
            </ul>
            </div>
            -->
            <?php
                $testArray = get_pages(array(
                    'child_of' => get_the_ID()
                ));

                if($theParent or $testArray) { ?>
                    <div class="page-links">
                        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                        <ul class="min-list">
                            <?php
                            if($theParent){
                            $findChildrenOf = $theParent; 
                            } else {
                                $findChildrenOf = get_the_ID();
                            }

                            wp_list_pages(array(
                                'title_li' => NULL,
                                'child_of' => $findChildrenOf 
                            ));
                            ?>
                        </ul>
                    </div>
                <?php } ?>

            <div class="generic-content">
             <?php the_content();?>
            </div>
            <!--ERROR-single-music-page!!!ERROR!!!ERROR!!!ERROR!!!ERROR!!!ERROR!!!ERROR!!!ERROR!!!ERROR!!!-->
            <?php
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
               'posts_per_page' => 5,
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
                   ),
                   array(
                     'key' => 'related_subjects',
                     'compare' => 'LIKE',
                     'value' => '"'.get_the_ID().'"'
                   )
               )
            ));
            echo '<h2 class="headline headline--medium">Playing at</h2>';

            while($homepageEvents->have_posts()){
                echo '<hr class="section-break">';
                echo '<ul class="link-list min-list">';
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
            <!-- $eventDate = new DateTime(get_field('event_date'));-->

        </div>


    <?php  } ;?>




<?php get_footer();?>