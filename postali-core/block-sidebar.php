<!-- bucks county -->
<?php if (is_tree('2275')) { ?>

    <div class="sidebar-header">
        Bucks County Criminal Defense
    </div>
    <div class="sidebar-menu">
    <?php
        $args = array(
            'container' => false,
            'theme_location' => 'sidebar-nav-bucks'
        );
        wp_nav_menu( $args );
    ?>	
    </div>

<!-- delaware county -->
<?php } elseif (is_tree('2277')) { ?>

    <div class="sidebar-header">
        Delaware County Criminal Defense
    </div>
    <div class="sidebar-menu">
    <?php
        $args = array(
            'container' => false,
            'theme_location' => 'sidebar-nav-delaware'
        );
        wp_nav_menu( $args );
    ?>	
    </div>

<!-- montgomery county -->
<?php } elseif (is_tree('2280')) { ?>

<div class="sidebar-header">
    Montgomery County Criminal Defense
</div>
<div class="sidebar-menu">
<?php
    $args = array(
        'container' => false,
        'theme_location' => 'sidebar-nav-montgomery'
    );
    wp_nav_menu( $args );
?>	
</div>

<!-- downtown -->
<?php } elseif (is_tree('2286')) { ?>

<div class="sidebar-header">
    Philadelphia Criminal Defense
</div>
<div class="sidebar-menu">
<?php
    $args = array(
        'container' => false,
        'theme_location' => 'sidebar-nav-downtown'
    );
    wp_nav_menu( $args );
?>	
</div>

<?php } elseif(get_field('create_custom_sidebar_menu')) {?>

    <div class="sidebar-header">
        <?php the_field('sidebar_menu_title') ?>
    </div>
    <div class="sidebar-menu">
        <?php the_field('custom_menu'); ?>
    </div>


<?php } else { ?>
<?php
if ( is_page() ) :
    if( $post->post_parent ) {
        $children = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'hierarchical' => 1,
            'child_of' => $post->post_parent,
            'post_type' => 'page',
            'post_status' => 'publish'
        );
            
    } else {
        $children = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'hierarchical' => 1,
            'child_of' => $post->ID,
            'post_type' => 'page',
            'post_status' => 'publish'
        );
    }

    if ($children) { ?>
    <?php global $post;
    $pageid = $post->post_parent;
    $sidebar_menu_title = get_field('sidebar_menu_title', $pageid);
    ?>
        <div class="sidebar-header">
            <?php echo $sidebar_menu_title; ?>
        </div>
        <div class="sidebar-menu">
            <ul class="menu" id="menu-practice-areas-menu">
                <?php $n=1; ?>
                <?php 
                $pages = get_pages($children); 
                $numItems = count($pages);

                foreach($pages as $page) { 
                    $child_page_title = get_field('alternate_interior_menu_title', $page->ID) ? get_field('alternate_interior_menu_title', $page->ID) : $page->post_title; ?>
                    <?php if ($n == 6) { ?>
                        <span class="more-topics">More Topics</span>
                        <span class="sidebar-more">
                        <li id="<?php echo $n; ?>"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $child_page_title; ?></a></li>
                        <?php $n++; ?>
                    <?php } elseif($n === $numItems) { ?>
                        </span>
                    <?php } else { ?>
                        <li id="<?php echo $n; ?>"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $child_page_title; ?></a></li>
                    <?php $n++; ?>
                    <?php } ?>

                <?php } ?>
            </ul>
        </div>

    <?php } else { ?>
        <div class="sidebar-header">Our Practice Areas</div>
        <div class="sidebar-menu">
            <?php the_field('practice_area_menu','options'); ?>	
            <div class="spacer-30"></div>
            <p class="sidebar-more"><a href="/practice-areas/" title="Read more results">All Practice Areas</a> <span class="icon-tick-down"></span></p>
        </div>
    <?php } ?>
<?php endif; ?>

<?php } ?>

<div class="spacer-30"></div>

<?php if(get_field('add_testimonial','options')) { ?>
    <div class="testimonial-block">
        <p class="testimonial_header">Client Reviews</p>
        <p class="testimonial"><?php the_field('sidebar_testimonial','options'); ?></p>
        <span class="stars"></span>
        <p><strong><?php the_field('sidebar_testimonial_author','options'); ?></strong></p>
    </div>
<?php } ?>

<?php if( get_field('add_custom_sidebar_content') ) { ?>
    <div class="additional-copy-block">
        <?php the_field('additional_sidebar_content'); ?>
    </div>
<?php } ?>