<!--Service seul-->
<?php
$service = get_field('services');
$title = $service['titre'];
$desc = $service['short_description'];
$images = get_field('images');
$image = get_field('services')['image'];

get_header();


?>

<div class="card text-center">
    <div class="card-header">
        <h3><?= $title ?></h3>
    </div>
    <div class="card-body">
        <div class="container">
            <div class=".col-lg-7 text-center text-lg-start">
                <!--            <h3 class="card-title"> --><?php //= $title ?><!--</h3>-->
                <p class="card-text"><?= $desc ?></p>

            </div>
        </div>
    </div>

    <!--Container images-->

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <div class="image-container">
                        <img src="<?= $images['image1']['url'] ?>" alt="<?= $images['image1']['alt'] ?>"
                             class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <div class="image-container">
                        <img src="<?= $images['image2']['url'] ?>" alt="<?= $images['image2']['alt'] ?>"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="image-container">
                    <img src="<?= $images['image3']['url'] ?>" alt="<?= $images['image3']['alt'] ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="image-container">
                    <img src="<?= $images['image4']['url'] ?>" alt="<?= $images['image4']['alt'] ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="image-container">
                    <img src="<?= $images['image5']['url'] ?>" alt="<?= $images['image5']['alt'] ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <?php get_footer() ?>

