<?php get_header(); ?>

<section class="section-automating animate-block">
        <div class="wrapp-size">
            <div class="animation-wrapp">
              
                <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
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
                        <img src="<?php the_field('main_img') ?>" alt="">
                        <p><?php the_field('text') ?></p>
                    </div>

                    <?php
                }
                
                wp_reset_postdata(); // сброс

                ?>
            </div>
        </div>    
 </section>
	
	<section class="banner animate-block">
		<div class="wrapp-size">
			<div class="banner__description">
				<div class="animation-wrapp">
					<h1 class="title">Smart accountants automate</h1>
				</div>                
				<p>Netgain apps help smart accountants simplify and automate processes. From lease compliance to advanced fixed assets and loan management. 
				Pretty smart, right?</p>
				<h3 class="title-link">Learn about accounting automation</h3>
				<a href="#" class="button">LEARN<i class="fas fa-chevron-right"></i></a>
			</div>
			<div class="banner__img">
				<img class="banner__img-desk" src="./images/bg/bg_banner.png" alt="banner">
				<img class="banner__img-mob" src="./images/bg/bg_banner-mob.png" alt="banner">
			</div>
		</div>
	</section>	

	<?php get_footer(); ?>
