<?php get_header(); ?>
<div class="wrapper-product">
    <div class="wrapper-section">
    <div class="container wrapper-contents">
        <div class="container-title">
            <div>
                <i class="fas fa-newspaper fa-2x"></i>
                <span class="title">Tất cả dịch vụ</span>
            </div>
        </div>
        <div class="container-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 container-products">
                    <?php
                        if (have_rows('services')) :
                            while (have_rows('services')) : the_row();
                        ?>
                        <div class="sppb-col-md-4" id="column-wrap-id-1485949473589">
                            <div id="column-id-1485949473589" class="sppb-column">
                                <div class="sppb-column-addons">
                                    <div id="sppb-addon-wrapper-1591412768801" class="sppb-addon-wrapper">
                                        <div id="sppb-addon-1591412768801" class=" sppb-wow zoomIn clearfix " data-sppb-wow-duration="300ms">
                                            <div class="sppb-addon sppb-addon-raw-html ">
                                                <div class="sppb-addon-content custom-item">
                                                    <div class="dv-item">
                                                        <a href="">
                                                            <img src="<?php echo get_sub_field('image') ?>" />
                                                            <span class="s-text"><?php echo the_sub_field('title'); ?></span>
                                                            <span class="l-text"><?php echo the_sub_field('description_title'); ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php get_footer(); ?>