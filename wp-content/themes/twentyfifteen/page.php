<?php 
    get_header();

    while (have_posts(  )) {
        the_post(  ); ?>
        <h1>This is a page</h1>
        <h2>This is a page</h2>
        <?php the_content(); ?>
    <?php }
    
    get_footer();
?>