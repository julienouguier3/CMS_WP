<!--Actualites-->

<?php get_header(); ?>
<?php
$query = new WP_Query(['posts_per_page' => 1]);
if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
                <p class="lead my-3"><?php the_excerpt(); ?></p>
                <p class="lead mb-0">Lire la suite</p>
            </div>
        </div>
    </a>
<?php endwhile; endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            query_posts('offset=1');
            get_template_part('loop');
            ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>