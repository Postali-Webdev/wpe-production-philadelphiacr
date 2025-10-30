<?php
/**
 * Template Name: Results Archive
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
	'post_type' => 'results',
	'posts_per_page' => '9',
	'post_status' => 'publish',
	'order' => 'DESC',
    'paged' => $paged,
);
$the_query = new WP_Query($args);

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article>
                        
                            <div class="meta-content">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="spacer-15"></div>
                                </a>
                                <p class="blog-date"><strong>Posted: </strong><?php the_date(); ?> in 
                                <span class="excerpt"><?php the_excerpt(); ?></span>
                            </div>
                        
                    </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="spacer-60"></div>
                    <?php the_posts_pagination(); ?>

                </div>
                <div class="column-33 sidebar-block block">
                    <?php get_template_part('block','sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>