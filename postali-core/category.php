<?php
/**
 * Template Name: Category template
 * 
 * @package Postali Child
 * @author Postali LLC
 */

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','banner'); ?>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    
                <?php while( have_posts() ) : the_post(); ?>
                    <article>
                        
                            <div class="meta-content">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="spacer-15"></div>
                                </a>
                                <p class="blog-date"><strong>Posted: </strong><?php the_date(); ?> in 
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
                                <div class="spacer-15"></div>
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