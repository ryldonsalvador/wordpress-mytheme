<?php 
    // header.php
    get_header();
?>
    <!-- homepage contents. -->
    <div class="hero-banner">
        <div class="hero-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hero.png') ?>);">
            <div class="hero-banner__container container">
                <div class="hero-banner__content">
                    <h1 class="headline headline--large text-w">We Improve Thinking.</h1>
                    <p class="copy--large text-w">You may not set strategy, but you make it happen! We are here to help you succeed.</p>
                    <a href="#" class="btn btn--large">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-banner">
        <div class="courses-banner__container container">
            <div class="courses-banner__image" style="background-image: url(<?php echo get_theme_file_uri('/images/phone.png'); ?>);"></div>
            <div class="courses-banner__content">
                <div class="headline headline--small text-b">Aenean Commodo Ligula Aenean Massa</div>
                <div class="courses-banner__copy copy--small">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarks grove right at the coast of the Semantics, a large language ocean.</div>
                <a href="#" class="btn btn--medium">Browse Courses</a>
            </div>
        </div>
    </div>

    <div class="group-banner">
    <div class="group-banner__image" style="background-image: url(<?php echo get_theme_file_uri('/images/team.png'); ?>);"></div>
        <div class="group-banner__container container">
            <div class="group-banner__content">
                <div class="headline headline--medium text-w">Lorem ipsum dolor sit amet.</div>
                <div class="group-banner__copy copy--small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sapiente autem illo asperiores ut molestiae in. Laudantium optio suscipit sed corporis molestias tenetur magni delectus officia voluptatibus tempore consequatur sit quia nesciunt ad, veniam necessitatibus minima? Aut, esse? Quas, aut distinctio! Atque modi nobis consequuntur voluptatibus, dolor officiis et delectus?</div>
                <a href="#" class="btn btn--medium">Learn More</a>
            </div>
        </div>
    </div>
<?php 
    get_footer();
?>