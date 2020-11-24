<?php get_header();
if( have_rows('heroes', 'option') ):
	while (have_rows('heroes', 'option')) : the_row();
		if (get_sub_field('page')->post_name === 'location') :
			?>
        <div class="start-page" style="background-image: url(<?php the_sub_field('background_image') ?>)">
            <div class="headline">
							<?php the_sub_field('small_text') ?>
            </div>
            <div class="subline font-din">
							<?php the_sub_field('big_text') ?>
            </div>
            <div class="arrow down">
                <a href="#main-content">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Down.svg">
                </a>
            </div>
        </div>
		<?php
		endif;
	endwhile;
endif;
?>
  
    <div class="row list-location" id="main-content">
	
	    <?php
		    global $post;
		    $args = array( 'post_type' => 'post', 'post_status'=> 'publish');
		    $posts = get_posts( $args );
		    foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-6 col-xl-4 item">
                    <div class="image">
                        <img src="<?php echo get_the_post_thumbnail_url($post) ?>">
                        <a href="<?php echo get_permalink($post) ?>">
                            <div class="content">
                                <div class="title font-din">
                                    <span><?php echo get_the_title($post) ?></span>
                                </div>
                                <div class="des lh-20">
	                                <?php echo $post->post_content ?>
                                </div>
                                <div class="tags lh-20">
	                                <?php echo get_field('tags') ?>
                                </div>
                                <div class="more">
                                    <span>more</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
		    <?php endforeach;
		    wp_reset_postdata();?>
        </div>
<?php get_footer(); ?>