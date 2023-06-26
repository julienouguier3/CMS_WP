<!--Mise en forme page contact-->
<?php
$title = get_field('titre');
$shortDesc = get_field('short_description');
$bntLeft = get_field('boutons')['bouton_left'];
$bntRight = get_field('boutons')['bouton_right'];
$map = get_field('map');
?>
<?php get_header(); ?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3"><?= $title ?></h1>
            <p class="col-lg-10 fs-4">
            <p><?= $shortDesc ?></p>
            <a href="<?= $bntLeft['url'] ?>" class="btn btn-primary btn-lg"><?= $bntLeft['title'] ?></a>
            <a href="<?= $bntRight['url'] ?>" class="btn btn-primary btn-lg"><?= $bntRight['title'] ?></a>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <?= do_shortcode($map)?>
        </div>
    </div>
</div>

<?php get_footer(); ?>