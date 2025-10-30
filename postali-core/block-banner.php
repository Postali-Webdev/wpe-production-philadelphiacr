<section class="banner">
    <div class="container">
        <div class="columns">
            <?php if(is_post_type_archive('reviews')) { ?> <!-- for testimonials -->
                <div class="column-50">
                    <h1><?php the_field('testimonials_header_banner_title','options'); ?></h1>
                    <p><?php the_field('testimonials_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <p><a href="/contact/" title="Online form" class="btn">Complete Our Contact Form</a></p>
                        </div>
                        <div class="contact-block-right">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <?php if(get_field('featured_review_content','options')) { ?>
                <div class="column-50 featured">
                    <p class="notable">NOTABLE REVIEW</p>
                    <p><?php the_field('featured_review_content','options'); ?></p>
                    <p class="reviewer"><?php the_field('featured_review_author','options'); ?></p>
                    <?php 
                    $logo = get_field('featured_review_source','options');
                    if( !empty( $logo ) ): ?>
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <?php } ?>

            <?php } elseif(is_post_type_archive('results')) { ?> <!-- for results -->

                <div class="column-75 block">
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span>Case Results</span></span></p>
                    <h1><?php the_field('results_header_banner_title','options'); ?></h1>
                    <p><?php the_field('results_header_banner_subheadline','options'); ?></p>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <p><a href="/contact/" title="Online form" class="btn">Complete Our Contact Form</a></p>
                        </div>
                        <div class="contact-block-right">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <?php if(get_field('featured_result_headline','options')) { ?>
                <div class="column-50 result">
                    <div class="result-main">
                        <p class="notable">NOTABLE RESULT</p>
                        <h3><?php the_field('featured_result_headline','options'); ?></h3>
                    </div>
                    <div class="accordions">
                        <div class="accordions_title"><p>View Details <span></span></p></div>
                        <div class="accordions_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et tincidunt purus, et iaculis sem. Nullam a ante justo. Aliquam facilisis, elit in accumsan semper.</p></div>
                    </div>
                </div>
                <?php } ?>

            <?php } else { ?> <!-- end results -->

            <div class="column-75 block">

                <?php if ( !is_page() && is_singular() && get_post_type() !== 'results' ) { ?>
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <a href="/blog/">Blog</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
                    <p class="blog-date"><strong><?php the_date(); ?></strong></p>
                <?php } ?>

                <?php if(is_singular('results')) { ?>
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <a href="/results/">Case Results</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></p>
                    <p class="blog-date"><strong><?php the_date(); ?></strong></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page">Page Not Found</span></span></span></p>
                    <h1><?php the_field('404_header_banner_title','options'); ?></h1>
                <?php } elseif (is_search()) { ?>
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page">Search Results</span></span></span></p>
                    <h1 class="post-title"><?php printf( esc_html__( 'Search results for "%s"', 'postali' ), get_search_query() ); ?></h1>
                <?php } elseif (is_page_template('page-practice-parent.php') || is_page_template('page-interior.php') || is_home() || is_page_template('page-contact.php') || is_page_template('page-sitemap.php')) { ?>
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

                    <?php if (is_home()) { ?>
                        <h1><?php the_field('blog_header_banner_title','options'); ?></h1>
                        <?php } else { ?>
                        <h1><?php the_title(); ?></h1>
                    <?php } ?>
                
                <?php } elseif(is_category()) { ?>
                    <p id="breadcrumbs"><span><span><a href="/">Homepage</a> <span class="separator"> / </span> <a href="/blog/">Blog</a> <span class="separator"> / </span> <span class="breadcrumb_last" aria-current="page"><?php echo esc_html(  single_cat_title() ); ?></span></span></span></p>
                    <h1><?php echo esc_html(  single_cat_title() ); ?></h1>                    
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } else { ?>
                    <h1><?php the_title(); ?></h1>
                <?php } ?>
                <?php if (is_page_template('page-practice-parent.php')) { ?>
                    <p><?php the_field('value_proposition'); ?></p>
                <?php } ?>
                <?php if (is_404()) { ?>
                    <p><?php the_field('404_header_banner_subheadline','options'); ?></p>
                <?php } elseif (is_home()) { ?>
                    <p><?php the_field('blog_header_banner_subheadline','options'); ?></p>   
                <?php } elseif (is_page_template('page-landing.php')) { ?>
                    <p><?php the_field('practice_areas_value_prop','options'); ?></p>                 
                <?php } else { ?>
                    <p><?php the_field('banner_intro_copy'); ?></p>
                <?php } ?>

                <?php if ( !is_page() && is_singular() && get_post_type() !== 'results' )  { ?>
                    <p class="cta">Written by <?php the_field('blog_author','options'); ?> </p>
                    <p>Category: 
                    <?php $categories = get_the_category();
                        $separator = ', ';
                        $output = '';
                        if ( ! empty( $categories ) ) {
                            foreach( $categories as $category ) {
                                $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                            }
                            echo trim( $output, $separator );
                        } ?>
                    </p>
                <?php } ?>

                <?php if(!is_single()) { ?>
                    <p class="cta"><?php the_field('call_to_action_text','options'); ?> </p>
                    <div class="main-contact">
                        <div class="contact-block-left">
                            <a href="/contact/" title="Online form" class="btn">Complete Our Contact Form</a>
                        </div>
                        <?php if (!is_page_template('page-contact.php')) { ?>

                        <?php if (get_field('results_button_title')) { ?>
                        <div class="contact-block-right">
                            <a href="/blog/category/case-results/" title="Online form" class="btn"><?php the_field('results_button_title'); ?></a>
                        </div>
                        <?php } ?>

                        <?php } ?>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>
    <?php if(get_field('include_gradient_overlay','options')) { ?>
        <div class="banner-gradient"></div>
    <?php } ?>

    

    <div class="background-image">
    
    <!-- bucks county -->
    <?php if (is_tree('2275')) { ?>

    <?php 
    $image = get_field('header_bucks_county','options');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <!-- delaware county -->
    <?php } elseif (is_tree('2277')) { ?>

    <?php 
    $image = get_field('header_delaware_county','options');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <!-- montgomery county -->
    <?php } elseif (is_tree('2280')) { ?>

    <?php 
    $image = get_field('header_montgomery_county','options');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <!-- downtown -->
    <?php } elseif (is_tree('2286')) { ?>

    <?php 
    $image = get_field('header_downtown','options');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <?php } elseif (is_home() || is_category() || is_post_type_archive('results')) { ?>

        <?php 
        $image = get_field('blog_header_default_image','options');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        
    <?php } elseif (is_single() || is_search() || is_page_template('page-contact.php') || is_page_template('page-sitemap.php')  || is_singular('results')) { ?>

        <?php 
        $image = get_field('default_background_image','options');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    <?php } else { ?>

    <!-- if no featured image set -->
    <?php if (!get_field('banner_background_image')) { ?>

        <?php
        $post_ID = get_the_ID();
        $parentpost_id = wp_get_post_parent_id( $post_ID );

        $image = get_field('banner_background_image', $parentpost_id );
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    <?php } else { ?>

        <?php 
            $image = get_field('banner_background_image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

        <?php } ?>

    <?php } ?>

    </div>

</section>