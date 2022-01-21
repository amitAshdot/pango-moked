<!-- DETAILS SECTION START-->
<section class="details-section">
<?php

if( have_rows('detils') ):
    while( have_rows('detils') ) : the_row();
        $detilsIcon = get_sub_field('detilsIcon');
        $detilsIconUrl = $detilsIcon["url"];
        $detilsIconAlt = $detilsIcon["alt"];
        $detilsTitle = get_sub_field('detilsTitle');
        $detilsText = get_sub_field('detilsText'); 
        ?>
        
            <div class="detail">
                <div class="detail-top">
                    <div class="detail-top-icon-container">
                        <img defer src="<?php echo $detilsIconUrl ?>" class="lazyload detail-top-icon"  width="32" height="32">
                    </div>
                    <h3><?php echo $detilsTitle ?></h3>
                </div>
                <div class="detail-bottom">
                <?php echo $detilsText ?>
                </div>
            </div>
            <?php endwhile; endif;?>
    <div class="float circle"></div>
</section>
<!-- DETAILS SECTION END-->