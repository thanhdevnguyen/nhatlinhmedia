<?php get_header();
    if( have_rows('heroes', 'option') ):
        while (have_rows('heroes', 'option')) : the_row();
            if (get_sub_field('page')->post_name === 'book-manage') :
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
                <div class="arrow back">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Orange.svg">
                    </a>
                </div>
            </div>
            <?php
            endif;
        endwhile;
    endif;
    ?>
    <div class="wrap" id="main-content">
        <div class="row list-location">
			
			    <?php  if(have_rows('list_item')):
				    while (have_rows('list_item')) : the_row(); ?>
                <div class="col-md-6 col-xl-4 item">
                    <div class="image">
                        <img src="<?php the_sub_field('image') ?>" alt="">
                        <a target="_blank" href="<?php the_sub_field('link_download') ?>">
                            <div class="content">
                                <div class="title font-din">
                                    <span> <?php the_sub_field('headline') ?></span>
                                </div>
                                <div class="des">
															    <?php the_sub_field('content') ?>
                                </div>
                                <div class="tags">
															    <?php the_sub_field('tags') ?>
                                </div>
                                <div class="more">
                                    <span>CLICK TO DOWNLOAD EPK</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
				    <?php
				    endwhile;
			    endif;
			    ?>
        </div>
    </div>
    
    <div class="text-content">
        <div class="row">
            <?php if( have_rows('list_text_content') ): ?>
                <?php while( have_rows('list_text_content') ): the_row();
                    ?>
                    <div class="col-md-4 item">
                        <div class="headline font-din">
                            <span class="ul-multi-line white">
                                <?php the_sub_field('bc.headline') ?>
                            </span>
                        </div>
                        <div class="subline content-list">
                            <?php the_sub_field('bc.content') ?>
                        </div>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid-option-1">
			<?php  if(have_rows('grid_layout')):
				while (have_rows('grid_layout')) : the_row();
					if(get_row_layout() === 'row_1') :
						?>
              <div class="row row-1">
                  <div class="col-md-6 file left">
                    <?php
                        $type = wp_check_filetype(get_sub_field('file_left'))['ext'];
                        if($type == 'jpg' || $type == 'png') :
                            ?>
                          <img src="<?php echo get_sub_field('file_left') ?>">
                        <?php
                        else :
                            ?>
                          <div class="video">
                              <video poster="<?php echo get_sub_field('poster_left') ?>" src="<?php echo get_sub_field('file_left') ?>"></video>
                          </div>
                        <?php
                        endif;
                    ?>
                  </div>
                  <div class="col-md-6 file right">
                    <?php
                        $type = wp_check_filetype(get_sub_field('file_right'))['ext'];
                        if($type == 'jpg' || $type == 'png') :
                            ?>
                          <img src="<?php echo get_sub_field('file_right') ?>">
                        <?php
                        else :
                            ?>
                            <div class="video">
                                <video poster="<?php echo get_sub_field('poster_right') ?>" src="<?php echo get_sub_field('file_right') ?>"></video>
                            </div>
                        <?php
                        endif;
                    ?>
                  </div>
              </div>
					<?php
          elseif (get_row_layout() === 'row_2') :
            if( have_rows('items') ):
                ?>
                <div class="row row-2">
                    <?php while (have_rows('items')) : the_row(); ?>
                      <div class="col-4 col-sm-4 file">
                          <img src="<?php echo get_sub_field('image') ?>">
                          <div class="headline font-din">
                            <?php echo get_sub_field('title') ?>
                          </div>
                      </div>
                    <?php endwhile; ?>
                </div>
            <?php
            endif;
          elseif (get_row_layout() === 'row_3') : ?>
              <div class="row row-3">
                  <div class="col-md-6 file left">
                      <div class="wrap">
                    <?php
                        $type = wp_check_filetype(get_sub_field('file_left'))['ext'];
                        if($type == 'jpg' || $type == 'png') :
                            ?>
                              <img src="<?php echo get_sub_field('file_left') ?>">
                        <?php
                        else :
                            ?>
                            <div class="video">
                                <video poster="<?php echo get_sub_field('poster_left') ?>" src="<?php echo get_sub_field('file_left') ?>"></video>
                            </div>
                            <?php
                            endif;
                        ?>
                      </div>
                  </div>
                  <div class="col-md-6 file right">
                      <div class="wrap">
                        <?php
                            $type = wp_check_filetype(get_sub_field('file_right'))['ext'];
                            if($type == 'jpg' || $type == 'png') :
                                ?>
                              <img src="<?php echo get_sub_field('file_right') ?>">
                            <?php
                            else :
                                ?>
                                <div class="video">
                                    <video poster="<?php echo get_sub_field('poster_right') ?>" src="<?php echo get_sub_field('file_right') ?>"></video>
                                </div>
                            <?php
                            endif;
                        ?>
                      </div>
                  </div>
              </div>
					<?php
          elseif (get_row_layout() === 'full_width') : ?>
              <div class="row row-3">
                  <div class="item col-md-12">
                    <?php
                        $type = wp_check_filetype(get_sub_field('file'))['ext'];
                        if($type == 'jpg' || $type == 'png') :
                            ?>
                          <img src="<?php the_sub_field('file') ?>">
                        <?php
                        else :
                            ?>
                            <div class="video">
                                <video poster="<?php echo get_sub_field('poster') ?>" src="<?php echo get_sub_field('file') ?>"></video>
                            </div>
                        <?php
                        endif;
                    ?>
                  </div>
              </div>
					<?php
					endif;
				endwhile;
			endif;
			?>
    </div>
  
<?php get_footer(); ?>