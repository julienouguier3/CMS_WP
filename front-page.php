<!--Accueil-->
<?php
$hero = get_field('hero');
$title = $hero['titre'];
$shortDesc = $hero['short_description'];
$image = $hero['picture'];
$bntLeft = $hero['boutons']['bouton_left'];
$bntRight = $hero['boutons']['bouton_right'];
//$map = get_field('contact')['map'];
//$bntLeft = get_field('contact')['boutons']['btn_left'];
?>
<?php get_header() ?>

<!--ACF section-->
<!--Bloc hero-->
<div class="container">

    <aside class="site__sidebar">
        <ul>
            <?php get_sidebar('Sidebar principale'); ?>

        </ul>
    </aside>
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3"><?= $title ?></h1>
            <p class="col-lg-10 fs-4"><?= $shortDesc ?></p>
            <a href="<?= $bntLeft['url'] ?>" class="btn btn-primary btn-lg"><?= $bntLeft['title'] ?></a>
            <a href="<?= $bntRight['url'] ?>" class="btn btn-primary btn-lg"><?= $bntRight['title'] ?></a>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" style="width: 100%;border-radius: 10px;">
        </div>
    </div>
    <!--Bloc service-->

    <!--    <a href="--><?php //= $bntLeft['url'] ?><!--" class="btn btn-primary btn-lg">-->
    <!--    --><?php //= $bntLeft['title'] ?><!--</a>-->
    <!--    <a href="--><?php //= $bntRight['url'] ?><!--" class="btn btn-primary btn-lg">-->
    <!--        --><?php //= $bntRight['title'] ?><!--</a>-->
    <!--    <div class="col-md-10 mx-auto col-lg-5">-->
    <!--        --><?php //= do_shortcode($map) ?>
    <!--    </div>-->
    <!---->
    <!---->
    <!--Bloc contact-->
    <?php get_template_part('page-contacts') ?>
</div>


<?php dynamic_sidebar() ?>
<?php get_footer(); ?>

