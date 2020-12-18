<?php get_header(); ?>
<div class="container-body">
    <section>
        <div class="row">
            <div id="sp-title" class="col-lg-12 ">
                <div class="sp-column "></div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="container-inner">
                <div class="row">
                    <main id="sp-component" class="col-lg-12 " role="main">
                        <div class="sp-column ">
                            <div class="hjhj item-pagefull">
                                <div>
                                    <div id="sp-page-builder" class="sp-page-builder sppb-article-page-wrapper">
                                        <div class="page-content">
                                            <div class="container-banner color-yellow">
                                                <div class="banner">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">
                                                        <?php
                                                            if( have_rows('banner') ):
                                                                while( have_rows('banner') ) : the_row();?>
                                                                <div class="swiper-slide">
                                                                    <img src="<?php echo get_sub_field('image') ?>" />
                                                                </div>
                                                                <?php
                                                                endwhile;
                                                            endif;
                                                            ?>
                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <section class="sppb-section container-content-common color-yellow">
                                                <div id="sppb-addon-wrapper-1591431223657" class="sppb-addon-wrapper">
                                                    <div id="sppb-addon-1591431223657" class="clearfix ">
                                                        <div class="sppb-addon sppb-addon-header sppb-text-center">
                                                            <h2 class="title-content">
                                                                <i class="far fa-list-alt mr-3"></i>
                                                                <span class="">Tất cả các dịch vụ</span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sppb-row-container custom-content-product">
                                                    <div class="sppb-row">
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
                                            </section>
                                            <section class="sppb-section container-content-common color-yellow">
                                                <div class="sppb-row-container">
                                                    <div class="sppb-row">
                                                        <div class="sppb-col-md-12">
                                                            <div id="column-id-1591412768767" class="sppb-column">
                                                                <div class="sppb-column-addons custom-list-product">
                                                                    <div id="sppb-addon-wrapper-1591431223657" class="sppb-addon-wrapper">
                                                                        <div id="sppb-addon-1591431223657" class="clearfix ">
                                                                            <div class="sppb-addon sppb-addon-header sppb-text-center">
                                                                                <h2 class="title-content">
                                                                                <i class="fas fa-th-list mr-3"></i>
                                                                                    <span>Sản phẩm nổi bật</span>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sppb-addon-wrapper">
                                                                        <div class="clearfix ">
                                                                            <div class="sppb-addon sppb-addon-module ">
                                                                                <div class="sppb-addon-content">
                                                                                    <div class="sptab_red">
                                                                                        <div>
                                                                                            <div class="tab-padding">
                                                                                                <div class="custom">
                                                                                                    <ul class="category-module sanpham">
                                                                                                        <?php
                                                                                                        if (have_rows('products')) :
                                                                                                            while (have_rows('products')) : the_row();
                                                                                                        ?>
                                                                                                            <li>
                                                                                                                <a class="mod-articles-thumbs" href="">
                                                                                                                    <img src="<?php echo get_sub_field('images') ?>" /></a>
                                                                                                                <a class="description-product">
                                                                                                                    <i class="fas fa-angle-double-right float-left ml-3"></i>
                                                                                                                    <span class="">
                                                                                                                        <?php echo the_sub_field('name'); ?>
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        <?php
                                                                                                            endwhile;
                                                                                                        endif;
                                                                                                        ?>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div style="clear:both"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>
    <section id="sp-bottom-cont">
        <div class="container-content-common color-yellow container-content-bottom">
            <div class="container">
            <?php if( have_rows('about_company') ): ?>
                <?php while( have_rows('about_company') ): the_row(); ?>
                    <div class="sp-module slogan2">
                        <div class="sp-module-content">
                            <div class="customslogan2">
                                <div class="container">
                                    <div class="content-about-us">
                                        <div class="about-us">
                                            <h3>
                                                <i class="fas fa-building mr-3"></i>
                                                <b><?php the_sub_field('title'); ?></b>
                                            </h3>
                                            <p class="description-about-us"><?php the_sub_field('description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-module quay-phim">
                        <div class="sp-module-content">
                            <div class="custom quay-phim">
                                <p><img src="<?php echo get_sub_field('image') ?>" width="100%" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="sp-module">
                        <div class="sp-module-content">
                            <div class="customslogan2">
                                <div class="container"> 
                                    <div class="content-about-us">
                                        <div class="about-us">
                                        <h3>
                                            <i class="fas fa-id-card mr-3"></i>
                                            <b><?php the_sub_field('title_2'); ?></b>
                                        </h3>
                                        <p class="description-about-us"><?php the_sub_field('description_2'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <div class="custom">
                                <p style="margin-bottom: 0;">
                                <img style="display: block; margin-left: auto; margin-right: auto;" 
                                src="<?php echo get_sub_field('image_2') ?>" /></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      speed: 700,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
	</script>
<?php get_footer(); ?>