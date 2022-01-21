<?php
    $topImage = get_field('topImg');
        $topImageUrl = $topImage["url"];
    $topImageAlt = $topImage["alt"];
    $topTitle = get_field('topTitle');

?>
      
<!-- TOP SECTION START-->
<section class="top-section">
    
        <picture class="lazyload top-img">
            <source media='(max-width: 760px)' srcset="<?php echo $topImageUrl; ?>" defer  width="480" height="720">
            <img defer src="<?php echo $topImageUrl; ?>" class="lazyload"  width="480" height="720">
        </picture>";


        <h1 class="top-title"> <?php echo $meetText; ?> </h1>";
    <img defer src="./assets/images/common/smile-blue.webp" alt="" class="top-smiley lazyload" width="103" height="48" />

</section>
<!-- TOP SECTION END-->