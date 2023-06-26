<!--Accueil-->
<?php
$title = get_field('hero')['titre'];
$shortDesc = get_field('hero')['short_description'];
$image = get_field('hero')['picture'];
$bntLeft = get_field('hero')['boutons']['bouton_left'];
$bntRight = get_field('hero')['boutons']['bouton_right'];
$title_news = get_field('last_news')['title'];
$short_description = get_field('last_news')['short_description'];
$images = get_field('last_news')['image'];
$services1 = get_field('services')['first_service'];
$services2 = get_field('services')['second_service'];



?>
<?php get_header() ?>

<!--ACF section-->
<!--Bloc hero-->
<div class="container">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3"><?= $title ?></h1>
            <p class="col-lg-10 fs-4">
            <p><?= $shortDesc ?></p></p>
            <a href="<?= $bntLeft['url'] ?>" class="btn btn-primary btn-lg"><?= $bntLeft['title'] ?></a>
            <a href="<?= $bntRight['url'] ?>" class="btn btn-primary btn-lg"><?= $bntRight['title'] ?></a>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
        </div>
    </div>

    <!--    Bloc last news-->

    <div class="container custom-container">
        <h1 class="text-center"><?= $title_news ?></h1>
        <p class="text-center"><?= $short_description ?></p>

        <div class="row">
            <div class="col-md-4">
<!--                <img src="--><?php //= $image['image_left']['url'] ?><!--" alt="--><?php //= $image['alt'] ?><!--">-->
                <p><?= $short_description ?></p>
<!--                <a href="--><?php //= $images['image-left']['url'] ?><!--" alt="--><?php //= $images['image-left']['title'] ?><!--">Lien</a>-->
            </div>
            <div class="col-md-4">
<!--                <img src="--><?php //var_dump($image['image_middle']['url']); ?><!--" alt="--><?php //= $image['alt'] ?><!--">-->
                <p><?= $short_description ?></p>
<!--                <a href="--><?php //= $images['image-middle']['url'] ?><!--" alt="--><?php //= $images['image-middle']['title'] ?><!--">Lien</a>-->
            </div>
            <div class="col-md-4">
<!--                <img src="--><?php //= $image['image_right']['url'] ?><!--" alt="--><?php //= $image['alt'] ?><!--">-->
                <p><?= $short_description ?></p>
<!--                <a href="--><?php //= $images['image-right']['url'] ?><!--" alt="--><?php //= $images['image-right']['title'] ?><!--">Lien</a>-->
            </div>
        </div>
    </div>
<!--Bloc Service-->
    <div class="container">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3"><?= $services1['title'] ?></h1>
                <p class="col-lg-10 fs-4">
                <p><?= $services1['short_description'] ?></p></p>
                <a href="<?= $services1['lien']['url'] ?>" class="btn sm-btn-primary btn-lg"><?= $services1['lien']['title'] ?></a>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <img src="<?= $services1['image']['url'] ?>" alt="<?= $image['alt'] ?>">
            </div>
        </div>


</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

