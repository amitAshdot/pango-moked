<?php
    $familyTitle = get_field('familyTitle');
    $familyText = get_field('familyText');
?>
<!-- FAMILY SECTION START-->
<section class="family-section">

    <img defer src="./assets/images/common/smile-blue.webp" alt="" class="family-smiley lazyload" width="103" height="48" />
    <div class="family-icon-container">
        <img defer src="./assets/images/family-section/arrow-down.webp" class="lazyload family-icon" alt="חץ למטה" width="27" height="32">
    </div>


   <div class="family-container">
       <div class="family-card">
            <img defer src="./assets/images/family-section/Frame.webp" class="lazyload family-card-img" alt="סמיילי כחול" width="312" height="77">

            <h3> <?php echo $familyTitle; ?></h3>
            <p> <?php echo $familyText; ?></p>
       </div>

   </div>

    <!-- CAROUSEL  START-->
    <div class="carousel"></div>
    <!-- CAROUSEL  END-->
    <div class="float circle"></div>

</section>
<!-- FAMILY SECTION END-->