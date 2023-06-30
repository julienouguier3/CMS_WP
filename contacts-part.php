<!--Une partie de la page contact-->
<?php
$contact = get_field('contact');
$title = $contact['titre'];
$desc = $contact['description'];
$bntLeft = $contact['boutons']['btn_left'];
$bntRight = $contact['boutons']['btn-right'];
$map = $contact['map'];
//var_dump($bntLeft);
?>


<div class="row contact align-items-center g-lg-5 py-5">
    <div class="col-md-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3"><?= $title ?></h1>
        <p class="col-lg-10 fs-4"><?= $desc ?></p>
        <div class="d-flex justify-content-center">
            <a href="<?= $bntLeft['url'] ?>" class="btn btn-primary btn-lg"><?= $bntLeft['title'] ?></a>
            <a href="<?= $bntRight['url'] ?>" class="btn btn-primary btn-lg"><?= $bntRight['title'] ?></a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="site__sidebar" style="width: 50%;border-radius: 10px;"><?= do_shortcode($map) ?></div>
    </div>
</div>

