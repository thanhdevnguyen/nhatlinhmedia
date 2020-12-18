<?php get_header(); ?>
<div class="wrapper-about-us">
    <div class="container-about-us">
        <div class="container-title">
            <div class="title">
                <span class="title">Giới thiệu về chúng tôi</span>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id="listar-main" class="listar-main listar-innerspeace listar-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="listar-content" class="listar-content">
                    <div class="listar-howitwork">
                        <?php if (have_rows('group-1')) : ?>
                            <?php while (have_rows('group-1')) : the_row();?>
                                <div class="listar-feature">
                                    <figure><img src="<?php echo get_sub_field('image') ?>"></figure>
                                    <div class="listar-featurecontent">
                                        <i class="icon-layers"></i>
                                        <h2><span class="listar-bluethemecolor">01 </span>Chúng tôi là ai?</h2>
                                        <div class="listar-description">
                                            <p><?php echo the_sub_field('content'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="listar-feature">
                        <?php if (have_rows('group-2')) : ?>
                            <?php while (have_rows('group-2')) : the_row();?>
                            <figure><img src="<?php echo get_sub_field('image') ?>"></figure>
                            <div class="listar-featurecontent">
                                <i class="icon-map3"></i>
                                <h2><span class="listar-bluethemecolor">02 </span>Chúng tôi làm gì?</h2>
                                <div class="listar-description">
                                <p><?php echo the_sub_field('content'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <div class="listar-feature">
                        <?php if (have_rows('group-3')) : ?>
                            <?php while (have_rows('group-3')) : the_row();?>
                            <figure><img src="<?php echo get_sub_field('image') ?>"></figure>
                            <div class="listar-featurecontent">
                                <i class="icon-hotairballoon"></i>
                                <h2><span class="listar-bluethemecolor">03</span> 12 Lý do chọn Nhật Linh Media</h2>
                                <div class="listar-description">
                                <p><?php echo the_sub_field('content'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>