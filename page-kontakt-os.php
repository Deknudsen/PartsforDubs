<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>

<div class="kontakt">
    <p> <?php the_field("kontakt_titel") ?> 
    <p> <?php the_field("kontakt_navn") ?>
    <p> <?php the_field("kontakt_vej") ?>
    <p> <?php the_field("kontakt_by") ?>
    <p> <?php the_field("kontakt_land") ?>
    <p> <?php the_field("kontakt_muligheder") ?>
</div>
<?php endwhile; ?>

<?php

get_footer(); ?>