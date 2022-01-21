<?php

    $meetLogo = get_field('meetLogo');
    $meetLogoUrl = $meetLogo["url"];
    $meetLogoAlt = $meetLogo["alt"];
    $meetText = get_field('meetText');
?>

<!-- MEET SECTION START-->

<section class="meet-section">

<picture >
    <source media='(max-width: 760px)' srcset="<?php echo $meetLogoUrl; ?>" defer  width="80" height="32">
    <img defer src="<?php $meetLogoUrl?>" class="lazyload meet-logo"  width="80" height="32">
</picture>


<h2 class="meet-title">נעים להכיר</h2>
<div class="meet-text">
      <p> <?php echo $meetText; ?></p>
 
    <img defer src="./assets/images/meet-section/blue-face.webp" class="lazyload meet-smiley" alt="סמיילי כחול" width="104" height="184">
</div>
<!-- MEET SECTION END-->
</section>