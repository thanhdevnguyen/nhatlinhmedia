<?php get_header(); ?>
<section id="sp-section-2">
    <div class="row">
        <div id="sp-title" class="col-lg-12 ">
            <div class="sp-column "></div>
        </div>
    </div>
</section>
<section id="sp-main-body">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <main id="sp-component" class="col-lg-12 " role="main">
                    <div class="sp-column ">
                        <div id="system-message-container">
                        </div>
                        <div class="hjhj item-pagefull">
                            <div>
                                <div id="sp-page-builder" class="sp-page-builder sppb-article-page-wrapper">
                                    <div class="page-content">
                                        <div class="container-banner">
                                            <div class="banner">
                                                <?php if (get_field('banner')) : ?>
                                                    <img src="<?php the_field('banner'); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <section id="dich-vu-home" class="sppb-section">
                                            <div id="sppb-addon-wrapper-1591431223657" class="sppb-addon-wrapper">
                                                <div id="sppb-addon-1591431223657" class="clearfix ">
                                                    <div class="sppb-addon sppb-addon-header sppb-text-center">
                                                        <h2 class="sppb-addon-title">Tất cả các dịch vụ</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-row-overlay"></div>
                                            <div class="sppb-row-container">
                                                <div class="sppb-row">
                                                    <?php
                                                    if (have_rows('services')) :

                                                        // Loop through rows.
                                                        while (have_rows('services')) : the_row();
                                                    ?>
                                                            <div class="sppb-col-md-4" id="column-wrap-id-1485949473589">
                                                                <div id="column-id-1485949473589" class="sppb-column">
                                                                    <div class="sppb-column-addons">
                                                                        <div id="sppb-addon-wrapper-1591412768801" class="sppb-addon-wrapper">
                                                                            <div id="sppb-addon-1591412768801" class=" sppb-wow zoomIn clearfix " data-sppb-wow-duration="300ms">
                                                                                <div class="sppb-addon sppb-addon-raw-html ">
                                                                                    <div class="sppb-addon-content">
                                                                                        <div class="dv-item">
                                                                                            <a href="dich-vu/san-xuat-tvc-quang-cao.html">
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
                                        <section id="sp-feature" class="sppb-section">
                                            <div class="sppb-row-overlay"></div>
                                            <div class="sppb-row-container">
                                                <div class="sppb-row">
                                                    <div class="sppb-col-md-12" id="column-wrap-id-1591412768767">
                                                        <div id="column-id-1591412768767" class="sppb-column">
                                                            <div class="sppb-column-addons">
                                                                <div id="sppb-addon-wrapper-1591431223657" class="sppb-addon-wrapper">
                                                                    <div id="sppb-addon-1591431223657" class="clearfix ">
                                                                        <div class="sppb-addon sppb-addon-header sppb-text-center">
                                                                            <h2 class="sppb-addon-title">Sản
                                                                                phẩm nổi bật</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="sppb-addon-wrapper-1591424409586" class="sppb-addon-wrapper">
                                                                    <div id="sppb-addon-1591424409586" class="clearfix ">
                                                                        <div class="sppb-addon sppb-addon-module ">
                                                                            <div class="sppb-addon-content">
                                                                                <div class="sptab_red" id="sptab100">
                                                                                    <div>
                                                                                        <div class="tab-padding">
                                                                                            <div class="custom">
                                                                                                <!-- START: Modules Anywhere -->
                                                                                                <ul class="category-module sanpham">
                                                                                                    <?php
                                                                                                    if (have_rows('products')) :

                                                                                                        // Loop through rows.
                                                                                                        while (have_rows('products')) : the_row();
                                                                                                    ?>
                                                                                                            <li>
                                                                                                                <a class="mod-articles-thumbs" href="san-pham-tvc/phim-quang-cao-tvc-bia-ha-noi-tet-2018.html">
                                                                                                                    <img src="<?php echo get_sub_field('images') ?>" /></a>
                                                                                                                <a class="mod-articles-category-title ">
                                                                                                                    <?php echo the_sub_field('name'); ?></a></li>
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


                            <div class="article-ratings">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</section>
<section id="sp-bottom-cont">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <div class="sp-module slogan2">
                    <div class="sp-module-content">

                        <div class="customslogan2">
                            <div class="container">
                                <h2 style="text-align: center;"><b>CÔNG TY TRUYỀN THÔNG UY TÍN HÀNG ĐẦU</b></h2>
                                <p style="text-align: center;"><b>VIETSTARMAX</b> là Công ty Truyền thông uy tín
                                    hàng đầu trong lĩnh vực Truyền thông, Quảng cáo trên cả nước. Với khẩu hiệu:
                                    “Sáng tạo không ngừng”, chúng tôi đã nỗ lực nghiên cứu các ý tưởng, giải
                                    pháp và cách thức thực hiện nhằm giúp các doanh nghiệp – khách hàng mục tiêu
                                    của chúng tôi - nâng cao hiệu quả trong hoạt động, tiến lên mạnh mẽ về phía
                                    trước...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-module  quay-phim">
                    <div class="sp-module-content">

                        <div class="custom quay-phim">
                            <p><img title="Quay phim chuyên nghiệp Vietstarmax" src="<?php echo get_template_directory_uri() ?>/assets/images/0new/quay-phim-vietstarmax2.webp" alt="Đội ngũ quay phim chuyên nghiệp Vietstarmax" width="100%" /></p>
                        </div>
                    </div>
                </div>
                <div class="sp-module  dktvda">
                    <div class="sp-module-content">

                        <div class="custom dktvda">
                            <div id="dktv" class="container dk3 white"> 
                                <p>Bắt đầu dự án của bạn cùng chuyên gia truyền thông</p>
                                <p>Hơn 1000 doanh nghiệp đã và đang đồng hành cùng VIETSTARMAX xây dựng dự án
                                    truyền thông</p>
                                <button id="myBtn" class="dkbtn">Đăng ký tư vấn</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-module ">
                    <div class="sp-module-content">

                        <div class="custom">
                            <p style="margin-bottom: 0;"><img style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo get_template_directory_uri() ?>/assets/images/0new/vietstarmax-office3.webp" alt="Đội ngũ nhân sự Vietstarmax" /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>