<?php 

// Template Name: Пост

// Template Post Type: post, page

?>

<?php get_header(); ?>

<div class="animation-wrapp">
    <div class="post-wrapp">
        <img src="<?php the_field('main_img') ?>" alt="">
        <p><?php the_field('text') ?></p>
    </div>     
</div>

<section class="section-automating animate-block">
        <div class="wrapp-size">
            <div class="animation-wrapp">
              
                <?php 
                $posts = get_posts( array(
                    'numberposts' => 3,
                    'category_name'    => 'blog',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>

                    <div class="post-wrapp">
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php the_field('main_img') ?>" alt="">
                            <p><?php the_field('text') ?></p>
                        </a>
                    </div>

                    <?php
                }
                
                wp_reset_postdata(); // сброс

                ?>
            </div>
        </div>    
 </section>

<?php get_footer(); ?>