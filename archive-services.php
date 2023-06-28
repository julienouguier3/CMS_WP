<!--Listing des services / Page service-->
<?php
$service = get_field('services');
$title = $service['titre'];
$desc = $service['short_description'];
$lien = $service['lien'];
$image = $service['image'];
get_header() ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    </a>
    <div class="container ">
        <div class="row ">
            <div class="col-md-12">
                <div class="d-flex flex-wrap">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $image['url'] ?>" class="card-img-top" alt="<?= $image['alt'] ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?= $title ?></h3>
                            <p class="card-text"><?= $desc ?></p>
                            <a href="<?= $lien['url'] ?>"><?= $lien['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer() ?>


