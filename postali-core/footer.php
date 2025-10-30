<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-full footer-logo">
                    <a href="/"><img src="/wp-content/uploads/2024/06/fienman_defense_logo.png" alt="Fienman Criminal Defense"></a>
                </div>
                <div class="spacer-30"></div>
                <div class="column-66 block left">
                    <div class="spacer-30"></div>
                    <h4><strong>Contact Us Today</strong></h4>
                    <p>

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


                    <a href="mailto:<?php the_field('email_address','options'); ?>" class="link" title="Email Today"><?php the_field('email_address','options'); ?></a>
                    </p>
                    <div class="spacer-line"></div>
                    <div class="footer-address">
                        <div class="address">

                        <?php if (is_tree('2275')) { // bucks county // ?>
                            <p><strong>Bucks County Office</strong><br>
                            <?php the_field('bucks_address','options'); ?><br>
                            <a href="tel:<?php the_field('bucks_phone','options'); ?>" title="Call Today"><?php the_field('bucks_phone','options'); ?></a>
                            </p>
                            <div class="footer-map">
                            <iframe src="<?php the_field('bucks_map','options'); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } elseif (is_tree('2277')) { // delaware county // ?>
                            <p><strong>Delaware County Office</strong><br>
                            <?php the_field('delaware_address','options'); ?><br>
                            <a href="tel:<?php the_field('delaware_county_phone','options'); ?>" title="Call Today"><?php the_field('delaware_county_phone','options'); ?></a>
                            </p>
                            <div class="footer-map">
                            <iframe src="<?php the_field('delaware_county_map','options'); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } elseif (is_tree('2280')) { // montgomery county // ?>
                            <p><strong>Montgomery County Office</strong><br>
                            <?php the_field('montgomery_address','options'); ?><br>
                            <a href="tel:<?php the_field('montgomery_county_phone','options'); ?>" title="Call Today"><?php the_field('montgomery_county_phone','options'); ?></a>
                            </p>
                            <div class="footer-map">
                            <iframe src="<?php the_field('montgomery_county_map','options'); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } else { // everywhere else // ?>
                            <p><strong>Philadelphia Office</strong><br>
                            <?php the_field('address','options'); ?><br>
                            <a href="tel:<?php the_field('phone_number','options'); ?>" title="Call Today"><?php the_field('phone_number','options'); ?></a>
                            </p>
                            <div class="footer-map">
                            <iframe src="<?php the_field('map_embed','options'); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>                                
                            </div>
                        </div>
                        <div class="locations">
                            <p><strong>Other County Offices</strong></p>
                            <?php
                                $args = array(
                                    'container' => false,
                                    'theme_location' => 'footer-nav'
                                );
                                wp_nav_menu( $args );
                            ?>	
                        </div>
                        <div class="county">

                        <?php if (is_tree('2275')) { // bucks county // ?>
                            <img src="/wp-content/uploads/2024/06/bucks_county.png" title="Bucks County">
                        <?php } elseif (is_tree('2277')) { // delaware county // ?>
                            <img src="/wp-content/uploads/2024/06/delaware_county.png" title="Delaware County">
                        <?php } elseif (is_tree('2280')) { // montgomery county // ?>
                            <img src="/wp-content/uploads/2024/06/montgomery_county.png" title="Montgomery County">
                        <?php } else { // everywhere else // ?>
                            <img src="/wp-content/uploads/2024/06/philadelphia_county.png" title="Philadelphia County">
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="column-33 form-block right">
                    <?php if(!is_page_template('page-contact.php')) { ?>
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section id="footer-utility">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'utility-nav'
                        );
                        wp_nav_menu( $args );
                    ?>	
                    <p class="disclaimer"><?php the_field('disclaimer_text','options'); ?></p>
                    <?php if(is_page_template('front-page.php')) { ?>
                    <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:0 0 20px 0;"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

</footer>

<script defer type="text/javascript" src="//cdn.callrail.com/companies/616869340/6259283deac4b1b7b452/12/swap.js"></script>

<?php wp_footer(); ?>

<!-- Intaker Chat Widget -->	
<script>(function (w,d,s,v,odl){(w[v]=w[v]||{})['odl']=odl;;
	var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
	j.src='https://intaker.azureedge.net/widget/chat.min.js';
	f.parentNode.insertBefore(j,f);
	})(window, document, 'script','Intaker', 'fienmandefense');
</script>
<!-- /Intaker Chat Widget -->	

</body>
</html>


