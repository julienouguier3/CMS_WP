<?php get_header(); ?>
<?php
$query = new WP_Query(['posts_per_page' => 1]);
if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
    ?>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
            <p class="lead my-3"><?php the_excerpt(); ?></p>
            <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white font-weight-bold">Lire la suite</a></p>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php
query_posts('offset=1');
get_template_part('loop');
?>

<?php get_footer(); ?>