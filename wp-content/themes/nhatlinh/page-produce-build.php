<?php get_header();
    if( have_rows('heroes', 'option') ):
        while (have_rows('heroes', 'option')) : the_row();
            if (get_sub_field('page')->post_name === 'produce-build') :
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
  
    <div class="text-content" id="main-content">
        <div class="wrap">
        <?php while (have_rows('pb.left_content')) : the_row(); ?>
            <div class="row m-a">
                <div class="col-md-12">
                    <div class="headline font-din">
                        <span class="ul-multi-line">
	                        <?php the_sub_field('headline') ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
            <div class="row m-a">
                <?php while (have_rows('pb.left_content')) : the_row(); ?>
                <div class="col-md-6 item">
                    <div class="content content-list">
	                    <?php the_sub_field('content') ?>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php while (have_rows('pb.right_content')) : the_row(); ?>
                <div class="col-md-6 item">
                    <div class="content content-list">
	                    <?php the_sub_field('content') ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="grid-option-1">
			<?php if (have_rows('grid_layout')):
				while (have_rows('grid_layout')) : the_row();
					if (get_row_layout() === 'row_1') :
						?>
              <div class="row row-1">
                  <div class="col-md-6 file left">
                    <?php
                        $type = wp_check_filetype(get_sub_field('file_left'))['ext'];
                        if ($type == 'jpg' || $type == 'png') :
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
                        if ($type == 'jpg' || $type == 'png') :
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
            if (have_rows('items')):
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
                            if ($type == 'jpg' || $type == 'png') :
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
                            if ($type == 'jpg' || $type == 'png') :
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