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
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/?page_id=42');?>"><i class="fa fa-home" aria-hidden="true"></i> Blog home </a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ')?></span></p>
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

        </div>


    <?php  } ;?>




<?php get_footer();?>