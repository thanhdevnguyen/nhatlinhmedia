<?php
get_header(); ?>
	<div class="start-page" style="background-image: url(<?php the_field('post_background_image') ?>)">
		<div class="headline">
            <?php the_title() ?>
		</div>
		<div class="subline font-din">
            <?php the_title() ?>
		</div>
		<div class="arrow down">
			<a href="#mail-content">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Down.svg">
			</a>
		</div>
        <div class="arrow back">
            <a href="javascript:void(0)">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Orange.svg">
            </a>
        </div>
	</div>
	
	<div class="post-detail" id="mail-content">
		<div class="info">
			<div class="wrap">
				<div class="row m-a">
                    <?php while (have_rows('post.left_content')) : the_row(); ?>
                        <div class="col-md-6 left">
                            <div class="headline font-din">
                                <span class="ul-multi-line">
                                    <?php the_sub_field('headline') ?>
                                </span>
                            </div>
                            <div class="content">
	                            <?php the_sub_field('content') ?>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <?php while (have_rows('post.right_content')) : the_row(); ?>
					<div class="col-md-6 right">
						<div class="headline font-din">
							<span class="ul-multi-line">
                                <?php the_sub_field('headline') ?>
                            </span>
						</div>
						<div class="content">
                            <?php the_sub_field('content') ?>
						</div>
					</div>
                    <?php endwhile; ?>
				</div>
				<div class="request">
					<div class="arrow2">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Orange.svg">
						<a href="mailto:<?php the_field('request_to_book') ?>" class="ul font-din ul-s">Request to book</a>
					</div>
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
                  <div class="row row-nega50 m-a full-width">
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
        <?php if (get_field('tos.content') != null) : ?>
            <div class="type-of-service">
                <div class="row m-a">
                    <div class="col-md-4">
                        <div class="headline font-din">
                            <span class="ul-multi-line">
                                <span>Grundriss</span><br>
                                <span>Location</span>
                            </span>
                        </div>
                        <div class="content">
                            <?php the_field('tos.content') ?>
                        </div>
                    </div>
                    <div class="image col-md-8">
                        <img src="<?php the_field('image') ?>" alt="">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!--<div class="list-work">
            <div class="row row-nega50 m-a">
                <?php /*if (get_field('cwp.content') != null) : */?>
                    <div class="item col-md-4">
                        <div class="headline font-din">
                            <a href="javascript:void(0)" class="ul-multi-line">
                                <span>Capacity</span> <br>
                                <span>WIFI Password</span>
                            </a>
                        </div>
                        <div class="content">
					                <?php /*the_field('cwp.content') */?>
                        </div>
                    </div>
                <?php /*endif; */?>
	
	            <?php /*if (get_field('las.content') != null) : */?>
                    <div class="item col-md-4">
                        <div class="headline font-din underline">
                            <a href="javascript:void(0)" class="ul-multi-line">
                                <span>Light and</span> <br>
                                <span>Sound</span>
                            </a>
                        </div>
                        <div class="content">
							            <?php /*the_field('las.content') */?>
                        </div>
                    </div>
	            <?php /*endif; */?>
	
	            <?php /*if (get_field('os.content') != null) : */?>
                    <div class="item col-md-4">
                        <div class="headline font-din underline">
                            <a href="javascript:void(0)" class="ul-multi-line">
                                <span>Other</span> <br>
                                <span>Stuff</span>
                            </a>
                        </div>
                        <div class="content">
							            <?php /*the_field('os.content') */?>
                        </div>
                    </div>
	            <?php /*endif; */?>
            </div>
        </div>-->
        <div class="location">
            <div class="information">
                <div class="row m-a">
	                <?php if (get_field('pa.content') != null) : ?>
                        <div class="col-md-4">
                            <div class="headline font-din underline">
                                <span class="ul-multi-line">
                                    <span>Location</span> <br>
                                    <span>Address</span>
                                </span>
                            </div>
                            <div class="text">
							                <?php the_field('pa.content') ?>
                            </div>
                        </div>
	                <?php endif; ?>
	                <?php if (get_field('download_link') != null) : ?>
                        <div class="col-md-6">
                            <div class="arrow2">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-Orange.svg">
                                <a target="_blank" href="<?php the_field('download_link') ?>" class="ul font-din ul-s">DOWNLOAD MORE</a>
                            </div>
                        </div>
	                <?php endif; ?>
                </div>
            </div>
            <div id="map" class="map">
	            <?php the_field('location') ?>
            </div>
        </div>
	</div>
<?php
get_footer();
