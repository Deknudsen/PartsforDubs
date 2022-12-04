<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>

<div class="kontakt">
    <p> <?php the_field("kontakt_titel") ?> 
    <p> <?php the_field("kontakt_info") ?>
</div>
<?php endwhile; ?>

<?php

get_footer(); ?>