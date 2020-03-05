<?php 
    // header.php
    get_header();
?>

    <!-- homepage contents. -->
    <div class="hero-banner">
        <div class="hero-banner__bg-image" style="background-image: url(<?php the_field('home_page_banner_image'); ?>);">
            <div class="hero-banner__container container">
                <div class="hero-banner__content">
                    <h1 class="headline headline--large text-w"><?php the_field('home_page_banner_headline'); ?></h1>
                    <p class="copy--large text-w"><?php the_field('home_page_banner_sub_headline'); ?></p>
                    <a href="#" class="btn btn--large"><?php the_field('home_page_banner_cta'); ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="courses-banner">
        <div class="courses-banner__container container">
            <div class="courses-banner__image" style="background-image: url(<?php the_field('home_page_jumbo_image'); ?>);"></div>
            <div class="courses-banner__content">
                <div class="headline headline--small text-b"><?php the_field('home_page_jumbo_title'); ?></div>
                <div class="courses-banner__copy copy--small"><?php the_field('home_page_jumbo_description'); ?></div>
                <a href="#" class="btn btn--medium"><?php the_field('home_page_jumbo_cta'); ?></a>
            </div>
        </div>
    </div>

    <div class="group-banner">
        <div class="group-banner__image" style="background-image: url(<?php the_field('home_page_group_team_image'); ?>);"></div>
        <div class="group-banner__container container">
            <div class="group-banner__content">
                <div class="headline headline--medium text-w"><?php the_field('home_page_group_team_title'); ?></div>
                <div class="group-banner__copy copy--small"><?php the_field('home_page_group_team_description'); ?></div>
                <a href="#" class="btn btn--medium"><?php the_field('home_page_group_team_cta'); ?></a>
            </div>
        </div>
    </div>

    <div class="team-banner">
        <div class="team-banner__container container">
            <div class="team-banner__content">
                <div class="team-banner__headline headline headline--medium text-b"><?php the_field('home_page_team_members_title'); ?></div>
                <div class="team-banner__copy copy--small"><?php the_field('home_page_team_members_description'); ?></div>
                <div class="team-banner__members">
                    <?php
                        $args = array( 'post_type' => 'team', 'posts_per_page' => 10 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                        <div class="member">
                            <img class="member-image" src="<?php the_field('member_image'); ?>" alt="member image">
                            <div class="member-copy text-b"><?php the_field('member_name'); ?></div>
                            <div class="member-position copy--small"><?php the_field('member_position'); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="offer-banner">
        <div class="offer-banner__container container">
            <div class="offer-banner__content">
                <div class="headline--small text-w">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                <a href="#" class="btn btn--medium--offer">Improve Thinking</a>
            </div>
        </div>
    </div>
    <!-- This is where your homepage contents go. -->

<?php 
    // footer.php
    get_footer();
?>