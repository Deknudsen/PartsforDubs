<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>

<div class="om_os">
    <p> <?php the_field("om_os_titel") ?>
    <p> <?php the_field("om_os_info") ?> 
</div>
<?php endwhile; ?>

<?php

get_footer(); ?>