<?php get_header(); ?>
<style>
    html, body {
        height: 100%;
    }
    body {
        background: #FF3E00;
    }
    header #menuToggle span {
        background: #FFFFFF;
    }
    #menu #close-menu img {
       display: none;
    }
    #menu #close-menu img.white {
        display: block;
    }
    #menu .menu-list ul li a {
        color: #FFFFFF;
    }
    #menu .menu-list ul li a:before {
        background-color: #FFFFFF;
    }
</style>
  <div class="start-page error">
    <div class="headline">
        qd ^fcfgdf5 §2?
    </div>
    <div class="subline font-din">
        <p>oh boy<br>
            errrrror</p>
        <div class="back-start-page font-din">
            <a href="<?php echo get_site_url() ?>">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-White.svg">
            </a>
            <a class="cta white" href="<?php echo get_site_url() ?>">
                Back to startpage
            </a>
        </div>
    </div>
    <div class="arrow back">
        <a href="#">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/Arrow-White.svg">
        </a>
    </div>
</div>