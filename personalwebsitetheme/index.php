<?php   // <?php used for entering php code.

get_header();   // gets the php data from header.php

if (have_posts()):  // If we have posts.
    while(have_posts()): the_post(); /*?> used for dropping out of php code*/ ?> 
    
    <article class = "post">
        <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); /*Put the title of each WordPress post here*/ ?></a></h2> 
        <?php the_content()?>
    </article>

    <?php endwhile;

else: echo '<p>No content found</p>';   // echo is PHP's print statement
endif;

get_footer();   // gets the php data from footer.php

?>