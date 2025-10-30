
<div id="awards" class="slide">
    <?php $n=1 ?>
    <?php if( have_rows('awards_slider') ): ?>
    <?php while( have_rows('awards_slider') ): the_row(); ?>  
        <div class="column-20" id="award_<?php echo $n; ?>">
        <div class="award-image">
        <?php 
        $image = get_sub_field('award_image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
        <p class="award-description">
            <?php the_sub_field('award_description'); ?>
        </p>
        </div>
        <?php $n++; ?>
    <?php endwhile; ?>
    <?php endif; ?> 
</div>
