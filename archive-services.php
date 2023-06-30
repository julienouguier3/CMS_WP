<!--Listing des services / Page service-->
<?php
get_header();

?>
<!--Remonte chaque CustomPostType-->
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<?php $service = get_field('services');
    $title = $service['titre'];
    $desc = $service['short_description'];
    $lien = $service['lien'];
    $image = $service['image'];

?>

        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-wrap">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $image['url'] ?>" class="card-img-top" alt="<?= $image['alt'] ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?= $title ?></h3>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?= $lien['url'] ?>"><?= $lien['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php endwhile; endif; ?>

<?php get_footer() ?>


