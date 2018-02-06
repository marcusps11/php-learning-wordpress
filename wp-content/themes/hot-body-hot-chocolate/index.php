<?php
// Main template file
  get_header();

?>

<div class="main-content-width-wrapper">
    <div class="two-column-entry">
        <h1><?php echo get_the_title() ?></h1>
    
        <main class="main-content">
           <?php
                if(have_posts()):
                    while (have_posts()) :
                            the_posts();
                              the_content();
                    endwhile;
                  endif;
            ?>
        </main>
    </div>
</div>

