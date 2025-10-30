<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner" id="hp-banner" style="background-image:url(<?php the_field('banner_background_image'); ?>);">
        <div class="container">
            <div class="columns">
                <div class="column-full">

                </div>
            </div>
        </div>
    </section>

    <section id="hp-box">
        <div class="container">
            <div class="columns">
                <div class="column-full centered" id="box-why">
                <?php 
                $logo = get_field('box_logo_image');
                if( !empty( $logo ) ): ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; ?>
                <div class="spacer-30"></div>
                <p>Why Are You Here?</p>
                <?php if( have_rows('box_buttons') ): ?>
                <div class="accordions">    
                <?php while( have_rows('box_buttons') ): the_row(); ?>  
                    <?php 
                    $btn_txt = get_sub_field('button_text');
                    $btn_content = get_sub_field('button_content');
                    ?>
                    <div class="accordions_title"><h3><?php echo $btn_txt; ?></h3></div>
                    <div class="accordions_content"><p><?php echo $btn_content; ?></p></div>
                <?php endwhile; ?>
                </div>
                <?php endif; ?> 
                </div>
                <div class="column-full" id="box-cta">
                    <p><?php the_field('box_cta_text_top'); ?></p>
                    <a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a>
                    <p><?php the_field('box_cta_text_bottom'); ?></p>
                </div>
                <div class="column-full" id="hp-results">
                    <div id="results_headline">
                        Latest Case Results
                    </div>
                    
                    <?php get_template_part('block','hp-results'); ?>

                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_1" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-full centered center block top">
                    <h1><span><?php the_field('panel_1_headline'); ?></span></h1>
                    <div class="subheadline"><?php the_field('panel_1_subheadline'); ?></div>
                </div>
                <div class="spacer-60"></div>
                <div class="column-33" id="results_slider">
                    <?php get_template_part('block','hp-results'); ?>
                </div>
                <div class="column-66">
                    <?php the_field('panel_1_content'); ?>
                    <div class="spacer-15"></div>
                    <?php get_template_part('block','awards'); ?>
                </div>
                <div class="spacer-60"></div>
                <div class="panel_1_video">
                    <div class="video">
                        <div class="video-embed">
                            <iframe width="560" height="315" class="responsive-video" src="https://www.youtube.com/embed/<?php the_field('panel_1_here_video'); ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="content">
                        <?php the_field('panel_1_here_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_2" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-33">
                    <h2><?php the_field('panel_2_headline'); ?></h2>
                </div>
                <div class="column-66" id="testimonial_slider">
                <?php if( have_rows('testimonials') ): ?>
                <?php while( have_rows('testimonials') ): the_row(); ?>
                    <?php $post_object = get_sub_field('testimonial'); ?>
                    <?php if( $post_object ): ?>
                        <?php // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <div class="testimonial-box">
                            <p><?php the_content(); ?></p>
                            <p class="author"><span class="stars"></span> <?php the_field('testimonial_author'); ?></p>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_3" class="homepage white">
        <div class="container">
            <div class="columns">
                <div class="column-full image-block">
                <?php 
                $image = get_field('panel_3_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?> 
                </div>
                <div class="column-50 centered center panel-icon">
                    <h3><?php the_field('panel_3_copy'); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_4" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-full centered center block top">
                    <h1><span><?php the_field('panel_4_headline'); ?></span></h1>
                    <div class="subheadline"><?php the_field('panel_4_subheadline'); ?></div>
                </div>
                <div class="spacer-60"></div>
                <div class="column-66 center">
                    <?php the_field('panel_4_content'); ?>
                </div>
            </div>
            <div class="spacer-30"></div>
            <div class="spacer-15"></div>
            <div class="columns practice-areas">
            <?php if( have_rows('panel_4_practice_area_boxes') ): ?>
            <?php while( have_rows('panel_4_practice_area_boxes') ): the_row(); ?>
                <a class="column-25 practice-area-box" href="<?php the_sub_field('page_link'); ?>" title="<?php the_sub_field('practice_area_title'); ?>">
                    <div class="img-box">
                    <?php 
                    $image = get_sub_field('practice_area_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?> 
                    </div>
                    <div class="copy-box">
                        <p class="strong"><?php the_sub_field('practice_area_title'); ?></p>
                        <p><?php the_sub_field('practice_area_copy'); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="hp_panel_5" class="homepage white">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php the_field('panel_5_content'); ?>
                </div>
                <div class="column-33">
                    <?php echo do_shortcode('' . get_field('panel_5_form') . ''); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_6" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-full image-block">
                <?php 
                $image = get_field('panel_6_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?> 
                </div>
                <div class="column-50 centered center panel-icon">
                    <h3><?php the_field('panel_6_copy'); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_7" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('panel_7_content'); ?>
                </div>
                <div class="column-50 menu-buttons">
                    <div class="buttons">
                    <?php if( have_rows('panel_7_dui_menu') ): ?>
                    <h4><?php the_field('panel_7_dui_menu_title'); ?></h4>
                    <ul>
                    <?php while( have_rows('panel_7_dui_menu') ): the_row(); ?>
                        <?php $post_object = get_sub_field('menu_item'); ?>
                        <?php if( $post_object ): ?>
                            <?php // override $post
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    </div>
                    <div class="buttons">
                    <?php if( have_rows('panel_7_dui_process') ): ?>
                    <h4><?php the_field('panel_7_dui_process_title'); ?></h4>
                    <ul>
                    <?php while( have_rows('panel_7_dui_process') ): the_row(); ?>
                        <?php $post_object = get_sub_field('menu_item'); ?>
                        <?php if( $post_object ): ?>
                            <?php // override $post
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_8" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-full image-block">
                <?php 
                $image = get_field('panel_8_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?> 
                </div>
                <div class="column-50 centered center panel-icon">
                    <h3><?php the_field('panel_8_copy'); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section id="hp_panel_9" class="homepage">
        <div class="container">
            <div class="columns">
                <div class="column-full centered center block top">
                    <h1><span><?php the_field('panel_9_headline'); ?></span></h1>
                    <div class="subheadline"><?php the_field('panel_9_subheadline'); ?></div>
                </div>
                <div class="spacer-60"></div>
                <div class="column-66 block">


                    <?php if( have_rows('locations_feature') ): ?>
                    <?php $n=1; ?>
                    <div data-tabs class="tabs">
                    <?php while( have_rows('locations_feature') ): the_row(); ?>
                    
                        <div class="tab">
                            <input type="radio" name="tabgroup" id="tab-<?php echo $n; ?>" checked>
                            <label for="tab-<?php echo $n; ?>"><?php the_sub_field('location_name'); ?></label>
                            <div class="tabcontent" style="background:url('<?php the_sub_field('background_image'); ?>');">
                                <div class="county-image">
                                <?php 
                                $image = get_sub_field('county_image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                </div>
                                <div class="text">
                                <h4><?php the_sub_field('location_name'); ?> </h4>
                                <p><?php the_sub_field('location_text'); ?> </p>
                                <p><a href="<?php the_sub_field('location_link'); ?>">Learn more about our <?php the_sub_field('location_name'); ?> office</a></p>
                                </div>
                            </div>
                        </div>
                    
                    <?php $n++; ?>
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>


                    <?php the_field('panel_9_content'); ?>
                </div>
                <div class="column-33 menu-buttons">
                    <div class="buttons">
                    <?php if( have_rows('panel_9_resources_menu') ): ?>
                    <h4><?php the_field('panel_9_resources_menu_title'); ?></h4>
                    <ul>
                    <?php while( have_rows('panel_9_resources_menu') ): the_row(); ?>
                        <?php $post_object = get_sub_field('menu_item'); ?>
                        <?php if( $post_object ): ?>
                            <?php // override $post
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','pre-footer'); ?>

</div><!-- #front-page -->

<?php get_footer();?>