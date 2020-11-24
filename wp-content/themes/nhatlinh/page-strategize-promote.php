<?php get_header();
    if( have_rows('heroes', 'option') ):
        while (have_rows('heroes', 'option')) : the_row();
            if (get_sub_field('page')->post_name === 'strategize-promote') :
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
    <div class="grid-action" id="main-content">
        <div class="wrap">
            <div class="row mobile">
                <div class="col-md-12">
                    <div class="font-din text-hero">
                        <p>Pilsner Urquell <br>
                            Frangelico / Cases</p>
                    </div>
                </div>
            </div>
            <?php  if(have_rows('grid_row')):
                $i = 0;
                while (have_rows('grid_row')) : the_row();
                    if($i == 1) {
                        ?>
                  <div class="row desktop">
                      <div class="col-md-12">
                          <div class="font-din text-hero">
                              <p>Pilsner Urquell <br>
                                  Frangelico / Cases</p>
                          </div>
                      </div>
                  </div>
                <?php }
            if(get_row_layout() === '3_image') :
                ?>
                  <div class="row">
                      <div class="item col-md-4">
                          <div class="image">
                              <img src="<?php the_sub_field('image_1') ?>" alt="">
                              <div class="headline">
                                <?php the_sub_field('text_1') ?>
                              </div>
                          </div>
                      </div>
                      <div class="item col-md-4">
                          <div class="image">
                              <img src="<?php the_sub_field('image_2') ?>" alt="">
                              <div class="headline">
                                <?php the_sub_field('text_2') ?>
                              </div>
                          </div>
                      </div>
                      <div class="item col-md-4">
                          <div class="image">
                              <img src="<?php the_sub_field('image_3') ?>" alt="">
                              <div class="headline">
                                <?php the_sub_field('text_3') ?>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php
              elseif (get_row_layout() === '2_image') : ?>
                  <div class="row">
                      <div class="item col-md-6">
                          <div class="image">
                              <img src="<?php the_sub_field('image_1') ?>" alt="">
                              <div class="headline">
								<?php the_sub_field('text_1') ?>
                              </div>
                          </div>
                      </div>
                      <div class="item col-md-6">
                          <div class="image">
                              <img src="<?php the_sub_field('image_2') ?>" alt="">
                              <div class="headline">
                                <?php the_sub_field('text_2') ?>
                              </div>
                          </div>
                      </div>
                  </div>
                    <?php
                    endif;
                    $i++;
                endwhile;
            endif;
            ?>
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

    <div class="text-content">
        <div class="list-work">
            <div class="row row-nega50 m-a">
                <?php  while (have_rows('sp.left_content')) : the_row(); ?>
                  <div class="item col-md-6">
                      <div class="headline font-din underline">
                          <span class="ul-multi-line">
                            <?php the_sub_field('headline') ?>
                          </span>
                      </div>
                      <div class="content content-list">
                        <?php the_sub_field('content') ?>
                      </div>
                  </div>
                <?php endwhile; ?>
							
                <?php  while (have_rows('sp.right_content')) : the_row(); ?>
                  <div class="item col-md-6">
                      <div class="headline font-din underline">
                          <span class="ul-multi-line">
                            <?php the_sub_field('headline') ?>
                          </span>
                      </div>
                      <div class="content content-list">
                        <?php the_sub_field('content') ?>
                      </div>
                  </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div class="gallery">
			<?php  if(have_rows('gallery')):
				while (have_rows('gallery')) : the_row();
					if(get_row_layout() === 'row_1') :
						?>
                        <div class="row row-nega50 m-a">
													<?php if (get_sub_field('image_1') != null) : ?>
                              <div class="item col-4">
                                  <img src="<?php the_sub_field('image_1') ?>" alt="">
                              </div>
													<?php endif; ?>
													
													<?php if (get_sub_field('image_2') != null) : ?>
                              <div class="item col-4">
                                  <img src="<?php the_sub_field('image_2') ?>" alt="">
                              </div>
													<?php endif; ?>
													
													<?php if (get_sub_field('image_3') != null) : ?>
                              <div class="item col-4">
                                  <img src="<?php the_sub_field('image_3') ?>" alt="">
                              </div>
													<?php endif; ?>
                        </div>
					<?php
          elseif (get_row_layout() === 'row_2') :
						?>
              <div class="row row-nega50 m-a">
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