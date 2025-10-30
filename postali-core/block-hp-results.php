<div class="results_content">

    <?php
    $args = array (
        'post_type' => 'results',
        'posts_per_page' => '3',
        'post_status' => 'publish',
        'order' => 'DESC',
    );
    $hp_results = new WP_Query($args);
    ?>

    <ul class="recent-posts">
    <?php while( $hp_results->have_posts() ) : $hp_results->the_post(); ?>
        <li>
            <p class="date"><?php the_date(); ?></p>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <p><?php the_title(); ?></p>
            </a>
        </li>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>

    <a href="/results/" class="more-results">View All Case Results</a>

</div>