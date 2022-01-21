<!-- QA SECTION START-->
<section class="QA-section">
    <h2>עוד כמה דברים שכדאי להכיר</h2>


    <?php
    if( have_rows('questions') ):
        while( have_rows('questions') ) : the_row();
            $detilsTitle = get_sub_field('question');
            $detilsText = get_sub_field('answer');
          ?>
                <div class="question">
                    <h3 class="question-title"><?php echo $detilsTitle; ?></h3>
                    <div class="question-answer"><?php echo $detilsText; ?></div>
                </div>
         <?php
        endwhile;
    endif;
    ?>
</section>
<!-- QA SECTION END-->