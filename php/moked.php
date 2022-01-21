<?php /* Template Name: moked */ ?>
<?php 


$args = [];
get_template_part( 'template-parts/top-section.php', 'top-section', $args );
get_template_part( 'template-parts/meet-section.php', 'meet-section', $args ); 
get_template_part( 'template-parts/details-section.php', 'details-section', $args ); 
?>

<!-- CAROUSEL  START-->
<div class="carousel"></div>
<!-- CAROUSEL  END-->

<?php
get_template_part( 'template-parts/family-section.php', 'family-section', $args ); 
?>
<!-- CAROUSEL  START-->
<div class="carousel"></div>
<!-- CAROUSEL  END-->
<?php
get_template_part( 'template-parts/qa-section.php', 'qa-section', $args ); 
get_template_part( 'template-parts/gallery.php', 'gallery', $args ); 
?>
