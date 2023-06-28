<!--Service seul-->
<?php
$service = get_field('services');
$title = $service['titre'];
$desc = $service['short_description'];
//$images = get_field('images')['images'];

get_header();


?>

<div class="card text-center">
    <div class="card-header">
      <?=$title ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"> <?=$title?></h5>
        <p class="card-text" ><?=$desc?></p>
<!--        <img src="--><?php //=$images['image1']['url']?><!--" alt="--><?php //=$images['image1']['title']?><!--"></a>-->
    </div>




<?php get_footer() ?>

