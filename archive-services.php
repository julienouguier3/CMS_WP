<!--Listing des services / Page service-->
<?php
get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <a href="<?= get_the_permalink() ?>"><h2><?php the_title() ?></h2>
        <p><?php the_excerpt(); ?></p>
    </a>

<?php endwhile; endif; ?>
<?php get_footer() ?>
