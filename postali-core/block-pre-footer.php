    <?php 
    $post_ID = get_the_ID();
    $parentpost_id = wp_get_post_parent_id( $post_ID );
    ?>    
    
    <?php if (get_field('contact_headline')) { ?>

    <section id="pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <h2><?php the_field('contact_headline'); ?></h2>
                    <p class="subhead"><?php the_field('contact_subheadline'); ?></p>
                    <p><?php the_field('contact_copy'); ?></p>
                    <div class="pre-footer-contact">
                        <div class="contact-block-left">
                        <?php if(is_tree('2275')) { ?>
                            <a href="tel:<?php the_field('bucks_phone','options'); ?>" class="btn"><?php the_field('bucks_phone','options'); ?></a>
                        <?php } elseif (is_tree('2280')) { ?>
                            <a href="tel:<?php the_field('montgomery_county_phone','options'); ?>" class="btn"><?php the_field('montgomery_county_phone','options'); ?></a>
                        <?php } elseif (is_tree('2277')) { ?>
                            <a href="tel:<?php the_field('delaware_county_phone','options'); ?>" class="btn"><?php the_field('delaware_county_phone','options'); ?></a>
                        <?php } elseif (is_tree('2286')) { ?>
                            <a href="tel:<?php the_field('downtown_philadelphia_phone','options'); ?>" class="btn"><?php the_field('downtown_philadelphia_phone','options'); ?></a>
                        <?php } else { ?>
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } elseif (get_field('contact_headline', $parentpost_id)) { ?>
    
    <section id="pre-footer">
        <div class="container">
            <div class="columns">
                <div class="column-50 block">
                    <h2><?php the_field('contact_headline', $parentpost_id); ?></h2>
                    <p class="subhead"><?php the_field('contact_subheadline', $parentpost_id); ?></p>
                    <p><?php the_field('contact_copy', $parentpost_id); ?></p>
                    <div class="pre-footer-contact">
                        <div class="contact-block-left">

                        <?php if(is_tree('2275')) { ?>
                            <a href="tel:<?php the_field('bucks_phone','options'); ?>" class="btn"><?php the_field('bucks_phone','options'); ?></a>
                        <?php } elseif (is_tree('2280')) { ?>
                            <a href="tel:<?php the_field('montgomery_county_phone','options'); ?>" class="btn"><?php the_field('montgomery_county_phone','options'); ?></a>
                        <?php } elseif (is_tree('2277')) { ?>
                            <a href="tel:<?php the_field('delaware_county_phone','options'); ?>" class="btn"><?php the_field('delaware_county_phone','options'); ?></a>
                        <?php } elseif (is_tree('2286')) { ?>
                            <a href="tel:<?php the_field('downtown_philadelphia_phone','options'); ?>" class="btn"><?php the_field('downtown_philadelphia_phone','options'); ?></a>
                        <?php } else { ?>
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="btn"><?php the_field('phone_number','options'); ?></a>
                        <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>
    
    
    